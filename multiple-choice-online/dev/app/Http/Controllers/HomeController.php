<?php

namespace App\Http\Controllers;
use Session;
use Config;
use DB;
use Mail;
use App\Admin;
use App\Options;
use App\Faqs;
use App\User;
use App\country;
use App\course;
use App\Years;
use App\User_test;
use App\Pre_questiondetails;
use App\Subscription_content;
use App\Grades;
use App\Transaction;
use App\Withdraw;
use App\Subscribers;
use App\Reffer;
use Redirect;
use Illuminate\Http\Request;
use Auth;


class HomeController extends Controller
{
  
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            $this->middleware(function ($request, $next){
             if(Session()->exists('user'))
            { 
           
              $userid =Session()->get('userid');
              $were= [['id','=',$userid],['status','=','1']];
              $exists= User::getUsermatch($were);
              if(count($exists) > 0)
              { 
                $user_id = session('user_id');
                return $next($request);
              }if(count($exists) == 0)
              { 
                $this->middleware('auth');
                Auth::logout();
                Session::flush('user');
                session()->forget('user');
                session()->flush('user');
                return Redirect('/'); 
              }
            }
              return $next($request);
            });
                  

        
   
       ///$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data['user'] = Auth::user();
            $users = Auth::user();
            $data['page']='home';
        if(!empty($data['user']) && $users->id !='' && isset($users->id))
        {  
            $userdata = array(
            'id'=> $users->id ,
            'name' => $users->name ,
            'lname' => $users->lname ,
            'email' => $users->email ,
            );
            Session::put('user',$userdata);
            Session::put('userid', $users->id);
            Session::save(); 
            $data['title']='Home';
             $id=Session()->get('userid');
            $testes = User_test::getbycondition(array('user_id'=>$id));
            $getids = array();
            $data['questions']=array();
            $totalquestion=0;
            $correctanswers= 0;
             foreach($testes as $test)
             {
                 $totalquestion += $test->total_questions;
                 $correctanswers += $test->correct_answers;
                 $were = [['id','=',$test->test_id],['status', '!=','2' ]];
                $getids =  Pre_questiondetails::getoption($were);
                 //array_push($data['questions'], $getids);
                 
             }
             $data['questions']=User_test::getbyconditionpagination2(array('user_id'=>$id));
            $data['totalquestion'] = $totalquestion; 
            $data['correctanswers'] = $correctanswers;
            $gettags = [['type', '=', '2'],['status', '=', '1']]; 
            $gettags2 = [['type', '=', '3'],['status', '=', '1']]; 
            $data['subject']=course::getbycondition($gettags);
            $data['chapter']=course::getbycondition($gettags2);
            $data['courses']= course::getoption();
          return view('/user/home',$data);
        }else if(session()->exists('user'))
        {
        $userid =Session()->get('userid');
         $data['title']='Home';
          $id=Session()->get('userid');
            $were = [['user_id','=',$id],['status', '!=','2' ]];
           // $data['questions'] = Pre_questiondetails::getoption($were);
               $testes = User_test::getbycondition(array('user_id'=>$id));
            $getids = array();
            $data['questions']=array();
            $totalquestion=0;
            $correctanswers= 0;
             foreach($testes as $test)
             {
                 $totalquestion += $test->total_questions;
                 $correctanswers += $test->correct_answers;
                 $were = [['id','=',$test->test_id],['status', '!=','2' ]];
                $getids =  Pre_questiondetails::getoption($were);
                 //array_push($data['questions'], $getids);
                 
             }
             $data['questions']=User_test::getbyconditionpagination2(array('user_id'=>$id));
            $data['totalquestion'] = $totalquestion; 
            $data['correctanswers'] = $correctanswers;
            $gettags = [['type', '=', '2'],['status', '=', '1']]; 
            $gettags2 = [['type', '=', '3'],['status', '=', '1']]; 
            $data['subject']=course::getbycondition($gettags);
            $data['chapter']=course::getbycondition($gettags2);
            $data['courses']= course::getoption();
        $data['user'] = User::getbycondition(array('id'=>$userid));
         return view('/user/home',$data);   
        }else
        {
            return redirect('/');
        }
        
        
    }
  
    public function setsession($id)
    {
        
        Session::put('pack_id',$id);
        Session::save(); 
        
    }
    public function about()
    {
        $this->middleware('auth');
        $data['user'] = Auth::user();
         $data['options'] = Options::getoption();
          $data['title']='About';
        return view('about',$data);
    }
    public function question(Request $request)
    {
         $data = $request->all();
        
        if(isset($data['country']) && $data['country']!='')
        {
         $gettags = [['parent', '=', $data['country']],['status', '=', '1']]; 
         $text = 'Select State';
          $states=country::getbycondition($gettags);
             if ($request->ajax()) {
    		    $view = view('user.states', compact('states','text'))->render();
               return response()->json(['html'=>$view]);
    		}
        }
        
        if(isset($data['subject']) && $data['subject']!='')
        {
          $gettags = [['parent', '=', $data['subject']],['type', '=', '2'],['status', '=', '1']]; 
           $text = 'Select Subject';
          $states=course::getbycondition($gettags);
             if ($request->ajax()) {
    		    $view = view('user.states', compact('states','text'))->render();
               return response()->json(['html'=>$view]);
    		}  
        }
        
        if(isset($data['chapter']) && $data['chapter']!='')
        {
          $gettags = [['parent', '=', $data['chapter']],['type', '=', '3'],['status', '=', '1']]; 
           $text = 'Select Chapter';
          $states=course::getbycondition($gettags);
             if ($request->ajax()) {
    		    $view = view('user.states', compact('states','text'))->render();
               return response()->json(['html'=>$view]);
    		}  
        }
        $were = array('status'=>'1');
        $data['grades']= Grades::getbycondition($were);
        $data['years']= Years::getbycondition($were);
        $data['courses']= course::getoption();
        $this->middleware('auth');
        $data['user'] = Auth::user();
        $data['countries']= country::getoption();
        $users = Auth::user();
        
        $data['title']='Question';
        $data['page']='question';
        
        if(!empty($data['user']) && $users->id !='' && isset($users->id))
        {
        return view('/user/question',$data);
        }
        else if(session()->exists('user'))
        {
            return view('/user/question',$data);
        }
        else
        {
            return redirect('/');
        }
        
    }
    public function test()
    {
          $this->middleware('auth');
        $data['user'] = Auth::user();
        return view('/user/test-summary'); 
        
    }
    public function start_test()
    {
        
         $this->middleware('auth');
        $data['user'] = Auth::user();
        return view('/user/start_test'); 
    }
    public function question_details ()
    {
       $this->middleware('auth');
        $data['user'] = Auth::user();
        return view('/user/question_details'); 
        
    }
    public function subscription()
    {
        $this->middleware('auth');
        $data['user'] = Auth::user();
        $users = Auth::user();
        $data['title']='Subscription';
        $data['page']='subscription';
        if(!empty($data['user']) && $users->id !='' && isset($users->id))
        {  
            $userdata = array(
            'id'=> $users->id ,
            'name' => $users->name ,
            'lname' => $users->lname ,
            'email' => $users->email ,
            );
            Session::put('user',$userdata);
            Session::put('userid', $users->id);
            Session::save(); 
            $userid = $users->id;
            $userid =Session()->get('userid');
            $were = array('uid'=>$userid);
            $data['applyrequests'] = Withdraw::getbycondition($were);
            $were = array('uid'=>$userid,'status'=>'2');
            $data['applyrequests2'] = Withdraw::getbycondition($were);
            $were2 = array('uid'=>$userid,'status'=>'1');
            $data['reffered'] = Reffer::getbycondition($were2);
            $data['transactions'] =  Transaction::getbycondition(array('user_id'=>$userid));
            $data['walletamount']=0;
            if(!empty($data['reffered']))
            {
                foreach($data['reffered'] as $reffer)
                {
                    $data['walletamount'] += $reffer->amount;
                }
            }
            if(!empty($data['transactions']))
            {
                foreach($data['transactions'] as $reffers)
                {
                    if(!empty($reffers->walletuse))
                    {
                     $data['walletamount'] -= $reffers->walletuse;
                    }
                }
            }
            
            $data['withdrwaamount']=0;
            if(!empty($data['applyrequests2']))
            {
                foreach($data['applyrequests2'] as $reffers)
                {
                    if(!empty($reffers->amount))
                    {
                        $data['walletamount'] -= $reffers->amount;
                        $data['withdrwaamount'] +=$reffers->amount;
                    }
                }
            }
              $data['subscription'] = Subscription_content::getbycondition([['status','=','1'],['id','!=','1']]);
           return view('/user/subscription',$data);
        }else if(session()->exists('user'))
        {  $userid =Session()->get('userid');
             $were = array('uid'=>$userid);
            $data['applyrequests'] = Withdraw::getbycondition($were);
            $were = array('uid'=>$userid,'status'=>'2');
            $data['applyrequests2'] = Withdraw::getbycondition($were);
            $were2 = array('uid'=>$userid,'status'=>'1');
            $data['reffered'] = Reffer::getbycondition($were2);
            $data['transactions'] =  Transaction::getbycondition(array('user_id'=>$userid));
            $userid =Session()->get('userid');
            $were = array('uid'=>$userid);
            $data['applyrequests'] = Withdraw::getbycondition($were);
            $were = array('uid'=>$userid,'status'=>'2');
            $data['applyrequests2'] = Withdraw::getbycondition($were);
            $were2 = array('uid'=>$userid,'status'=>'1');
            $data['reffered'] = Reffer::getbycondition($were2);
            $data['walletamount']=0;
            if(!empty($data['reffered']))
            {
                foreach($data['reffered'] as $reffer)
                {
                    if(!empty($reffer->amount))
                    {
                     $data['walletamount'] += $reffer->amount;
                    }
                }
            }
            
            
            if(!empty($data['transactions']))
            {
                foreach($data['transactions'] as $reffers)
                {
                    if(!empty($reffers->walletuse))
                    {
                     $data['walletamount'] -= $reffers->walletuse;
                    }
                }
            }
            
            $data['withdrwaamount']=0;
            if(!empty($data['applyrequests2']))
            {
                foreach($data['applyrequests2'] as $reffers)
                {
                    if(!empty($reffers->amount))
                    {
                        $data['walletamount'] -= $reffers->amount;
                        $data['withdrwaamount'] +=$reffers->amount;
                    }
                }
            }
             $data['subscription'] = Subscription_content::getbycondition([['status','=','1'],['id','!=','1']]);
           $userid =Session()->get('userid');
           return view('/user/subscription',$data);
        }
        
        
        
    }
    public function attempt_test (Request $request)
    {
        $this->middleware('auth');
        $data['user'] = Auth::user();
        if(!empty($data['user']) || session()->exists('user'))
        {
        $data = $request->all();
        
        if(isset($data['country']) && $data['country']!='')
        {
        $gettags = [['parent', '=', $data['country']],['status', '=', '1']]; 
        $text = 'Select State';
        $states=country::getbycondition($gettags);
        if ($request->ajax()) {
        $view = view('user.states', compact('states','text'))->render();
        return response()->json(['html'=>$view]);
        }
        }
        
        if(isset($data['subject']) && $data['subject']!='')
        {
        $gettags = [['parent', '=', $data['subject']],['type', '=', '2'],['status', '=', '1']]; 
        $text = 'Select Subject';
        $states=course::getbycondition($gettags);
        if ($request->ajax()) {
        $view = view('user.states', compact('states','text'))->render();
        return response()->json(['html'=>$view]);
        }  
        }
        
        if(isset($data['chapter']) && $data['chapter']!='')
        {
        $gettags = [['parent', '=', $data['chapter']],['type', '=', '3'],['status', '=', '1']]; 
        $text = 'Select Chapter';
        $states=course::getbycondition($gettags);
        if ($request->ajax()) {
            $view = view('user.states', compact('states','text'))->render();
            return response()->json(['html'=>$view]);
        }  
        }
            $were = array('status'=>'1');
            $data['grades']= Grades::getbycondition($were);
            $data['years']= Years::getbycondition($were);
            $data['courses']= course::getoption();
            $data['countries']= country::getoption();
            $data['title']= 'Attempt Test';
            $data['page']='attempt_test';
            return view('/user/attempt-test',$data);
        }else
        {
            return redirect('/');
        }
         
    
    }
     public function myprofile()
    {
        $this->middleware('auth');
        $data['user'] = Auth::user();
        $users = Auth::user();
        $data['title']='My Profile';
        $data['page']='myprofile';
        $data['countries'] = country::getoption();
        if(!empty($data['user']) && $users->id !='' && isset($users->id))
        {  
            $userdata = array(
            'id'=> $users->id ,
            'name' => $users->name ,
            'lname' => $users->lname ,
            'email' => $users->email ,
            );
            Session::put('user',$userdata);
            Session::put('userid', $users->id);
            Session::save(); 
            $userid = $users->id;
            $data['transactions'] = Transaction::getbycondition(array('user_id'=>$userid));
            $data['users'] = User::getbycondition(array('id'=>$userid));
           if(!empty($data['users'][0]['country']))
            {
                 $gettagss = [['parent', '=', $data['users'][0]['country']],['status', '=', '1']]; 
            }else
            {
                $gettagss = [['parent', '!=', 0],['status', '=', '1']]; 
            }
            
             $data['states']=country::getbycondition($gettagss);
            return view('/user/myprofile',$data);
          
        }else if(session()->exists('user'))
        {
        $userid =Session()->get('userid');
        $data['transactions'] = Transaction::getbycondition(array('user_id'=>$userid));
        $data['users'] = User::getbycondition(array('id'=>$userid));
         if(!empty($data['users'][0]['country']))
            {
                 $gettagss = [['parent', '=', $data['users'][0]['country']],['status', '=', '1']]; 
            }else
            {
                $gettagss = [['parent', '!=', 0],['status', '=', '1']]; 
            }
            
             $data['states']=country::getbycondition($gettagss);
         return view('/user/myprofile',$data);   
        }else
        {
            return redirect('/');
        }
        
        
    
    }
     public function contact()
    {
        $this->middleware('auth');
        $data['user'] = Auth::user();
        $data['options'] = Options::getoption();
        $data['title']= 'Contact Us';
        return view('contact',$data);
        
    
    }
     public function pricing()
    {
        $data['options'] = Options::getoption();
        $data['user'] = Auth::user();
        $data['subscription'] = Subscription_content::getuser();
        $data['title']= 'Pricing';
        $data['subscription'] = Subscription_content::getbycondition([['status','=','1']]);
        if(empty(Session()->get('userid')))
        {
             return view('pricing',$data);
        }else
        {
            return redirect('/subscription');
        }
       
    }
    public function faq(Request $request)
    {
    $data['user'] = Auth::user();
    $data['options'] = Options::getoption();
    $data['optionses'] = Faqs::getoption2();
     $data['title']= 'Faq';
    if ($request->ajax()) {
    return view('presult',$data);
    }
        return view('faq',$data);
        
    
    }
     public function referral()
    {
        $data['options'] = Options::getoption();
         $data['title']= 'Referral';
        return view('referral',$data);
        
    
    }
    
    public function contactus(Request $request)
    { 
        if($request->isMethod('post'))
          {
               $data= $request->all();
               unset($data['_token']);
              $admin = Admin::getUserDetail('1');
              if(!empty($admin[0]->name))
              {
                  $name = $admin[0]->name;
              }
              else
              {
                $name = 'Admin';  
              }
              if(!empty($admin[0]->email))
              {
                  $email = $admin[0]->email;
              }else
              {
                  $email='admin@gmail.com';
              }
                $variavle = Config::get('constants.Contactus_html');
                $variavles = explode(' ',$variavle);
                foreach($variavles as $key=> $variavle)
                {
                    if($variavle=='#name#')
                    {
                        $variavles[$key]=$data["name"];
                    }
                    if($variavle=='#email#')
                    {
                        $variavles[$key]=$data["email"];
                    }
                    if($variavle=='#phone#')
                    {
                        $variavles[$key]=$data["phone"];
                    }
                    if($variavle=='#message#')
                    {
                        $variavles[$key]=$data["message"];
                    }
                }
                
                $data = array_filter($data);
                $messags = array();
                $hash    = md5(uniqid(rand(), true));
              //  $htmls = 'User '.$data["name"].' Send a query there email is '.$data["email"].' phone no.'.$data["phone"].' and there message is '.$data["message"];
                $htmls = implode(' ',$variavles);
                $header = str_replace("#Subject#",$data["subject"],Config::get('constants.Contactus_header'));
                $buttonhtml = Config::get('constants.Contactus_btn_html');
                $pass_url  = url(''); 
                $path = url('resources/views/email.html');
                $email_path    = file_get_contents($path);
                $email_content = array('[name]','[pass_url]','[htmls]','[buttonhtml]','[header]');
                $replace  = array($name,$pass_url,$htmls,$buttonhtml,$header);
                $message = str_replace($email_content,$replace,$email_path);
                $subject = Config::get('constants.Contactus_subject');
                $header = 'From: myhost.indiit.com' . "\r\n";
                $header = "MIME-Version: 1.0\r\n";
                $header = "Content-type: text/html\r\n";
                $retval = mail($email,$subject,$message,$header); 
            if($retval)
            {
               $messags['message'] = "Thanks for get in touch with us";
               $messags['erro']= 101; 
            }else
            {
                $messags['message'] = "Error to submit the data, try again later";
                $messags['erro']= 202;
            }
            
          }else
          {
             $messags['message'] = "Error to submit the data, try again later";
             $messags['erro']= 202; 
             return redirect('/contact');
          }
          echo json_encode($messags);
        die;
    }
    
    public function subscribe(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data= $request->all();
            unset($data['_token']);
            $email = array('email'=>$data['email']);
            $exists = Subscribers::getoptionmatch($email);
            $messags= array();
            if(count($exists) > 0)
            {
                $messags['message'] = "Error email is already exists";
                $messags['erro']= 202; 
            }else
            {
                if(Subscribers::insertoption($email))
                {
                   $messags['message'] = "Email Subscribed Successfully";
                  $messags['erro']= 101;  
                }else
                {
                  $messags['message'] = "Error to submit email";
                  $messags['erro']= 202;   
                }
            }
            
        
        }else
        {
         return Redirect::back();
        }  
        echo json_encode($messags);
        die; 
    }
    
    public function reffer_friend(Request $request)
    {
         if($request->isMethod('post'))
        {
            if(session()->exists('user'))
            {
                $data= $request->all();
                unset($data['_token']);
                $email = [['email','=',$data['email']],['status','!=','2']];
                $exists = User::getUsermatch($email);
                $messags= array();
                if(count($exists) > 0)
                {
                    $messags['message'] = "Error email is already exists";
                    $messags['erro']= 202; 
                }else
                {     $id = Session()->get('userid');
                    $weres = [['friend_email','=',$data['email']],['uid','=',$id],['status','=','1']];
                     $reffercheck =  Reffer::getoptionmatch($weres);
                        if(count($reffercheck) > 0)
                        {
                            $messags['message'] = "Error email is already exists";
                            $messags['erro']= 202; 
                        }else
                        {
                            $were= [['id','=', Session()->get('userid')]];
                            $user = User::getbycondition($were);
                                foreach($user as $u){
                                 $r = $u;
                                }
                            if(count($user)!=0)
                            {
                                $user = User::getbycondition($were);
                                foreach($user as $u){
                                 $r = $u;
                                }
                                $id = $r->id; 
                                $name = '';
                                $hash    = md5(uniqid(rand(), true));
                                $string  = $id."&".$hash;
                                 $iv = base64_encode($string);
                                $htmls = str_replace("#name#",ucfirst($r->name),Config::get('constants.Reffer_html'));
                                $header = Config::get('constants.Reffer_header'); 
                                $buttonhtml = Config::get('constants.Reffer_btn_html');
                                $pass_url  = url('getinvitation/'.$iv); 
                                $path = url('resources/views/email.html');
                                $subject = Config::get('constants.Reffer_subject');
                                $to_email=$data['email'];
                                if($this->createnotification($id,$name,$htmls,$header,$buttonhtml,$pass_url,$path,$subject,$to_email))
                                {        $amout = Subscription_content::getUsermatch(array('id'=>'3'));
                
                                    $weres2 = [['friend_email','=',$data['email']],['uid','=',Session()->get('userid')]];
                                    $reffercheck2 =  Reffer::getoptionmatch($weres2);
                                   
                                      if(count($reffercheck2) > 0)
                                    {
                                       
                                        $datas = array(
                                            'friend_email'=>$data['email'],
                                            'uid'=>$id,
                                            'amount'=>'0',
                                            'token'=>$iv
                                            );
                                            $were3 =  array(
                                            'friend_email'=>$data['email'],
                                            'uid'=>$id
                                            );
                                        if(Reffer::updateoption2($datas,$were3))
                                        {
                                            $messags['message'] = "Refferal Email Sent Successfully";
                                            $messags['erro']= 101;  
                                        }else
                                        {
                                            $messags['message'] = "Error to send refferal email";
                                            $messags['erro']= 202;   
                                        }
                                    }else
                                    {    $datas = array(
                                            'friend_email'=>$data['email'],
                                            'uid'=>$id,
                                            'amount'=>'0',
                                            'token'=>$iv
                                            );
                                        if(Reffer::insertoption($datas))
                                        {
                                        $messags['message'] = "Refferal Email Sent Successfully";
                                        $messags['erro']= 101;  
                                        }else
                                        {
                                        $messags['message'] = "Error to send refferal email";
                                        $messags['erro']= 202;   
                                        }  
                                    }
                                }
                             
                            }
                            
                        }
                }
            }else
            {
                $messags['message'] = "Error session has been expierd";
              $messags['erro']= 202; 
            }
            
        
        }else
        {
         return Redirect::back();
        }  
        echo json_encode($messags);
        die;
    }
    
    public function createnotification($id='',$name='',$htmls='',$header='',$buttonhtml='',$pass_url='',$path='',$subject='',$to_email='')
    {  
            $email_path    = file_get_contents($path);
            $email_content = array('[name]','[pass_url]','[htmls]','[buttonhtml]','[header]');
            $replace  = array($name,$pass_url,$htmls,$buttonhtml,$header);
            $message = str_replace($email_content,$replace,$email_path);
            $header = 'From: myhost.indiit.com' . "\r\n";
            $header = "MIME-Version: 1.0\r\n";
            $header = "Content-type: text/html\r\n";
            $retval = mail($to_email,$subject,$message,$header); 
             if($retval)
             {
               return true;    
             }else
             {
                 return false;
             }
    }
    
    public function getinvitations(Request $request,$id='')
    {
        $this->middleware('auth');
         Auth::logout();
        Session::flush();
        $request->session()->forget('user');
        $request->session()->flush();
        $data['getdata'] = Reffer::getbycondition(array('token'=>$id));
        $data['package'] = Subscription_content::getbycondition(array('id'=>'3'));
        if(count($data['getdata']) > 0)
        {      //$this->middleware('csrf');
            $data['options'] = Options::getoption();
            $data['user'] = Auth::user();
            $data['subscription'] = Subscription_content::getuser();
            $data['title']= 'Pricing';
            $data['subscription'] = Subscription_content::getbycondition([['status','=','1'],['id','!=','1']]);
            //Session()->put('pack_id',$data['package'][0]->id);
            //Session::save(); 
            //return view('/auth/register',$data);
            $data['tokenss'] = $id;
            return view('pricing',$data);
        }else
        { $this->middleware('auth');
         Auth::logout();
        Session::flush();
        $request->session()->forget('user');
        $request->session()->flush();
         return Redirect('/login')->with('error','Link has been expierd');
        }
    }
    
    public function getuserregister(Request $request,$sbid='',$id='')
    {
        
        $data['getdata'] = Reffer::getbycondition(array('token'=>$id));
        $data['packagess'] = Subscription_content::getbycondition(array('id'=>$sbid));
        if(count($data['getdata']) > 0)
        {      $this->middleware('csrf');
            Session()->put('pack_id',$sbid);
            Session::save(); 
            return view('/auth/register',$data);
        }else
        { $this->middleware('auth');
        Auth::logout();
        Session::flush();
        $request->session()->forget('user');
        $request->session()->flush();
         return Redirect('/login')->with('error','Link has been expierd');
        }
    }
    
    
}
