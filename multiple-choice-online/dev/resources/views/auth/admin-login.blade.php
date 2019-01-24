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
    <link rel="shortcut icon" href="{{url('resources/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('resources/css/magnific-popup.css')}}">
    <link href="{{url('resources/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('resources/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{url('resources/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{url('resources/css/mobiriseicons.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('resources/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('resources/css/bootstrap.min.css')}}" />
    <link href="{{url('resources/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('resources/css/font-awesome.css')}}">
</head>
<?php 


$options = App\Options::getoption();

 $lr_title='';
 $rl_title=''; 
 $l_side_content='';
 $r_side_content=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'lr_title')
      {
         $lr_title= $option->coulmn_value; 
      }
       if($option->coulmn_name == 'rl_title')
      {
         $rl_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'l_side_content')
      {
         $l_side_content= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_side_content')
      {
         $r_side_content = $option->coulmn_value; 
      }
     
  }
  
 ?>

@endif
    <body class="logincolor">
    
<section class="loginsection">


            <div class="container">
                   
                        <div class="row">


                                        <div class="col-lg-10 col-md-10 col-sm-12 col-12 offset-lg-1 offset-md-1  ">            
                                     <h2 class="mobile-center text-center"><a href="{{url('/')}}">{{$lr_title}}</a></h2>         
                            <div class="loginsection-in">
                        <div class="row">


                                        <div class="col-lg-6 col-md-6 paddingleft   pr-0">
                                          <div class="login-img">
										  <img src="images/home-bg-3.jpg">
										  <div class="login-textab text-center">
										                  <h3 class="logo text_custom">
														   {{$lr_title}}
														</h3>
														<?php echo $l_side_content; ?>

														<ul class="login-home">
														
														<a href="{{url('/')}}" class="btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Back To Home</a>
														</ul>
														
														</div>
										  </div> 
										</div>
                                        <div class="col-lg-6 col-md-6 p-0">
                                          <div class="login-text">
                                          <h1>Admin Login</h1>
                                          <div class="signmrtp features_border_top ml-3"></div>
                                          <p>Please enter your email and password details to access your account.</p>
                                   <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                       <div class=" col-lg-12">
											<div class="form-group">
											 
											   <input id="usr" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your Email..." required autofocus>
										  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif	 
											 
											 
											</div>
                                </div>	

                        <div class=" col-lg-12">
											<div class="form-group">
											  <input id="usr" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Your Password..." required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
											 
											</div>
											

                                </div>

                        <!--<div class="form-group">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary loginbtn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
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
       <script src="{{url('resources/js/jquery.min.js')}}"></script>
        <script src="{{url('resources/js/popper.min.js')}}"></script>
        <script src="{{url('resources/js/bootstrap.min.js')}}"></script>
        <!--TESTISLIDER JS-->
        <script src="{{url('resources/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('resources/js/masonry.pkgd.min.js')}}"></script>
        <script src="{{url('resources/js/jquery.magnific-popup.min.js')}}"></script>
      
        <script src="{{url('resources/js/jquery.easing.min.js')}}"></script>
        <script src="{{url('resources/js/custom.js')}}"></script>
    </body>
</html>   