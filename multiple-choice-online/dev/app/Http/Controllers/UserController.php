<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Config;
use App\Admin;
use App\course;
use Auth;
use Hash;
use App\Years;
use App\Grades;
use App\Notification;
use App\Faqs;
use App\Pre_questiondetails;
use App\Question_answers;
use App\Options;
use App\Testimonials;
use App\User_test_answers;
use App\country;
use App\User;
use App\Transaction;
use App\Reffer;
use App\Hours;
use App\Withdraw;
use App\User_test;
use DB;
use Mail;
use Illuminate\Routing\Redirector;
class UserController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, Redirector $redirect)
    {
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        header('Pragma: no-cache');
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
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
              }else
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
                  

        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        if(Auth::user()){
            $data['options'] = App\Options::getoption();
            $data['testimonials'] = App\Testimonials::getoption();
            return view('index',$data);
        }else
        {
            $data['options'] = App\Options::getoption();
            $data['testimonials'] = App\Testimonials::getoption();
            return view('index',$data);   
        }
    }
      public function register($id)
    {
       
        
       $messags = array();
     if(!empty($_POST['email'])){
         if(isset($_POST['usertoken']))
         {
             $iv= $_POST['usertoken'];
             $amounts = $_POST['referrel_amount'];
             unset($_POST['usertoken']);
             unset($_POST['referrel_amount']);
         }
       $data=array(
           'name'=>$_POST['name'],
           'lname'=>$_POST['lname'],
           'email'=>$_POST['email'],
           'phone'=>$_POST['phone'],
           'country'=>$_POST['country'],
           'package_id'=>$_POST['package_id'],
           'password'=>Hash::make($_POST['password']),
           'status'=>'1',
           );
         $email = [['email','=',$_POST['email']],['status','!=','2']];
        $exists = User::getUsermatch($email);
        if(count($exists) > 0 )
        {
            $messags['message'] = "user with this email is already exists";
            $messags['erro']= 202;
            $messags['url']= ''; 
        }
            if(User::insertUser($data))
                                        {
                                            $userdatas = User::getbycondition(array('email'=>$_POST['email']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            $date = '';
                                            if($_POST['package_id'] == '1'){
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                            }
                                            if($_POST['package_id'] == '3')
                                            {
                                                $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+1 year", $date));   
                                            }
                                            if($_POST['package_id'] == '2')
                                            {
                                                $start_date =date('Y-m-d');  
                                                $date = strtotime($start_date);
                                                $date = date('Y-m-d',strtotime("+1 month", $date));  
                                            }
                                            $transaction_data=array(
                                            'transaction_id'=>$_POST['transaction_id'],
                                            'user_id'=>$users->id,
                                             'package_id'=>$_POST['package_id'],
                                             'status'=>$_POST['status'],
                                             'currency'=>$_POST['currency'],
                                            'amount'=>$_POST['amount'],
                                            'exp'=>$date
                                
                                             );
           
                                           Transaction::insertUser($transaction_data);
                                           if($_POST['package_id'] == '1'){
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                             
                                               
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>$_POST['package_id'],
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'02:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                
                                             );
                                             }elseif($_POST['package_id'] == '3'){
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+1 year", $date));  
                                             
                                               
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>$_POST['package_id'],
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'00:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                
                                             );
                                             }else
                                             {
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+1 month", $date));  
                                               
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>$_POST['package_id'],
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'00:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                
                                             );
                                             }
                                       
                                        if(!empty($iv) && !empty($_POST['email']))
                                        {  
                                            $datas = array(
                                            'status'=>'1',
                                            'friend_id'=>$users->id,
                                            'amount' => $amounts,
                                            'token'=> rand()
                                            );
                                            $were3 =  array(
                                            'token'=>$iv
                                            );
                                            Reffer::updateoption2($datas,$were3);
                                        }
                                        
                                        
                                            Hours::insertUser($hours_data);
                                            
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            } 
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }
           
           
           
           
     }
    }
    public function facebooklogin(Request $request)
    {
           $messags = array();
                if($request->isMethod('post'))
                {
                    $data = $request->all();
                    $data['status'] = '1';
                   if(!empty($data['fb_id']) || !empty($data['email']))
                   {
                       if(!empty($data['email']))
                       {
                           $condition1 = [['email','=',$data['email']],['status','!=','2']];
                           $d1 = User::getUsermatch($condition1);
                               if(count($d1) > 0)
                               {
                                   $condition2 = [['email','=',$data['email']],['status','!=','0']];
                                   $d2 = User::getUsermatch($condition2);
                                    if(count($d2) > 0)
                                    {
                                        
                                      $userdatas = User::getbycondition(array('email'=>$data['email']));
                                      	if(count($userdatas)>0  && !empty($userdatas))
                                        {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
	                                        Session::save(); 
                                        }
                                        $messags['message'] = "You logged in successfully!!";
                                        $messags['erro']= 101;
                                        $messags['url']= url('/home'); 
                                    }else
                                    {
                                        $messags['message'] = "Error your profile is exists but your account is inactive";
                                        $messags['erro']= 202;
                                        $messags['url']= ''; 
                                    }
                               }else
                               {
                                    $condition3 = [['fb_id','=',$data['fb_id']],['status','!=','2']];
                                    $d3 = User::getUsermatchdb($condition3);
                                   if(count($d3) > 0)
                                    { 
                                        $condition4 = [['fb_id','=',$data['fb_id']],['status','!=','0']];
                                        $d4 = User::getUsermatch($condition4);
                                        if(count($d4) > 0)
                                        {
                                            //$condition3 = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            $userdatas = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            } 
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home');
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        }
                                    }else
                                    {
                                        
                                        if(isset($data['picture']))
                                        {
                                                $temp = explode('/', url('/'));
                                                $url = $data['picture'];
                                                $destination_folder = public_path('/profile/');
                                                $uniquesavename=time().uniqid(rand());
                                                $newfname = $destination_folder.$uniquesavename.'.jpeg'; //set your file ext
                                                $savepath= $uniquesavename.'.jpeg';
                                                $file = fopen ($url, "rb");
                                                if ($file) {
                                                $newf = fopen ($newfname, "a"); // to overwrite existing file
                                                
                                                if ($newf)
                                                while(!feof($file)) {
                                                fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
                                                
                                                }
                                                }
                                                
                                                if ($file) {
                                                fclose($file);
                                                }
                                                
                                                if ($newf) {
                                                fclose($newf);
                                                }
                                                
                                                $data['profile'] = $savepath;
                                                 unset($data['picture']);
                                        }
                                        
                                       
                                        $data = array_filter($data);
                                        $data['package_id']='1';
                                        if(User::insertUser($data))
                                        {
                                            $userdatas = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            
                                            /* add free package user logged in by facebook*/
                                           
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                            $transaction_data=array(
                                            'transaction_id'=>'0',
                                            'user_id'=>$users->id,
                                             'package_id'=>'1',
                                             'status'=>'completed',
                                             'currency'=>'USD',
                                            'amount'=>'0',
                                            'exp'=>$date
                                
                                             );
                                           if(Transaction::insertUser($transaction_data))
                                           {
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>'1',
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'02:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                            
                                
                                             );
                                              Hours::insertUser($hours_data);
                                             }
                                            /* end free package**/
                                            
                                            
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            } 
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive 1";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        }
                                        
                                    }
                               }
                             
                           }else
                           {
                                 $condition3 = [['fb_id','=',$data['fb_id']],['status','!=','2']];
                                $d5 =  User::getUsermatchdb($condition3);
                                   if(count($d5) > 0)
                                    { 
                                        $condition4 = [['fb_id','=',$data['fb_id']],['status','!=','0']];
                                       $d6 =  User::getUsermatch($condition4);
                                        if(count($d6) > 0)
                                        {
                                           // $condition3 = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            $userdatas = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            }
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        }
                                    }else
                                    {
                                        
                                         if(isset($data['picture']))
                                        {
                                                $temp = explode('/', url('/'));
                                                $url = $data['picture'];
                                                $destination_folder = public_path('/profile/');
                                                $uniquesavename=time().uniqid(rand());
                                                $newfname = $destination_folder.$uniquesavename.'.jpeg'; //set your file ext
                                                $savepath= $uniquesavename.'.jpeg';
                                                $file = fopen ($url, "rb");
                                                if ($file) {
                                                $newf = fopen ($newfname, "a"); // to overwrite existing file
                                                
                                                if ($newf)
                                                while(!feof($file)) {
                                                fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
                                                
                                                }
                                                }
                                                
                                                if ($file) {
                                                fclose($file);
                                                }
                                                
                                                if ($newf) {
                                                fclose($newf);
                                                }
                                                
                                                $data['profile'] = $savepath;
                                                 unset($data['picture']);
                                        }
                                        $data = array_filter($data);
                                        $data['package_id']='1';
                                        if(User::insertUser($data))
                                        {
                                            $userdatas = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            /* add free package user logged in by facebook*/
                                           
                                             $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date)); 
                                            $transaction_data=array(
                                            'transaction_id'=>'0',
                                            'user_id'=>$users->id,
                                             'package_id'=>'1',
                                             'status'=>'completed',
                                             'currency'=>'USD',
                                            'amount'=>'0',
                                             'exp'=>$date
                                
                                             );
                                           if(Transaction::insertUser($transaction_data))
                                           {
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>'1',
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'02:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                
                                             );
                                              Hours::insertUser($hours_data);
                                             }
                                            /* end free package**/
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            } 
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive 1";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        } 
                                    }
                                
                           }
                       
                       
                   }else
                   {
                        $messags['message'] = "Error to login, try again later";
                        $messags['erro']= 202;
                        $messags['url']= '';
                        
                   }
                   
                }else
                {
                    return Redirect::route('myprofile'); 
                }
        
        echo json_encode($messags);
                         die;
    }
    
    public function getSignOut(Request $request)
    {
        $this->middleware('auth');
        Auth::logout();
        Session::flush();
        $request->session()->forget('user');
        $request->session()->flush();
	    return Redirect('/'); 
    }
    
    public function googlelogin(Request $request)
    {
      $messags = array();
                if($request->isMethod('post'))
                {
                    $data = $request->all();
                    //echo '<pre>'; print_r($data); die;
                    $data['status'] = '1';
                   if(!empty($data['g_id']) || !empty($data['email']))
                   {
                       if(!empty($data['email']))
                       {
                           $condition1 = [['email','=',$data['email']],['status','!=','2']];
                           $d1 = User::getUsermatch($condition1);
                               if(count($d1) > 0)
                               {
                                   $condition2 = [['email','=',$data['email']],['status','!=','0']];
                                   $d2 = User::getUsermatch($condition2);
                                    if(count($d2) > 0)
                                    {
                                      $userdatas = User::getbycondition(array('email'=>$data['email']));
                                        if(count($userdatas)>0  && !empty($userdatas))
                                        {
                                        foreach($userdatas as $u){
                                        $users = $u;
                                        }
                                        $userdata = array(
                                        'id'=> $users->id ,
                                        'name' => $users->name ,
                                        'lname' => $users->lname ,
                                        'email' => $users->email ,
                                        );
                                        Session::put('user',$userdata);
                                        Session::put('userid', $users->id);
                                        Session::save(); 
                                        }
                                      
                                        $messags['message'] = "You logged in successfully!!";
                                        $messags['erro']= 101;
                                        $messags['url']= url('/home'); 
                                    }else
                                    {
                                        $messags['message'] = "Error your profile is exists but your account is inactive";
                                        $messags['erro']= 202;
                                        $messags['url']= ''; 
                                    }
                               }else
                               {
                                    $condition3 = [['g_id','=',$data['g_id']],['status','!=','2']];
                                    $d3 = User::getUsermatchdb($condition3);
                                   if(count($d3) > 0)
                                    { 
                                        $condition4 = [['g_id','=',$data['g_id']],['status','!=','0']];
                                        $d4 = User::getUsermatch($condition4);
                                        if(count($d4) > 0)
                                        {
                                            //$condition3 = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            $userdatas = User::getbycondition(array('g_id'=>$data['g_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            } 
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home');
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        }
                                    }else
                                    {
                                       if(isset($data['picture']))
                                        {
                                                $temp = explode('/', url('/'));
                                                $url = $data['picture'];
                                                $destination_folder = public_path('/profile/');
                                                $uniquesavename=time().uniqid(rand());
                                                $newfname = $destination_folder.$uniquesavename.'.jpeg'; //set your file ext
                                                $savepath= $uniquesavename.'.jpeg';
                                                $file = fopen ($url, "rb");
                                                if ($file) {
                                                $newf = fopen ($newfname, "a"); // to overwrite existing file
                                                
                                                if ($newf)
                                                while(!feof($file)) {
                                                fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
                                                
                                                }
                                                }
                                                
                                                if ($file) {
                                                fclose($file);
                                                }
                                                
                                                if ($newf) {
                                                fclose($newf);
                                                }
                                                
                                                $data['profile'] = $savepath;
                                                 unset($data['picture']);
                                        }
                                        $data = array_filter($data);
                                        $data['package_id']='1';
                                        if(User::insertUser($data))
                                        {
                                            $userdatas = User::getbycondition(array('g_id'=>$data['g_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            /* add free package user logged in by facebook*/
                                           
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));
                                            $transaction_data=array(
                                            'transaction_id'=>'0',
                                            'user_id'=>$users->id,
                                             'package_id'=>'1',
                                             'status'=>'completed',
                                             'currency'=>'USD',
                                            'amount'=>'0',
                                             'exp'=>$date
                                
                                             );
                                           if(Transaction::insertUser($transaction_data))
                                           {
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>'1',
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'02:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                
                                             );
                                              Hours::insertUser($hours_data);
                                             }
                                            /* end free package**/
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            }
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive 1";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        }
                                        
                                    }
                               }
                             
                           }else
                           {
                                 $condition3 = [['g_id','=',$data['g_id']],['status','!=','2']];
                                $d5 =  User::getUsermatchdb($condition3);
                                   if(count($d5) > 0)
                                    { 
                                        $condition4 = [['g_id','=',$data['g_id']],['status','!=','0']];
                                       $d6 =  User::getUsermatch($condition4);
                                        if(count($d6) > 0)
                                        {
                                           // $condition3 = User::getbycondition(array('fb_id'=>$data['fb_id']));
                                            $userdatas = User::getbycondition(array('g_id'=>$data['g_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            } 
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        }
                                    }else
                                    {
                                         if(isset($data['picture']))
                                        {
                                                $temp = explode('/', url('/'));
                                                $url = $data['picture'];
                                                $destination_folder = public_path('/profile/');
                                                $uniquesavename=time().uniqid(rand());
                                                $newfname = $destination_folder.$uniquesavename.'.jpeg'; //set your file ext
                                                $savepath= $uniquesavename.'.jpeg';
                                                $file = fopen ($url, "rb");
                                                if ($file) {
                                                $newf = fopen ($newfname, "a"); // to overwrite existing file
                                                
                                                if ($newf)
                                                while(!feof($file)) {
                                                fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
                                                
                                                }
                                                }
                                                
                                                if ($file) {
                                                fclose($file);
                                                }
                                                
                                                if ($newf) {
                                                fclose($newf);
                                                }
                                                
                                                $data['profile'] = $savepath;
                                                 unset($data['picture']);
                                        }
                                        $data = array_filter($data);
                                        $data['package_id']='1';
                                        if(User::insertUser($data))
                                        {
                                            $userdatas = User::getbycondition(array('g_id'=>$data['g_id']));
                                            if(count($userdatas)>0  && !empty($userdatas))
                                            {
                                            foreach($userdatas as $u){
                                            $users = $u;
                                            }
                                            $userdata = array(
                                            'id'=> $users->id ,
                                            'name' => $users->name ,
                                            'lname' => $users->lname ,
                                            'email' => $users->email ,
                                            );
                                            /* add free package user logged in by facebook*/
                                           
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));
                                            $transaction_data=array(
                                            'transaction_id'=>'0',
                                            'user_id'=>$users->id,
                                             'package_id'=>'1',
                                             'status'=>'completed',
                                             'currency'=>'USD',
                                            'amount'=>'0',
                                             'exp'=>$date
                                
                                             );
                                           if(Transaction::insertUser($transaction_data))
                                           {
                                            $start_date =date('Y-m-d');  
                                            $date = strtotime($start_date);
                                            $date = date('Y-m-d',strtotime("+7 day", $date));  
                                             $hours_data=array(
                                            'user_id'=>$users->id,
                                            'package_id'=>'1',
                                            'total_questions_uploaded'=>'0',
                                            'total_hours'=>'02:00:00',
                                            'expiry'=>$date,
                                            'current_question_count'=>0,
                                
                                             );
                                              Hours::insertUser($hours_data);
                                             }
                                            /* end free package**/
                                            Session::put('user',$userdata);
                                            Session::put('userid', $users->id);
                                            Session::save(); 
                                            }
                                            $messags['message'] = "You logged in successfully!!";
                                            $messags['erro']= 101;
                                            $messags['url']= url('/home'); 
                                        }else
                                        {
                                            $messags['message'] = "Error your profile is exists but your account is inactive 1";
                                            $messags['erro']= 202;
                                            $messags['url']= ''; 
                                        } 
                                    }
                                
                           }
                       
                       
                   }else
                   {
                        $messags['message'] = "Error to login, try again later";
                        $messags['erro']= 202;
                        $messags['url']= '';
                        
                   }
                   
                }else
                {
                    return Redirect::route('myprofile'); 
                }
        
        echo json_encode($messags);
                         die;  
    }
    
    public function checkemail(Request $request)
    {
        $messags = array();
        if($request->isMethod('post'))
        {
          $data = $request->all();
          $where= [['email','=',$data['email']],['status','!=','2']];
           $userdatas = User::getbycondition($where);
           if(count($userdatas) > 0)
           {
               $messags['message'] = "exists";
                $messags['erro']= 101;
           }else
           {
            $messags['message'] = "We can't find a user with that e-mail address.";
            $messags['erro']= 202;
           }
        }else
        {
            $messags['message'] = "Email is required";
            $messags['erro']= 202;
        }
            echo json_encode($messags);
            die;
        
    }
    
    public function forgetpass(Request $request)
  {
    if($request->isMethod('post'))
     {
	$messags = array();
      $data= $request->all();
		      
         $were= ['email'=> $data['email']];

            /* match email is exists or not */
           $user = User::getbycondition($were);
                      
          foreach($user as $u){
                    $r = $u;
                  }

                    if(count($user)!=0)
                    {
                        $id = $r->id; 
                        $name = $r->name;
                        $hash    = md5(uniqid(rand(), true));
                        $string  = $id."&".$hash;
                        $iv = base64_encode($string);
                        $htmls = Config::get('constants.Forgetpass_html');
                        $header = Config::get('constants.Forgetpass_header');
                        $buttonhtml = Config::get('constants.Forgetpass_btn_html');
                        $pass_url  = url('reset_passwords/'.$iv); 
                        $path = url('resources/views/email.html');
                        $email_path    = file_get_contents($path);
                          $email_content = array('[name]','[pass_url]','[htmls]','[buttonhtml]','[header]');
                          $replace  = array($name,$pass_url,$htmls,$buttonhtml,$header);
                         $message = str_replace($email_content,$replace,$email_path);
                          $subject = Config::get('constants.Forgetpass_subject');
                          $header = 'From: myhost.indiit.com' . "\r\n";
                          $header = "MIME-Version: 1.0\r\n";
                          $header = "Content-type: text/html\r\n";
                         $retval = mail($r->email,$subject,$message,$header); 

                          /* send email for the resetpassword */

                           if($retval)
                           {

                              /* update token in data base  */
                                   DB::table('users')
                                ->where(['email'=> $r->email])
                                ->update(
                                ['forget_pass' => $iv]
                                );
                                return \Redirect::back()->withSuccess( 'We have e-mailed your password reset link!' );
                                //$messags['message'] = "We have e-mailed your password reset link!";
                               // $messags['erro']= 101;
                           }else
                           {
                              DB::table('users')
                                ->where(['email'=> $r->email])
                                ->update(
                                ['forget_pass' => ' ']
                                );
                           }                          
                          
                    }else
                     {
                         return \Redirect::back()->with('error','Email does not exists');
                         
                        //$messags['message'] = "Email does not exists";
                        //$messags['erro']= 202;
				  }

     }else
     {
      return redirect('login');
     }
     
  }
  
  public function reset_passwords(Request $request,$ids='')
  {
   if(!empty($ids))
     {
           $were= ['forget_pass'=> $ids];

          /* get match the token match or not */
           $user = User::getbycondition($were);
          $data['id'] = $ids;
           if(count($user)>0)
           {
              return view('auth.passwords.resetpassword',$data);
          
           }else
           {
           
             return redirect()->intended(route('login'))->with('error','Erro: link has been expired');                              
           } 
                      
          
     }
  }


  /* post password to set a new password */
  public function resetpassword(Request $request)
   {

    $messags = array();
    $data = $request->all();
    if(!empty($data['id']) && !empty($data['password']))
     {
       
            $were= ['forget_pass'=> $data['id']];
           $user = User::getbycondition($were);
         
          
           if(count($user)>0)
           {     
             foreach($user as $u){
                    $r = $u;
                  }
                                          
                   $iv = base64_encode((rand()));
                   $update = ['forget_pass' => $iv,'password'=> $password = Hash::make( $data['password'] ) ];
                  if(User::updateUser($update,$r->id))
                  {
                   $messags['message'] = "Your password reset successfully";
	            $messags['erro']= 101;   
                  }else
                  {
                    $messags['message'] = "Erro: to reset password";
	            $messags['erro']= 202;
                    
                  }

           }else
           {
              $messags['message'] = "Erro: link has been expired";
              $messags['erro']= 202;
                                           
           } 
     }else
     {
          $messags['message'] = "Erro: link has been expired";
          $messags['erro']= 202;     
     }
    echo json_encode($messags);
    die;
     
   }
  
  
  public function profile(Request $request)
  {
      $messags = array();
    if($request->isMethod('post'))
    {
        $data = $request->all();
      if(session()->exists('user'))
      {
          if(!empty($data['newpassword']) && empty($data['conpassword']))
          {
                  $messags['message'] = "Confirm password is required";
                  $messags['erro']= 202; 
          }
          else if(!empty($data['conpassword']) && empty($data['newpassword']))
          {
                $messags['message'] = "New password is required";
                $messags['erro']= 202; 
          }
          else if(!empty($data['conpassword']) && !empty($data['newpassword']))
          {
            if($data['conpassword'] == $data['newpassword'])   
            {
                $data['password'] = Hash::make( $data['newpassword'] );
                unset($data['conpassword']);
                unset($data['newpassword']);
            }else
            {
              $messags['message'] = "Please enter confirm password same as new password";
                $messags['erro']= 202;   
            }
          }
              unset($data['_token']);
              $data['status']='1';
              $data = array_filter($data);
              $userid =Session()->get('userid');
              $were= [['email','=',$data["email"]],['id','!=',$userid],['status','!=','2']];
              $exists= User::getUsermatch($were);
              if(count($exists) > 0)
              {
                  $messags['message'] = "Error user is already exists with this email";
                  $messags['erro']= 202;   
              }else
              {
                    if(User::updateUser($data,$userid))
                    {
                     $messags['message'] = "Your profile has been updated sucessfully";
                     $messags['erro']= 101;    
                    }else
                    {
                     $messags['message'] = "Error to update your profile";
                     $messags['erro']= 202;   
                    } 
              }
              
             
          
         
          
      }else
      {
        $messags['message'] = "Error session has been expired";
        $messags['erro']= 202;   
      }
    }else
    {
        return redirect('/login');
    }
     echo json_encode($messags);
     die;
      
  }
  
  
   public function uploadfile(Request $request)
   {
   
	   if(session()->exists('user'))
	     {
	       $messags = array();
		       if($request->isMethod('post'))
		          {
		           $data = $request->all();
			     if($request->file('file'))
			       {
			            $image = $request->file('file');
			            $imagename = time().'.'.$image->getClientOriginalExtension();
			            $destinationPath = public_path('/profile');
			            $image->move($destinationPath, $imagename);
			             $path1 = $imagename;
			             $userid =Session()->get('userid');
                          if(User::updateUser(array('profile'=>$path1),$userid))
                          {
    			             $messags['path'] = $path1;
    			             $messags['message'] = "Porfile Images uploaded Successfully!!";
                            $messags['erro']= 101;
                          }else
                          {
                              $messags['message'] = "Error to upload the profile image";
                             $messags['erro']= 202;
                          }
			          
			       }else
			       {
			          $messags['message'] = "Error to upload the profile image";
                                 $messags['erro']= 202;
			       }
		         }else
		         {
		             $messags['message'] = "Error to upload the profile image";
                     $messags['erro']= 202;
		         }
		         echo json_encode($messags);
                         die;
       }
   }
     
   
    public function questionlist(Request $request)
    {
         if(session()->exists('user'))
        {
            $data['title']='Questions List';
            $data['page']='questionlist';
            $id=Session()->get('userid');
            $were = [['user_id','=',$id],['status', '!=','2' ]];
            $data['questions'] = Pre_questiondetails::getoption($were);
            $gettags = [['type', '=', '2'],['status', '=', '1']]; 
            $gettags2 = [['type', '=', '3'],['status', '=', '1']]; 
            $data['subject']=course::getbycondition($gettags);
            $data['chapter']=course::getbycondition($gettags2);
            $data['courses']= course::getoption();
        return view('user.questionlist',$data);
        }else
        {
            return redirect('/login');
        }
    }
    
    public function addquestions(Request $request)
    { 
        if(session()->exists('user'))
        {
        $messags = array();
        if($request->isMethod('post'))
          {
              
                $data= $request->all();
                unset($data['_token']);
                $data= array_filter($data);
                if(isset($data['country']))
                {
                    $datas['country']=$data['country'];
                    unset($data['country']);
                }
                if(isset($data['state']))
                {
                    $datas['state']=$data['state'];
                    unset($data['state']);
                }
                if(isset($data['course']))
                {
                    $datas['course']=$data['course'];
                    unset($data['course']);
                }
                if(isset($data['grade']))
                {
                    $datas['grade']=$data['grade'];
                    unset($data['grade']);
                }
                if(isset($data['year']))
                {
                    $datas['year']=$data['year'];
                    unset($data['year']);
                }
                if(isset($data['subject']))
                {
                    $datas['subject']=$data['subject'];
                    unset($data['subject']);
                }
                 if(isset($data['chapter']))
                {
                    $datas['chapter']=$data['chapter'];
                    unset($data['chapter']);
                }
                $datas['is_admin']='0';
                $datas['user_id']=Session()->get('userid');
                $wheress= array('coulmn_name'=>'aproval');
                $ap = Options::getoptionmatch2($wheress);
                $ap[0];
                if($ap[0]=='1')
                {
                   $status='0';
                }else
                {
                   $status='1'; 
                }
                $datas['status']='1'; 
                 $id = Pre_questiondetails::insertoption2($datas);
                if($id !='')
                { 
                    foreach($data['question'] as $key=>$ques)
                    {
                        $input = [
                        'question' => $data['question'][$key],
                        'optiona' => $data['optiona'][$key],
                        'optionb' => $data['optionb'][$key],
                        'optionc' => $data['optionc'][$key],
                        'optiond' => $data['optiond'][$key],
                        'answer' => $data['answer'][$key],
                        'question_id' => $id,
                         'qstatus'=>$status
                        ];
                 
                   $res=Hours::getdetailsuser(Session()->get('userid'));
                   if(!empty($res))
                   {
                       if($res->package_id == '1'){
                           if($res->current_question_count == '10')
                           {  
                               
                            $timestamp = strtotime($res->total_hours) + 60*60;
                            $time = date('H:i:s', $timestamp);

                               $update_question_count=array(
                                    'total_questions_uploaded'=>$res->total_questions_uploaded + '1',
                                    'current_question_count'=>'1',
                                    'total_hours'=>$time,
                                    );
                               
                           }else
                           {
                               $update_question_count=array(
                                    'total_questions_uploaded'=>$res->total_questions_uploaded + '1',
                                    'current_question_count'=>$res->current_question_count + '1',
                                    );
                               
                           }
                           
                       }else
                       {
                           $update_question_count=array(
                                    'total_questions_uploaded'=>$res->total_questions_uploaded + '1',
                                    );
                           
                       }
                       
                       
                       Hours::updateoption2($update_question_count,array('user_id'=>Session()->get('userid')));
                       
                   }
                   
                   
                     Question_answers::insertoption($input);
                }//foreach end
                      
                           
                           
                      /// $res=Hours::getdetailsuser(Session()->get('userid'));
                           
                           
                       //   $update_question_count=array(
                              
                           //   'total_questions_uploaded'=>
                              
                              
                              
                           ///   );
                    
                     if($ap[0]=='0')
                        {
                          $messags['message'] = "Question Added Successfully!!";
                          $messags['erro']= 101;
                        }else
                        {
                            $weres= [['id','!=','']];
                            $adminemail = Admin::getUsermatch($weres);
                            $were= [['id','=', Session()->get('userid')]];
                            $user = User::getbycondition($were);
                                foreach($user as $u){
                                 $r = $u;
                                }
                            if(count($user)!=0)
                            {
                            $id = $r->id; 
                            $name = 'Admin';
                            $hash    = md5(uniqid(rand(), true));
                            $string  = $id."&".$hash;
                             $iv = base64_encode($string);
                           // $htmls = 'To Approve the questions created by '.$r->name.', Please visit the following link given below:';
                           $htmls = str_replace('#name#',$r->name,Config::get('constants.Addquestions_html')).', Please visit the following link given below:';
                            $header = Config::get('constants.Addquestions_header');
                            $buttonhtml = Config::get('constants.Addquestions_btn_html');
                            $pass_url  = url('admin/questions'); 
                            $path = url('resources/views/email.html');
                            $subject = Config::get('constants.Addquestions_subject');
                            $to_email=$adminemail[0];
                              $this->createnotification($id,$name,$htmls,$header,$buttonhtml,$pass_url,$path,$subject,$to_email);
                              
                                $arrays =[
                                'w_from' => 'user',
                                'from_id' => $id,
                                'w_to' => 'admin',
                                'to_id' => '1',
                                'title' => str_replace('#name#',$r->name,Config::get('constants.Addquestions_html')),
                                'description' => str_replace('#name#',$r->name,Config::get('constants.Addquestions_html')),
                                'url' => 'admin/questions/',
                                'tbl'=>'pre_questiondetails',
                                'status'=>'1'
                                ];
                                Notification::insertoption($arrays);
                            }
                          $messags['message'] = "Question added and send to admin for approval!!";
                          $messags['erro']= 101;
                        }
                    
                   
                }else
                {
                  $messags['message'] = "Error to add a question";
                  $messags['erro']= 202; 
                }
               
          }else
          {
              $messags['message'] = "Error to add a question";
              $messags['erro']= 202;
          }
        }else
        {
            $messags['message'] = "Error your session has been expired";
             $messags['erro']= 202; 
             $messags['url']= url('/');
        }
        echo json_encode($messags);
                         die;
    }
    
    public function editquestion(Request $request,$id='')
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
        $user_id=Session()->get('userid');
        $were = [['id','=',$id],['status', '!=','2' ],['user_id','=',$user_id]];
        $data['questions'] = Pre_questiondetails::getoption($were);
        if(!empty($data['questions']) && count($data['questions']) > 0)
        {
         $questions = Pre_questiondetails::getoption($were);
        $gettagss = [['parent', '=', $questions[0]->country],['status', '=', '1']]; 
        $data['states']=country::getbycondition($gettagss);
        
        $gettagssub = [['parent', '=', $questions[0]->course],['type', '=', '2'],['status', '=', '1']]; 
        $data['subjects']=course::getbycondition($gettagssub);
        
        $gettagschap = [['parent', '=', $questions[0]->subject],['type', '=', '3'],['status', '=', '1']];
          $data['chapterss']=course::getbycondition($gettagschap);
        $data['answers']=Question_answers::getbycondition(array('question_id'=>$id));
        }
        $data['title']='Edit Questions';
        $data['page']='editquestion';
        if(!empty($data['user']) && $users->id !='' && isset($users->id))
        {
        return view('/user/editquestion',$data);
        }
        else if(session()->exists('user'))
        {
            return view('/user/editquestion',$data);
        }
        else
        {
            return redirect('/login');
        }
    }
    
    public function editquestions(Request $request)
    {
         
         if(session()->exists('user'))
        {
        $messags = array();
        if($request->isMethod('post'))
          {
                $data= $request->all();
                unset($data['_token']);
                $data= array_filter($data);
                if(isset($data['country']))
                {
                    $datas['country']=$data['country'];
                    unset($data['country']);
                }
                if(isset($data['state']))
                {
                    $datas['state']=$data['state'];
                    unset($data['state']);
                }else
                {
                    $datas['state']='0';
                }
                if(isset($data['course']))
                {
                    $datas['course']=$data['course'];
                    unset($data['course']);
                }
                if(isset($data['grade']))
                {
                    $datas['grade']=$data['grade'];
                    unset($data['grade']);
                }
                if(isset($data['year']))
                {
                    $datas['year']=$data['year'];
                    unset($data['year']);
                }
                if(isset($data['subject']))
                {
                    $datas['subject']=$data['subject'];
                    unset($data['subject']);
                }else
                {
                    $datas['subject']='0';
                }
                 if(isset($data['chapter']))
                {
                    $datas['chapter']=$data['chapter'];
                    unset($data['chapter']);
                }else
                {
                    $datas['chapter']='0';
                }
                $datas['is_admin']='0';
                $datas['user_id']=Session()->get('userid');
                $wheress= array('coulmn_name'=>'aproval');
                $ap = Options::getoptionmatch2($wheress);
                $ap[0];
                if($ap[0]=='1')
                {
                   $status='0';
                }else
                {
                   $status='1'; 
                }
               
                if(isset($data['pre_question_id']))
                {    
                     $id = $data['pre_question_id'];
                      unset($data['pre_question_id']);
                }
                 $datas['status']='1'; 
                 if(Pre_questiondetails::updateoption($datas,$id))
                 {
                    if($id !='')
                    { 
                        foreach($data['question'] as $key=>$ques)
                        {
                            $input = [
                            'question' => $data['question'][$key],
                            'optiona' => $data['optiona'][$key],
                            'optionb' => $data['optionb'][$key],
                            'optionc' => $data['optionc'][$key],
                            'optiond' => $data['optiond'][$key],
                            'answer' => $data['answer'][$key],
                            'question_id' => $id,
                            'qstatus'=>$status
                            ];
                              if(isset($data['question_answer_id'][$key]))
                              { 
                                   $getdata = Question_answers::getbycondition(array('question_id'=>$id));
                                  foreach($getdata as $getd)
                                  {
                                      if(!in_array($getd->id,$data['question_answer_id']))
                                      {
                                        Question_answers::where('id', '=', $getd->id)->delete();  
                                      }
                                      
                                  }
                                  Question_answers::updateoption($input,$data['question_answer_id'][$key]);
                              }else
                              {
                                 Question_answers::insertoption($input);
                              }
                             
                        }
                        
                        if($ap[0]=='0')
                        {
                          $messags['message'] = "Question Updated Successfully!!";
                          $messags['erro']= 101;
                        }else
                        {
                            $weres= [['id','!=','']];
                            $adminemail = Admin::getUsermatch($weres);
                            $were= [['id','=', Session()->get('userid')]];
                            $user = User::getbycondition($were);
                                foreach($user as $u){
                                 $r = $u;
                                }
                            if(count($user)!=0)
                            {
                            $id = $r->id; 
                            $name = 'Admin';
                            $hash    = md5(uniqid(rand(), true));
                            $string  = $id."&".$hash;
                             $iv = base64_encode($string);
                            //$htmls = 'To Approve the questions updated by '.$r->name.', Please visit the following link given below:';
                            $htmls = str_replace("#name#",$r->name,Config::get('constants.Editquestions_html')).', Please visit the following link given below:';
                            $header = Config::get('constants.Editquestions_header');
                            $buttonhtml = Config::get('constants.Editquestions_btn_html');
                            $pass_url  = url('admin/questions/'); 
                            $path = url('resources/views/email.html');
                            $subject = Config::get('constants.Editquestions_subject');
                            $to_email=$adminemail[0];
                              $this->createnotification($id,$name,$htmls,$header,$buttonhtml,$pass_url,$path,$subject,$to_email);
                              
                                $arrays =[
                                'w_from' => 'user',
                                'from_id' => $id,
                                'w_to' => 'admin',
                                'to_id' => '1',
                                'title' => str_replace("#name#",$r->name,Config::get('constants.Editquestions_notification_description')),
                                'description' => str_replace("#name#",$r->name,Config::get('constants.Editquestions_notification_description')),
                                'url' => 'admin/questions/',
                                'tbl'=>'pre_questiondetails',
                                'status'=>'1'
                                ];
                                Notification::insertoption($arrays);
                            }
                          $messags['message'] = "Question Updated and send to admin for approval!!";
                          $messags['erro']= 101;
                        }
                       
                       
                       
                    }else
                    {
                      $messags['message'] = "Error to Update a questions";
                      $messags['erro']= 202; 
                    }
                }else
                {
                    $messags['message'] = "Error to Edit a questions";
                    $messags['erro']= 202; 
                }
               
          }else
          {
              $messags['message'] = "Error to edit a questions";
              $messags['erro']= 202;
          }
        }else
        {
            $messags['message'] = "Error your session has been expired";
             $messags['erro']= 202; 
             $messags['url']= url('/');
        }
        echo json_encode($messags);
                         die;
    }
    
     
    public function viewquestion($id='')
    {
        if(session()->exists('user'))
        {
        $user_id=Session()->get('userid');
        $were = array('status'=>'1');
        $data['grades']= Grades::getbycondition($were);
        $data['years']= Years::getbycondition($were);
        $data['courses']= course::getoption();
        $this->middleware('auth');
        $data['user'] = Auth::user();
        $data['countries']= country::getoption();
        $users = Auth::user();
        $prewere = [['id','=',$id],['status', '!=','2' ],['user_id','=',$user_id]];
        $data['questions'] = Pre_questiondetails::getoption($prewere);
        if(!empty($data['questions']) && count($data['questions']) > 0)
        {
        $questions = Pre_questiondetails::getoption($prewere);
        $gettagss = [['parent', '=', $questions[0]->country],['status', '=', '1']]; 
        $data['states']=country::getbycondition($gettagss);
        $gettagssub = [['parent', '=', $questions[0]->course],['type', '=', '2'],['status', '=', '1']]; 
        $data['subjects']=course::getbycondition($gettagssub);
        $gettagschap = [['parent', '=', $questions[0]->subject],['type', '=', '3'],['status', '=', '1']];
        $data['chapterss']=course::getbycondition($gettagschap);
        $data['answers']=Question_answers::getbycondition(array('question_id'=>$id));
        } 
            $data['title']= 'Questions View';
        $data['page']='viewquestion';
        
        //echo $id;
             return view('/user/viewquestions',$data);
        }else
        {
            return redirect('/login');
        }
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
    
     public function delete($id1,$id2)
    {
        if(session()->exists('user'))
        {
          $data = [
               'status' => '2',
                
            ];
         $this->updateData($id1,array('id'=>$id2), $data);   
          echo 1; die;
        }else
        {
           return false; 
        }
    }
  public function update_plan()
  {
     if(session()->exists('user'))
        {
        $user_id=Session()->get('userid');
        $start_date =date('Y-m-d');  
        $date = strtotime($start_date);
        $lastpakcgae = Hours::getbycondition([['user_id','=',$user_id],['package_id','!=','1']]);
        $lastpakcgae2 = Hours::getbycondition([['user_id','=',$user_id],['package_id','=','1']]);
        if($_POST['package'] == '1'){
        $date1 = date('Y-m-d',strtotime("+7 day", $date)); 
        $update_question_count=array(
                                    'total_hours'=>'02:00:00',
                                    'package_id'=>$_POST['package'],
                                    'expiry'=>$date1,
                                    'current_question_count'=>'0',
                                    );
        Hours::updateoption2($update_question_count,array('user_id'=>Session()->get('userid')));
        
         $transaction_data=array(
                                'transaction_id'=>'0',
                                'user_id'=>$user_id,
                                'package_id'=>$_POST['package'],
                                'status'=>'completed',
                                'currency'=>"",
                                'amount'=>'0',
                                'walletuse'=>$_POST['walletuse'],
                                'exp'=>$date1
                                );
        Transaction::insertUser($transaction_data);
        }else if($_POST['package'] == '3')
        {       
           if(count($lastpakcgae) > 0 )
           {  
               //$start_date =date('Y-m-d',strtotime($lastpakcgae[0]->expiry));  
                    $date = strtotime($lastpakcgae[0]->expiry);
                    $date = date('Y-m-d',strtotime("+1 year", $date));  
                     $hours_data=array(
                    'package_id'=>$_POST['package'],
                    'total_hours'=>'00:00:00',
                    'expiry'=>$date,
                    'current_question_count'=>0,
                     );
              Hours::updateoption2($hours_data,array('user_id'=>Session()->get('userid')));
               $transaction_data=array(
                                    'transaction_id'=>$_POST['transaction_id'],
                                    'user_id'=>$user_id,
                                    'package_id'=>$_POST['package'],
                                    'status'=>$_POST['status'],
                                    'currency'=>$_POST['currency'],
                                    'amount'=>$_POST['amount'],
                                    'walletuse'=>$_POST['walletuse'],
                                    'exp'=>$date
                                    );
               Transaction::insertUser($transaction_data);
           }else
           {
               
               if(count($lastpakcgae2) > 0)
               {
                   $start_date =date('Y-m-d');  
                   $start_date = date('Y-m-d',strtotime("+7 day",$start_date));  
                    $date = strtotime($start_date);
                    $date = date('Y-m-d',strtotime("+1 year", $date));  
                     $hours_data=array(
                    'package_id'=>$_POST['package'],
                    'total_hours'=>'00:00:00',
                    'expiry'=>$date,
                    'current_question_count'=>0,
                     );
              Hours::updateoption2($hours_data,array('user_id'=>Session()->get('userid')));
               $transaction_data=array(
                                    'transaction_id'=>$_POST['transaction_id'],
                                    'user_id'=>$user_id,
                                    'package_id'=>$_POST['package'],
                                    'status'=>$_POST['status'],
                                    'currency'=>$_POST['currency'],
                                    'amount'=>$_POST['amount'],
                                    'walletuse'=>$_POST['walletuse'],
                                    'exp'=>$date
                                    );
               Transaction::insertUser($transaction_data);
                   
               }else
               {
                    $start_date = strtotime(date('Y-m-d'));  
                    $date = strtotime($start_date);
                    $date = date('Y-m-d',strtotime("+1 year", $date));  
                     $hours_data=array(
                    'package_id'=>$_POST['package'],
                    'total_hours'=>'00:00:00',
                    'expiry'=>$date,
                    'current_question_count'=>0,
                     );
              Hours::updateoption2($hours_data,array('user_id'=>Session()->get('userid')));
               $transaction_data=array(
                                    'transaction_id'=>$_POST['transaction_id'],
                                    'user_id'=>$user_id,
                                    'package_id'=>$_POST['package'],
                                    'status'=>$_POST['status'],
                                    'currency'=>$_POST['currency'],
                                    'amount'=>$_POST['amount'],
                                    'walletuse'=>$_POST['walletuse'],
                                    'exp'=>$date
                                    );
               Transaction::insertUser($transaction_data);
               }
           }
        }
        else
        {
            
                 
           if(count($lastpakcgae) > 0 )
           {      $date = strtotime($lastpakcgae[0]->expiry);
               //$start_dates =date('Y-m-d',strtotime($lastpakcgae[0]->expiry));  
               $date1 = date('Y-m-d',strtotime("+1 month", $date)); 
                $update_question_count=array(
                                            'total_hours'=>'00:00:00',
                                            'package_id'=>$_POST['package'],
                                            'expiry'=>$date1,
                                            'current_question_count'=>'0',
                                            );
                Hours::updateoption2($update_question_count,array('user_id'=>Session()->get('userid')));
                
                 $transaction_data=array(
                                        'transaction_id'=>$_POST['transaction_id'],
                                        'user_id'=>$user_id,
                                        'package_id'=>$_POST['package'],
                                        'status'=>$_POST['status'],
                                        'currency'=>$_POST['currency'],
                                        'amount'=>$_POST['amount'],
                                        'walletuse'=>$_POST['walletuse'],
                                        'exp'=>$date1
                                        );
                Transaction::insertUser($transaction_data);
           }else
           {
               
               if(count($lastpakcgae2) > 0)
               {
                   $start_date =strtotime(date('Y-m-d'));
                   $start_date = date('Y-m-d',strtotime("+7 day",$start_date));  
                    $date = strtotime($start_date);
                    //$date = date('Y-m-d',strtotime("+1 year", $date));
                    //$date = strtotime($lastpakcgae[0]->expiry);
               //$start_dates =date('Y-m-d',strtotime($lastpakcgae[0]->expiry));  
               $date1 = date('Y-m-d',strtotime("+1 month", $date)); 
                $update_question_count=array(
                                            'total_hours'=>'00:00:00',
                                            'package_id'=>$_POST['package'],
                                            'expiry'=>$date1,
                                            'current_question_count'=>'0',
                                            );
                Hours::updateoption2($update_question_count,array('user_id'=>Session()->get('userid')));
                
                 $transaction_data=array(
                                        'transaction_id'=>$_POST['transaction_id'],
                                        'user_id'=>$user_id,
                                        'package_id'=>$_POST['package'],
                                        'status'=>$_POST['status'],
                                        'currency'=>$_POST['currency'],
                                        'amount'=>$_POST['amount'],
                                        'walletuse'=>$_POST['walletuse'],
                                        'exp'=>$date1
                                        );
                Transaction::insertUser($transaction_data);
               }else
               {
                $date1 = date('Y-m-d',strtotime("+1 month", $date)); 
                $update_question_count=array(
                                            'total_hours'=>'00:00:00',
                                            'package_id'=>$_POST['package'],
                                            'expiry'=>$date1,
                                            'current_question_count'=>'0',
                                            );
                Hours::updateoption2($update_question_count,array('user_id'=>Session()->get('userid')));
                
                 $transaction_data=array(
                                        'transaction_id'=>$_POST['transaction_id'],
                                        'user_id'=>$user_id,
                                        'package_id'=>$_POST['package'],
                                        'status'=>$_POST['status'],
                                        'currency'=>$_POST['currency'],
                                        'amount'=>$_POST['amount'],
                                        'walletuse'=>$_POST['walletuse'],
                                        'exp'=>$date1
                                        );
                Transaction::insertUser($transaction_data);
               }
           }
        }
        echo '200';
        }
        else{
        } 
  }
  public function update_hours()
  {
     if(session()->exists('user'))
        {
        $user_id=Session()->get('userid');
        $update_question_count=array(
                                    'total_hours'=>$_POST['newtime'],
                                    );
        Hours::updateoption2($update_question_count,array('user_id'=>Session()->get('userid')));
        echo '200';
        }
        else{
            
        }
      
  }
    public function hours_left()
    {
        if(session()->exists('user'))
        {
             $user_id=Session()->get('userid');
             $hours=Hours::getdetailsuser($user_id);
             if($hours->package_id == '1')
             {
                 echo $hours->total_hours;
             
        }
        else{
           echo 'paid';
           die;
           
        }
        }
        
    }
    public function getquestions(Request $request)
    { 
        if(session()->exists('user'))
        { 
            $data = $request->all();
            $were = array('status'=>'1');
                if(isset($data['country']) && $data['country']!='')
                {
                   $were1= array('country'=>$data['country']);
                  $were = array_merge($were,$were1);
                }
                
                if(isset($data['state']) && $data['state']!='')
                {
                    $were2= array('state'=>$data['state']);
                    $were = array_merge($were,$were2);
                }
                
                if(isset($data['course']) && $data['course']!='')
                {
                    $were3= array('course'=>$data['course']);
                    $were = array_merge($were,$were3);
                }
                
                if(isset($data['grade']) && $data['grade']!='')
                {
                  $were4= array('grade'=>$data['grade']);
                  $were = array_merge($were,$were4);
                }
                
                if(isset($data['year']) && $data['year']!='')
                {
                    $were5= array('year'=>$data['year']);
                    $were = array_merge($were,$were5);
                }
                
                
                if(isset($data['subject']) && $data['subject']!='')
                {
                     $were6= array('subject'=>$data['subject']);
                     $were = array_merge($were,$were6);
                }
                
                if(isset($data['chapter']) && $data['chapter']!='')
                {
                     $were7= array('chapter'=>$data['chapter']);
                     $were = array_merge($were,$were7);
                }
                
                ///$result = Pre_questiondetails::search($were);
               
                 $ids='';
                 $result2 = array();
               /* if(count($result) > 1)
                { */
                 // $result[]= Pre_questiondetails::search($were)->first(); 
                $result2 = DB::table('pre_questiondetails');
                $result2 = $result2->join('question_answers', 'question_answers.question_id', '=', 'pre_questiondetails.id');
                 if(isset($data['country']) && $data['country']!='')
                {
                $result2 = $result2->where('pre_questiondetails.country', $data['country']);
                }
                if(isset($data['state']) && $data['state']!='')
                {
                $result2 = $result2->where('pre_questiondetails.state', $data['state']);
                }
                if(isset($data['course']) && $data['course']!='')
                {
                $result2 = $result2->where('pre_questiondetails.course', $data['course']);
                }
                if(isset($data['grade']) && $data['grade']!='')
                {
                $result2 = $result2->where('pre_questiondetails.grade', $data['grade']);
                }
                if(isset($data['year']) && $data['year']!='')
                {
                $result2 = $result2->where('pre_questiondetails.year', $data['year']);
                }
                if(isset($data['subject']) && $data['subject']!='')
                {
                $result2 = $result2->where('pre_questiondetails.subject', $data['subject']);
                }
                if(isset($data['chapter']) && $data['chapter']!='')
                {
                $result2 = $result2->where('pre_questiondetails.chapter', $data['chapter']);
                }
                $result2 = $result2->where('pre_questiondetails.status','=','1');
                $result2 = $result2->where('question_answers.qstatus','=','1');
                $result2 = $result2->select('question_answers.*');
                $result2 = $result2->orderBy(DB::raw('RAND()'))->distinct('question_answers.question_id')->limit(10)->get();
               
                //$ids = $result2->id;
                /*}*/
                
                if((count($result2) > 0 && !empty($result2)))
                {   
                  if($ids=='')
                  {
                    $ids = $result2[0]->id;   
                  }
                  $answers = $result2;
                   
                    //$answers = Question_answers::getbycondition(array('question_id'=>$ids,'qstatus'=>'1'));
                    if(count($answers) > 0)
                    {
                    $totals = array();
                     foreach($answers as $resultk)
                     {
                         $totals[] = $resultk->question;
                     }
                      $input = [
                        'user_id'=>Session()->get('userid'),
                        'test_id'=>'0',
                        'total_questions' => count($totals),
                        'attempt_answer' => '0',
                        'correct_answers' => '0'
                        ];
                       $pre_que_id =  User_test::insertoption2($input);
                    }else
                    {
                     $answers=array(); 
                     $pre_que_id='';
                         if ($request->ajax()) {
                          return response()->json(['html'=>'']);
                        } 
                      die;
                    }
                    if ($request->ajax()) {
                    $view = view('user.attempt_questions', compact('answers','pre_que_id'))->render();
                    return response()->json(['html'=>$view]);
                    } 
                }else
                { 
                   if ($request->ajax()) {
                      return response()->json(['html'=>'']);
                    }  
                    die('---');
                }
           
        }else
        { echo '22222'; die; 
           return false; 
        }
    }
    
    public function addsugestion(Request $request)
    {
        if(session()->exists('user'))
        {
            $data = $request->all();
            if(isset($data['_token']))
            {
               unset($data['_token']);  
            }
            if(isset($data['suggested_answer']))
            {
               $thisid = $data['id'];
               unset($data['id']);
               if(User_test_answers::updateoption($data,$thisid))
               {
                 $messags['message'] = "Thanks for submitt your seggestion";
                 $messags['erro']= 101;   
               }else
               {
                   $messags['message'] = "Error to add you suggestion";
                   $messags['erro']= 202; 
               }
            }else
            {
                $getanswer = Question_answers::getbycondition(array('id'=>$data['question_id']));
                if(count($getanswer) > 0 )
                {
                   if($getanswer[0]->answer == $data['answer']) 
                   {
                      $ans ='1'; 
                   }else
                   {
                      $ans ='0'; 
                   }
                }else
                {
                    $ans ='0';
                }
                $wersid= $data['test_id'];
                $prequestions = User_test::getbycondition(array('id'=>$wersid));
                $u = '';
                foreach($prequestions as $prequestion)
                {
                    $u =$prequestion;
                   
                }
                    $core = $u->correct_answers+$ans;
                     $atemp = $u->attempt_answer+1;
                     $inputs =[
                        'correct_answers'=>$core,
                        'attempt_answer'=>$atemp
                        ]; 
             
                   User_test::updateoption($inputs,$wersid);
                 $data['user_id']=Session()->get('userid');
                $answer_id =  User_test_answers::insertoption2($data);
                if($answer_id!='')
                {
                    $messags['message'] = "Your Answer Submitted Successfully!!";
                    $messags['erro']= 101; 
                    $messags['id']= $answer_id; 
                    
                }else
                {
                    $messags['message'] = "Error to submitt your answer";
                    $messags['erro']= 202; 
                }  
            }
           
        }else
        {
            $messags['message'] = "Error your session has been expired";
             $messags['erro']= 202; 
        }
        
         echo json_encode($messags);
                         die;
        
    }
    
    public function attempttest(Request $request)
    {
       if(session()->exists('user'))
        {
        $data = $request->all();
        $data['pre_que_id'];
        $scores = User_test::getbycondition(array('id'=>$data['pre_que_id']));
        $realanswers =  Question_answers::gettotalresult($data['pre_que_id']);
            if ($request->ajax()) {
            $view = view('user.result_summary', compact('realanswers','scores'))->render();
            return response()->json(['html'=>$view]);
            } 
         
        }else
        {
            if ($request->ajax()) {
              return response()->json(['html'=>'session']);
            }  
        }
    }
    
    public function report(Request $request)
    {
        if(session()->exists('user'))
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
            $data['user_id']=Session()->get('userid');
            $data['title']= 'Reports';
            $data['page']='report';
            $data['results']=User_test::getbyconditionpagination(array('user_id'=>$data['user_id']));
        
                
                if ($request->ajax()) {
                return view('user.search_report',$data);
                }
           return view('/user/report',$data);
        }else
        {
            return redirect('/login');  
        }
    }
    
    public function getsearch(Request $request)
    {
        if(session()->exists('user'))
        {
            $data = $request->all();
           $were = array();
             //$were= array('status'=>'1');
                if(isset($data['country']) && $data['country']!='')
                {
                   $were1= array('country'=>$data['country']);
                  $were = array_merge($were,$were1);
                }
                
                if(isset($data['state']) && $data['state']!='')
                {
                    $were2= array('state'=>$data['state']);
                    $were = array_merge($were,$were2);
                }
                
                if(isset($data['course']) && $data['course']!='')
                {
                    $were3= array('course'=>$data['course']);
                    $were = array_merge($were,$were3);
                }
                
                if(isset($data['grade']) && $data['grade']!='')
                {
                  $were4= array('grade'=>$data['grade']);
                  $were = array_merge($were,$were4);
                }
                
                if(isset($data['year']) && $data['year']!='')
                {
                    $were5= array('year'=>$data['year']);
                    $were = array_merge($were,$were5);
                }
                
                
                if(isset($data['subject']) && $data['subject']!='')
                {
                     $were6= array('subject'=>$data['subject']);
                     $were = array_merge($were,$were6);
                }
                
                if(isset($data['chapter']) && $data['chapter']!='')
                {
                     $were7= array('chapter'=>$data['chapter']);
                     $were = array_merge($were,$were7);
                }
                if(count($were) > 0)
                {   $data['user_id']=Session()->get('userid');
                
                
                $result2 = DB::table('user_test_answers');
                $result2 = $result2->join('question_answers', 'question_answers.id', '=', 'user_test_answers.question_id');
                $result2 = $result2->join('pre_questiondetails', 'pre_questiondetails.id', '=', 'question_answers.question_id');
                $result2 = $result2->join('user_test', 'user_test.id', '=', 'user_test_answers.test_id');
                if(isset($data['country']) && $data['country']!='')
                {
                $result2 = $result2->where('pre_questiondetails.country', $data['country']);
                }
                if(isset($data['state']) && $data['state']!='')
                {
                $result2 = $result2->where('pre_questiondetails.state', $data['state']);
                }
                if(isset($data['course']) && $data['course']!='')
                {
                $result2 = $result2->where('pre_questiondetails.course', $data['course']);
                }
                if(isset($data['grade']) && $data['grade']!='')
                {
                $result2 = $result2->where('pre_questiondetails.grade', $data['grade']);
                }
                if(isset($data['year']) && $data['year']!='')
                {
                $result2 = $result2->where('pre_questiondetails.year', $data['year']);
                }
                if(isset($data['subject']) && $data['subject']!='')
                {
                $result2 = $result2->where('pre_questiondetails.subject', $data['subject']);
                }
                if(isset($data['chapter']) && $data['chapter']!='')
                {
                $result2 = $result2->where('pre_questiondetails.chapter', $data['chapter']);
                }
                $result2 = $result2->where('user_test_answers.user_id',$data['user_id']);
                //$result2 = $result2->where('user_test_answers.test_id',$id1);
                $results = $result2->distinct()->select('user_test.*');
                $results = $result2->get();
            
                  /*  $result2 = User_test_answers::join('question_answers', 'question_answers.id', '=', 'user_test_answers.question_id');
                    $result2 = $result2->join('user_test', 'user_test.id', '=', 'user_test_answers.test_id');
                    $result2 = $result2->join('pre_questiondetails', 'pre_questiondetails.id', '=', 'question_answers.question_id');
                if(isset($data['country']) && $data['country']!='')
                {
                $result2 = $result2->where('pre_questiondetails.country', $data['country']);
                }
                if(isset($data['state']) && $data['state']!='')
                {
                $result2 = $result2->where('pre_questiondetails.state', $data['state']);
                }
                if(isset($data['course']) && $data['course']!='')
                {
                $result2 = $result2->where('pre_questiondetails.course', $data['course']);
                }
                if(isset($data['grade']) && $data['grade']!='')
                {
                $result2 = $result2->where('pre_questiondetails.grade', $data['grade']);
                }
                if(isset($data['year']) && $data['year']!='')
                {
                $result2 = $result2->where('pre_questiondetails.year', $data['year']);
                }
                if(isset($data['subject']) && $data['subject']!='')
                {
                $result2 = $result2->where('pre_questiondetails.subject', $data['subject']);
                }
                if(isset($data['chapter']) && $data['chapter']!='')
                {
                $result2 = $result2->where('pre_questiondetails.chapter', $data['chapter']);
                }
                $result2 = $result2->where('user_test_answers.user_id','=',$data['user_id']);
                $result2 = $result2->select('user_test.*');
                $result2 = $result2->get();*/
               
               // echo '<pre>'; print_r($result2); die; 
              /*  $result2 = DB::table('pre_questiondetails');
                $result2 = $result2->join('question_answers', 'question_answers.question_id', '=', 'pre_questiondetails.id');
                $result2 = $result2->join('user_test_answers', 'user_test_answers.question_id', '=', 'question_answers.id');
                $result2 = $result2->join('user_test', 'user_test.id', '=', 'user_test_answers.test_id');
                 if(isset($data['country']) && $data['country']!='')
                {
                $result2 = $result2->where('pre_questiondetails.country', $data['country']);
                }
                if(isset($data['state']) && $data['state']!='')
                {
                $result2 = $result2->where('pre_questiondetails.state', $data['state']);
                }
                if(isset($data['course']) && $data['course']!='')
                {
                $result2 = $result2->where('pre_questiondetails.course', $data['course']);
                }
                if(isset($data['grade']) && $data['grade']!='')
                {
                $result2 = $result2->where('pre_questiondetails.grade', $data['grade']);
                }
                if(isset($data['year']) && $data['year']!='')
                {
                $result2 = $result2->where('pre_questiondetails.year', $data['year']);
                }
                if(isset($data['subject']) && $data['subject']!='')
                {
                $result2 = $result2->where('pre_questiondetails.subject', $data['subject']);
                }
                if(isset($data['chapter']) && $data['chapter']!='')
                {
                $result2 = $result2->where('pre_questiondetails.chapter', $data['chapter']);
                }
               // $result2 = $result2->where('pre_questiondetails.status','=','1');
                $result2 = $result2->where('user_test.user_id','=',$data['user_id']);
                $result2 = $result2->select('user_test.*');
                $results = $result2->distinct()->get();*/
               /* echo '<pre>'; print_r($results); die; */
                    // $result = Pre_questiondetails::search($were);
                     
                        if(count($results) > 0 && $results[0]->id!='')
                        {
                           
                        }else
                        {
                           $results=array();
                        }
                }else
                {  
                    $were = array('status'=>'1');
                    $data['grades']= Grades::getbycondition($were);
                    $data['years']= Years::getbycondition($were);
                    $data['courses']= course::getoption();
                    $data['countries']= country::getoption();
                    $data['user_id']=Session()->get('userid');
                    
                    $results=User_test::getbyconditionpagination(array('user_id'=>$data['user_id']));
                }
                
                if(count($results) > 0)
                {  
                   
                    if ($request->ajax()) {
                    $view = view('user.search_report', compact('results'))->render();
                    return response()->json(['html'=>$view]);
                    } 
                }else
                {
                   if ($request->ajax()) {
                     $view = view('user.search_report', compact('results'))->render();
                      return response()->json(['html'=>$view]);
                    }  
                }
           
        }else
        {
           return false; 
        }
    }
    
    public function test_detail(Request $request,$id='')
    {
      if(session()->exists('user'))
        {
            $data = $request->all();
            $data['title'] = 'Test Detail';
           // $data['scores'] = User_test::getbycondition(array('id'=>$data['pre_que_id']));
            $data['realanswers'] =  Question_answers::gettotalresultwithpagination2($id);
                if ($request->ajax()) {
                return view('user.test_detail_presult',$data);
                }
                 $data['title']= 'Detail';
            $data['page']='test_detail';
            return view('user.test_detail',$data);
        }
        else
        {
            return redirect('/login');
        }
    }
    
     public function referral(Request $request)
    {
      if(session()->exists('user'))
        {
            $data['title']= 'Referral';
            $data['page']='referral';
             $userid =Session()->get('userid');
            $were = array('uid'=>$userid);
            $data['reffered'] = Reffer::getbycondition($were);
            return view('user.referral',$data);
        }
        else
        {
            return redirect('/login');
        }
    }
    
    public function wallet(Request $request)
    {
      if(session()->exists('user'))
        {
            $data['title']= 'Wallet';
            $data['page']='wallet';
            $userid =Session()->get('userid');
            $were = array('uid'=>$userid);
            $data['applyrequests'] = Withdraw::getbycondition($were);
            $were = array('uid'=>$userid,'status'=>'2');
            $data['applyrequests2'] = Withdraw::getbycondition($were);
            $were2 = array('uid'=>$userid,'status'=>'1');
            $data['reffered'] = Reffer::getbycondition($were2);
            $data['transactions'] =  Transaction::getbycondition(array('user_id'=>$userid));
            $data['walletamount']=0;
            $data['reffer_amount'] =0;
            foreach($data['reffered'] as $reffer)
            {
                if(!empty($reffer->amount))
                {
                    $data['walletamount'] += $reffer->amount;
                    $data['reffer_amount'] += $reffer->amount;
                }
            }
            
             foreach($data['transactions'] as $reffers)
            {
                if(!empty($reffers->walletuse))
                {
                 $data['walletamount'] -= $reffers->walletuse;
                }
            }
            
            $data['withdrwaamount']=0;
            foreach($data['applyrequests2'] as $reffers)
            {
                if(!empty($reffers->amount))
                {
                    $data['walletamount'] -= $reffers->amount;
                    $data['withdrwaamount'] +=$reffers->amount;
                }
            }
           
            return view('user.wallet',$data);
        }
        else
        {
            return redirect('/login');
        }
    }
    
    public function applyamount(Request $request)
    {
         $messags= array();
         if(session()->exists('user'))
        {
            if($request->isMethod('post'))
            {
              $data = $request->all();
              if(isset($data['_token']))
              {
                  unset($data['_token']);
              }
               $userid =Session()->get('userid');
               $data['uid'] = $userid;
                $weress= [['id','!=','']];
                $adminemail = Admin::getUsermatch($weress);
               $were= [['id','=', Session()->get('userid')]];
                            $user = User::getbycondition($were);
                                foreach($user as $u){
                                 $r = $u;
                                }
                            if(count($user)!=0)
                            {
                                Withdraw::insertoption($data);
                                $idd= Withdraw::getdetailsuserret();
                                
                                
                    $variavle = Config::get('constants.Applyamount_html');
                    $variavles = explode(' ',$variavle);
                    foreach($variavles as $key=> $variavle)
                    {
                        if($variavle=='#name#')
                        {
                         $variavles[$key]=ucfirst($r->name);
                        }
                        if($variavle=='#amount#')
                        {
                         $variavles[$key]=$data['amount'];
                        }
                        
                    }
                
                                $id = $r->id; 
                                $name = 'Admin';
                                $hash    = md5(uniqid(rand(), true));
                                $string  = $id."&".$hash;
                                 $iv = base64_encode($string);
                                 $htmls = implode(' ',$variavles).' , Please visit the following link given below:';
                               // $htmls = ucfirst($r->name).' created request to withdraw amount of $'.$data['amount'].', Please visit the following link given below:';
                                $header = Config::get('constants.Applyamount_header');
                                $buttonhtml = Config::get('constants.Applyamount_btn_html');
                                $pass_url  = url('admin/request_detail/'.$idd); 
                                $path = url('resources/views/email.html');
                                $subject = Config::get('constants.Applyamount_subject');
                                $to_email=$adminemail[0];
                                $this->createnotification($id,$name,$htmls,$header,$buttonhtml,$pass_url,$path,$subject,$to_email);
                                 $arrays =[
                                'w_from' => 'user',
                                'from_id' => $r->id,
                                'w_to' => 'admin',
                                'to_id' => '1',
                                'title' => Config::get('constants.Applyamount_notification_title'),
                                'description' => implode(' ',$variavles),
                                'url' => 'admin/request_detail/'.$idd,
                                'tbl'=>'withdraw',
                                'status'=>'1'
                                ];
                                Notification::insertoption($arrays);
                            }
                           
                        $messags['message'] = "Your Request Send Successfully!! ";
                        $messags['erro']= 101; 
            }else
            {
                $messags['message'] = "Amount is required";
                $messags['erro']= 202;  
            }
        }else
        {
            $messags['message'] = "Error your session has been expired";
            $messags['erro']= 202; 
        }
        
         echo json_encode($messags);
                         die;
        
    }
    
     public function notification(Request $request)
    {
       if(session()->exists('user'))
      {
           $userid =Session()->get('userid');
          $were = [['w_to','=','user'],['status','!=','2'],['to_id','=',$userid]];
        $data['notifications'] = Notification::getbycondition2($were);
       // echo '<pre>'; print_r($data['notifications']); die; 
        $data['title']='Notifications-Multiple Choice Online';
        $data['page']='notification';
         if ($request->ajax()) {
          return view('user.notification2',$data);
        }
        return view('/user/notification',$data);
      }
      else
      {
           return redirect('/login');
      } 
    }
    
     public function deletenotifications(Request $request)
    {
         $messags = array();
       if(session()->exists('user'))
      {
            if($request->isMethod('post'))
            {
                $data = $request->all(); 
             
                foreach($data['favorite'] as $d)
                {
                  Notification::updateoption(array('status'=>'2'),$d);
                }
                $messags['message'] = "Notification Deleted Successfully!!";
                 $messags['erro']= 101;
            }else
            {
              $messags['message'] = "Error no notification selected";
              $messags['erro']= 202;
            }
      }
      else
      {
            $messags['message'] = "Error invalid request";
            $messags['erro']= 202;   
      } 
        echo json_encode($messags);
            die;
    }
    
}
