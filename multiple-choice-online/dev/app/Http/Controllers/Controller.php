<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Notification;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
  
     public function selectData($table, $where='', $pagination='',$orderby='',$take='')
    {
        $results = DB::table($table);

        if($where){
            $results = $results->where($where);
        }
		 if($orderby){
            $results = $results->orderby($orderby,'desc');
        }
        
        if($pagination){
            $results = $results->paginate($pagination);
        }
        else{
            $results = $results->get();
        }

        return $results;
    }
     public function insertData($table, $data)
    {
    $insert_id =  DB::table($table)
            ->insertGetId($data);
   return  $insert_id;
         
    }

    public function deleteData($table, $where)
    {
        DB::table($table)
            ->where($where)
            ->delete();
    }
 public function updateData($table, $where, $data)
    {
		DB::table($table)
            ->where($where)
            ->update($data);
    }
     public function updateData3($table, $id, $column, $value)
    {
        	DB::table($table)
            ->where('id', '=', $id)
            ->update(array($column=>$value));
             return 1;
    }
    public function updateData2($table, $id, $column, $value,$uid)
    {
		DB::table($table)
            ->where('id', '=', $id)
            ->update(array($column=>$value));
            if($uid!='0')
            {
                            $were= [['id','=', $uid]];
                            $user = User::getbycondition($were);
                            foreach($user as $u){
                            $r = $u;
                            }
                            if(count($user)!=0)
                            {
                                if($value=='1')
                                {
                                     $action = 'approved';
                                }else
                                {
                                     $action = 'rejected';
                                }
                                $id = $r->id; 
                                $name = $r->name;
                                $hash    = md5(uniqid(rand(), true));
                                $string  = $id."&".$hash;
                                 $iv = base64_encode($string);
                                $htmls = 'Admin '.$action.' your question, Please visit the following link given below:';
                                $header = 'Amount Withdraw Request';
                                $buttonhtml = 'Click here to visit';
                                $pass_url  = url('user/questionlist/'); 
                                $path = url('resources/views/email.html');
                                $subject = "Amount Withdraw Request";
                                $to_email=$r->email;
                                $email_path    = file_get_contents($path);
                                $email_content = array('[name]','[pass_url]','[htmls]','[buttonhtml]','[header]');
                                $replace  = array($name,$pass_url,$htmls,$buttonhtml,$header);
                                $message = str_replace($email_content,$replace,$email_path);
                                $header = 'From: myhost.indiit.com' . "\r\n";
                                $header = "MIME-Version: 1.0\r\n";
                                $header = "Content-type: text/html\r\n";
                                $retval = mail($to_email,$subject,$message,$header); 
                                 $arrays =[
                                'w_from' => 'admin',
                                'from_id' => '1',
                                'w_to' => 'user',
                                'to_id' => $r->id,
                                'title' => 'Admin '.$action.' your question',
                                'description' => '<b> Admin </b> '.$action.' your question',
                                'url' => 'user/questionlist/',
                                'tbl'=>'pre_questiondetails',
                                'status'=>'1'
                                ];
                                Notification::insertoption($arrays);
                               
                            }
            }
            return 1;
    }
  public function checkExistsAjaxUpdate($table, $id, $column, $value)
    {
        echo DB::table($table)
                ->where($column, $value)
                ->where('id', '!=', $id)
                ->where('status', '!=', '2')
                ->exists();
    }
    public function checkExists($table, $where)
    {
        return DB::table($table)
                ->where($where)
                 ->where('status','1')
                ->exists();
    }
     public function checkExistsAjax($table, $column, $value)
    {
        echo DB::table($table)
                ->where($column, $value)
                ->where('status','1')
                ->exists();
    }
 public function reset_password(Request $request, $uniqid)
    {

        $table = "users";
        $where = ["uniqid"=>$uniqid];
        $user  = $this->selectData($table, $where);

        if( $user->isEmpty() )
            die('This link has been expired');

        if ($request->isMethod('post')) {
            // echo '<pre>'; print_r($_POST); die; 

            $table = "users";

            $password = Hash::make( $request->input('password') );
            $data = ['password' => $password, "uniqid"=>null];
            $where = [
                        ['uniqid', '=', $uniqid ],
                     ];

            $this->updateData($table, $where, $data);

            echo 1; die;
        }

        return view('common.reset-password');
    }

	
    
    
    
}
