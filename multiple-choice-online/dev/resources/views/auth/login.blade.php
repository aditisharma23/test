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
    margin-left: 96px;
    padding: 0px !important;
}
.abcRioButton.abcRioButtonBlue {
    width: 213px !important;
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
										  <h1>Login</h1>
										  
										  <form method="POST" action="{{ route('login') }}" class="loginform">
                                            @csrf
										  <div class="signmrtp features_border_top ml-3"></div>
										  <p>Please enter your email and password details to access your account.</p>
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
											  <input id="usrs" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Your Password..." required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
											 
											</div>
											

                                </div>
	                                   
									 <div class=" col-lg-12 d-flex justify-content-between">
											<div class="boxshadow  custom-control custom-checkbox mb-3">
											    
											     
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                
											</div>
											 
											 
											
											<a href="javascript:void(0);" class="forgotpass"  data-toggle="modal" data-target="#myModalrestpass">Forgot Password?</a>
									</div>
									 <div class=" col-lg-12">
											    <button type="submit" class="btn btn-primary loginbtn">Login</button>
											    </form>
												
												<h6 class="mt-3">Don't have an account ?&nbsp;<a href="{{url('/register')}}"> Signup Here</a></h6>
												



														<ul class="facebookgoogle text-center">
		<fb:login-button style="display:none;" scope="public_profile,email" onlogin="checkLoginState();" style="background-color: #4C69BA; background-image: linear-gradient(#4C69BA, #3B55A0); Text-shadow: 0 -1px 0 #354C8C;" class="fblogins">
														        Login with Facebook </fb:login-button>
<a href="javascript:void(0);" id="fbloginbtn" class="loginBtn  loginBtn--facebook" >
  Login with Facebook
</a><br>
<p class="orroundedlog">or</p><br>
<!--a href="javascript:void(0);" class="loginBtn loginBtn--google gloginbtn" >
  Login with Google
</a-->			
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
</ul>
																										
												
									</div>									
									   
										  </div> 
										</div>
      
                            </div>
						</div>
                   </div>
               </div>
			</div>


</section>	
	
  <!-- The Modal -->
  <!--div class="loginmodal modal fade" id="myModalrestpass">
    <div class="modal-dialog modal-md">
      <div class="modal-content pt-3 pb-3">
      
        <!-- Modal Header -->
        <!--div class="modal-header border-0">
        <i class="fa fa-lock" aria-hidden="true"></i>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <!--div class="modal-body border-0 text-center">
						<div class="sec-title">
                    
                        <h4 class="font-weight-bold text-capitalize">Forget password</h4>
						<div class="features_border_top ml-auto mr-auto"></div>
                    </div>
                       @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST"class="mx-auto position-relative resetpass" onsubmit="return false" action="{{ route('password.email') }}">
                        @csrf
<input type="email" id="email" placeholder="Enter Email Address" class="{{ $errors->has('email') ? ' is-invalid' : '' }} checkemail" onkeyup=checkfunction(); name="email" value="{{ old('email') }}" required>
<span class="invalid-feedback" role="alert" style="display:none;">
<strong class="checkemailerror"></strong>
</span>
@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
<button style="display:block;" type="submit" class="btn btn_custom submitresetform">
Reset Password
</button>
<button style="display:none;" type="submit" class="btn btn_custom submitresetform2">
Reset Password
</button>
                    </form>
                          <!--form class="mx-auto position-relative">
                                <input type="email" placeholder="Enter Email Address" required="">
                                <button type="submit" class="btn btn_custom">Reset Password</button>
                            </form--->					
					
					
					
        <!--/div>
        

        
      </div>
    </div>
  </div-->
  
   <div class="loginmodal modal fade" id="myModalrestpass">
    <div class="modal-dialog modal-md">
      <div class="modal-content pt-3 pb-3">
      
        <!-- Modal Header -->
        <div class="modal-header border-0">
        <i class="fa fa-lock" aria-hidden="true"></i>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body border-0 text-center">
						<div class="sec-title">
                    
                        <h4 class="font-weight-bold text-capitalize">Forgot password</h4>
						<div class="features_border_top ml-auto mr-auto"></div>
                    </div>
                       @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST"class="mx-auto position-relative resetpass" onsubmit="return false" action="{{ url('user/forgetpass') }}">
                        @csrf
<input type="email" id="email" placeholder="Enter Email Address" class="{{ $errors->has('email') ? ' is-invalid' : '' }} checkemail" onkeyup=checkfunction(); name="email" value="{{ old('email') }}" required>
<span class="invalid-feedback" role="alert" style="display:none;">
<strong class="checkemailerror"></strong>
</span>
@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
<button style="display:block;" type="submit" class="btn btn_custom submitresetform">
Reset Password
</button>
<button style="display:none;" type="submit" class="btn btn_custom submitresetform2">
Reset Password
</button>
                    </form>
                          <!--form class="mx-auto position-relative">
                                <input type="email" placeholder="Enter Email Address" required="">
                                <button type="submit" class="btn btn_custom">Reset Password</button>
                            </form--->					
					
					
					
        </div>
        

        
      </div>
    </div>
  </div>
  	
	

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
$(document).ready(function(){
	  setTimeout(function(){ $('.alert-success').hide(); }, 5000);
	  setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
	});
  // This is called with the results from from FB.getLoginStatus().
  var access_token='';
  function statusChangeCallback(response) {
      
    console.log('statusChangeCallback');
    access_token = response.authResponse.accessToken;;
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
     /* document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';*/
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
      alert();
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1402546543212650',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.2' // use graph api version 2.8 v2.8
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    }); 
    

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=id,name,first_name,last_name,picture,email,permissions', function(response) {
        console.log(response);
        console.log(access_token);
                var picture = response.picture.data.url;
                var data = { fb_id:response.id,name:response.first_name,lname:response.last_name,
                            email:response.email,picture:picture}; 
                 var token=$('input[name="_token"]').val();
              
                $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    url:'{{url("user/facebooklogin")}}',
                    type:'post',
                    data: data,
                    dataType:'json',
                    success:function(response2)
                    {
                        console.log(response2);
                        if(response2.erro==101)
                        {
                            $('.as1').html(response2.message).show(); 
                            setTimeout(function(){ $('.as1').hide(); }, 5000);
                            FB.logout(function (response) {
                            location.href=response2.url;
                            });
                        }
                        else
                        { 
                          $('.dg1').html(response2.message).show(); 
                          setTimeout(function(){ $('.dg1').hide(); }, 5000);
                        }
                       
                    }
                });
    });
  }
  
  document.getElementById('fbloginbtn').addEventListener('click', function() {
    //do the login
  FB.login(statusChangeCallback);
}, false);
</script>
 <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
         googleUser.getBasicProfile().getName();
              console.log(googleUser.getBasicProfile());
              
            var email=  googleUser.getBasicProfile().getEmail();
            var first_name = googleUser.getBasicProfile().ofa;
            var  last_name = googleUser.getBasicProfile().wea;
            var picture=    googleUser.getBasicProfile().getImageUrl();
            var profile = googleUser.getBasicProfile();
              $.ajax({
                   headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    url:'{{url("user/googlelogin")}}',
                    type:'post',
                 data:{g_id:profile.getId(),email:email,picture:picture,name:first_name,lname:last_name},dataType:'json',
                  success:function(response)
                  {
                     
                      console.log(response);
                      //alert(response);
                      if(response.erro==101)
                        {
                            $('.as1').html(response.message).show(); 
                            setTimeout(function(){ $('.as1').hide(); }, 5000);
                            var auth2 = gapi.auth2.getAuthInstance();
                            auth2.signOut().then(function () {
                            //console.log('User signed out.');
                            location.href=response.url;
                            //var nextPage = response.url;
                            //location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue='+nextPage;
                            });
                            
                         /* $('#successreg').html(response.message).show(); 
                           setTimeout(function(){ $('#successreg').hide(); }, 5000);
                                    var nextPage = '{{url('')}}'+response.redirect;
                            location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue='+nextPage;
                              /*location.href=nextPage; */
                        }
                        else
                        { 
                          $('.dg1').html(response.message).show(); 
                          setTimeout(function(){ $('.dg1').hide(); }, 5000);
                        }
                  }
              });
      };
    </script>
