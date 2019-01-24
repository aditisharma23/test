<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if(session()->exists('user'))
        { 
            return redirect()->action('HomeController@index');

       //  $userid =Session()->get('userid');
       //$data['user'] = User::getbycondition(array('id'=>$userid));
       // return redirect('/home',$data);
        //$userid =Session()->get('userid');
       // $data['user'] = User::getbycondition(array('id'=>$userid));
        // return view('/user/home',$data);
        }else{
          return view('auth.login');
        }
    
    }

    public function confirmEmail($token)
    {
        User::whereToken($token)->firstOrFail()->confirmEmail();
        return redirect('/auth/login');
    }
    
    protected function validateLogin(\Illuminate\Http\Request $request)
{
    $this->validate($request, [
        $this->username() => 'required|exists:users,' . $this->username() . ',status,1',
        'password' => 'required',
    ], [
        $this->username() . '.exists' => 'The selected email is invalid or the account has been disabled.'
    ]);
}
    
    /* protected function credentials(\Illuminate\Http\Request $request)
    {
        //return $request->only($this->username(), 'password');
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'status' => 1];
    } */
}
