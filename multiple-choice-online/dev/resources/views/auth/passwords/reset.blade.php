<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="{{url('/')}}/resources/css/owl.carousel.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/owl.theme.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/owl.transitions.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/mobiriseicons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/resources/css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/resources/css/bootstrap.min.css" />
    <link href="{{url('/')}}/resources/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="{{url('/')}}/resources/css/font-awesome.css">
	<meta name="google-signin-client_id" content="567402969779-4thile1dr58lfh6h2043qvbu16smcd40.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
</head>
<style>
    .error{
        color:red;
    }
    .alert-danger,.alert-success {  position: fixed;
        max-width: 50%;
        width: 100%;
        top: 45%;
        left: 16%;
        margin: auto;
        z-index: 111111;
        box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.15);
        text-align: center;
        right: 0;
      }
      .g-signin2 {
    margin-left: 99px;
    padding: 0px !important;
}
.abcRioButton.abcRioButtonBlue {
    width: 211px !important;
}
</style>

    @if(Session::has('error'))  
     <div class="alert alert-danger">
       {{ Session::get('error')}} 
     </div>
    @endif
    
    @if(Session::has('success'))   
     <div class="alert alert-success">
       {{ Session::get('success')}} 
     </div>
    @endif
    
    <div class="alert alert-danger dg1" style="display:none;"></div>
    <div class="alert alert-success as1" style="display:none;"></div>
    <body class="logincolor">
	
<section class="loginsection">


			<div class="container">
			        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
						<div class="row">


										<div class="col-lg-10 col-md-10 col-sm-12 col-12 offset-lg-1 offset-md-1  ">			
                                     <h2 class="mobile-center text-center"><a href="index.html">Multiple Choice Online</a></h2>			
						    <div class="loginsection-in">
						<div class="row">


										<div class="col-lg-6 col-md-6 paddingleft   pr-0">
                                          <div class="login-img">
										  <img src="images/home-bg-3.jpg">
										  <div class="login-textab text-center">
										                  <h3 class="logo text_custom">
														   Multiple Choice Online
														</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>

														<ul class="login-home">
														
														<a href="{{url('/')}}" class="btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Back To Home</a>
														</ul>
														
														</div>
										  </div> 
										</div>
										<div class="col-lg-6 col-md-6 p-0">
                                          <div class="login-text">
										  <h1>{{ __('Reset Password') }}</h1>
										  
										  <form method="POST" action="{{ route('password.update') }}" class="resetyourpassword">
                                            @csrf
										  <div class="signmrtp features_border_top ml-3"></div>
										  <p>Please enter your email, password and confirm password to reset your password.</p>
                                <div class=" col-lg-12">
                                <div class="form-group">
                                 <input id="email" placeholder="Enter Your Email..." type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                
                               @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                                </div>
                                </div>	
								
									 <div class=" col-lg-12">
											<div class="form-group">
											     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Your Password..." name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
											  
											 
											</div>
											

                                </div>
                                 <div class=" col-lg-12">
											<div class="form-group">
                                 <input id="password-confirm" type="password" placeholder="Enter Your Confirm Password..."  class="form-control" name="password_confirmation" required>
                                 </div>
											

                                </div>
	                                   
						
									 <div class=" col-lg-12">
											    <button type="submit" class="btn btn-primary loginbtn">  {{ __('Reset Password') }}</button>
											    </form>
													
									</div>									
									   
										  </div> 
										</div>
      
                            </div>
						</div>
                   </div>
               </div>
			</div>


</section>	
	
  
  	
	

        <!-- JAVASCRIPTS -->
       <script src="{{url('/')}}/resources/js/jquery.min.js"></script>
        <script src="{{url('/')}}/resources/js/validation.js"></script>
        <script src="{{url('/')}}/resources/js/popper.min.js"></script>
        <script src="{{url('/')}}/resources/js/bootstrap.min.js"></script>
        <!--TESTISLIDER JS-->
        <script src="{{url('/')}}/resources/js/owl.carousel.min.js"></script>
        <script src="{{url('/')}}/resources/js/masonry.pkgd.min.js"></script>
        <script src="{{url('/')}}/resources/js/jquery.magnific-popup.min.js"></script>
      
        <script src="{{url('/')}}/resources/js/jquery.easing.min.js"></script>
        <script src="{{url('/')}}/resources/js/custom.js"></script>
    </body>
</html>

<script>

$('.resetyourpassword').validate({
   rules: {
        email: {
                required: true,
                email: true
            }, 
            password: {
                required: true,
                minlength : 6
                
            },
            password_confirmation: {
                required: true,
                minlength : 6,
                 equalTo : "#password"
                
            }
       },
       messages: {
             email:{
                required: 'Email is Required',
                email: 'Please enter a valid email'
            },
             password:{
                required: 'Password is Required',
                minlength: 'Please enter at least 6 characters.',
                
               
            },
            password_confirmation:{
                required: 'Confirm Password is Required',
                minlength: 'Please enter at least 6 characters.',
                equalTo: 'Please enter the same value as new password',
               
            },
       },
       submitHandler: function(form) {
            $('.resetyourpassword').submit();
      
          
       }
});
</script>