<script>
  /*window.fbAsyncInit = function() {
    FB.init({
      appId      : '1402546543212650',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   FB.login(
  function(response) {
    console.log(response);
  },
  {
    scope: 'user_likes',
    auth_type: 'rerequest'
  }
);
   
/*{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
} */

/*function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
} */

/* FB.logout(function(response) {
   // Person is now logged out
}); */
</script>

<!--a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script-->
<script>
$('.forgotpass').click(function(){
        $('.resetpass')[0].reset();
        $(".resetpass").validate().resetForm();
        $('.submitresetform').attr('disabled',false);
        $('.submitresetform').html('ReSET PASSWORD'); 
        $(".checkemailerror").html('');
        $(".invalid-feedback").hide();  
        $('.resetpass').attr('onsubmit','return false');
});

$('.resetpass').validate({
   rules: {
        email: {
                required: true,
                email: true
            }, 
       },
       messages: {
             email:{
                required: 'Email is Required',
                email: 'Please enter a valid email'
            },
       },
       submitHandler: function(form) {
           //alert();
            $('.resetpass').submit();
      
          
       }
});

function checkfunction()
{
        $(".checkemailerror").text('');
        $(".invalid-feedback").css({"display":"none"});  
        $('.submitresetform').attr('disabled',false);
        $('.submitresetform').html('ReSET PASSWORD');
  
}
/*$('.checkemail').keyup(function(){
  
   if($(this).attr("aria-invalid")=="false")
   {
      
   }else
   {
        console.log('notvalid');
        $(".checkemailerror").text('');
        $(".invalid-feedback").css({"display":"none"});  
        $('.submitresetform').attr('disabled',false);
        $('.submitresetform').html('ReSET PASSWORD');
   }
}); */
$('.submitresetform').click(function(){
    if($(".checkemail").attr("aria-invalid")=="false")
    {
        $('.submitresetform').attr('disabled',true);
        $('.submitresetform').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        var vl = $('.checkemail').val();
        if(vl.length > 1)
        {
        
        var email = vl;
        $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: "{{url('user/checkemail')}}",
                data: {email:email},
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".checkemailerror").text(data.message);
                       $(".invalid-feedback").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                      // $('.'+btn).attr('disabled',false);
                       $('.submitresetform').attr('disabled',false);
                       $('.submitresetform').text('ReSET PASSWORD');
                         
                    }
                    if(data.erro==101)
                    {
                      $(".checkemailerror").text('');
                       $(".invalid-feedback").hide();  
                        //$('.submitresetform').attr('disabled',false);
                         //$('.submitresetform').text('RESET PASSWORD');
                         $('.resetpass').attr('onsubmit','return true');
                        // $('.resetpass').submit();
                       
                         $('.submitresetform2').trigger("click");
                         $('.submitresetform').attr('disabled',false);
                         $('.submitresetform').text('RESET PASSWORD');
                         //window.location.reload();
                         
                    }
                },
            }); 
        
        
        //We can't find a user with that e-mail address.
        
        }else
        {
        $('.submitresetform').attr('disabled',false);
        $('.submitresetform').text('ReSET PASSWORD'); 
        } 
    }else
    {
        $(".checkemailerror").text('');
        $(".invalid-feedback").hide();  
        $('.submitresetform').attr('disabled',false);
        $('.submitresetform').html('ReSET PASSWORD');
    }
    
});


$('.loginform').validate({
   rules: {
        email: {
                required: true,
                email: true
            }, 
            password: {
                required: true,
                
            }
       },
       messages: {
             email:{
                required: 'Email is Required',
                email: 'Please enter a valid email'
            },
             password:{
                required: 'Password is Required',
               
            },
       },
       submitHandler: function(form) {
           //alert();
            $('.loginform').submit();
      
          
       }
});
</script>



