<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(!empty($title)){{$title}} @else Home @endif</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
    <body>

        <!-- START NAVBAR -->
        <nav class="contactnav navbar navbar-expand-lg fixed-top custom_nav_menu sticky">
            <div class="container">
                <!-- LOGO -->
                <h3 class="navbar-brand logo text_custom">
                   <a href="{{url('/')}}" style="color:#33d085;">Multiple Choice Online</a>
                </h3>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link">Home</a>
                        </li>
                       
                        @if(!empty(Session()->get('userid')))
                            <li class="nav-item">
                            <a href="{{url('/attempt_test')}}" class="nav-link">Online Tests</a>
                            </li>
                        @endif
                        
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                        </li>
                     @if(empty(Session()->get('userid')))
                        <li class="nav-item">
                            <a href="{{url('/pricing')}}" class="nav-link">Pricing</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{url('/subscription')}}" class="nav-link">Pricing</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{url('/faq')}}" class="nav-link">Faq</a>
                        </li>
                <li class="nav-item">
                    <a href="{{url('/referral')}}" class="nav-link">Referral</a>
                </li>
             
                    </ul>
                    @guest
                    @if($userid =Session()->get('userid'))
                    <?php $users = App\User::getbycondition(array('id'=>$userid));
                    
                    if(count($users) > 0)
                    { ?>
                      
                        <!--<a class="btn_custom btn btn_small text-capitalize navbar-btn" href="{{url('/home')}}">
                        {{$users[0]->name}}</a>         
                        
                         <a class="btn_custom btn btn_small text-capitalize navbar-btn" href="{{ url('user/getSignOut') }}" >
                        {{ __('Logout') }}
                        </a>-->
                        
                        <div class="dropdown user-drop">
                          <button class="btn dropdown-toggle btn-login btn_custom top-user" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img1" src="@if(!empty($userss[0]->profile)){{url('public/profile/'.$userss[0]->profile)}}@else {{url('uploads/Dummy-image.jpg')}} @endif" alt="">
                            <span>My Account</span>
                          </button>
                          
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{url('/home')}}" class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>{{$users[0]->name}}</a>
                            <a href="{{ url('user/getSignOut') }}" class="dropdown-item" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Logout') }}</a>
                          </div>
                        </div>
                  <?php  }
                    ?>
                    @else
                    <a href="{{url('/login')}}" class="btn_custom btn btn_small text-capitalize navbar-btn">Login / Sign Up</a>
                    @endif
                     @else
                     
         <!--a class="btn_custom btn btn_small text-capitalize navbar-btn" href="{{url('/home')}}">
         {{ Auth::user()->name }}</a>         
        <a class="btn_custom btn btn_small text-capitalize navbar-btn" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
        </a-->
        <div class="dropdown user-drop">
              <button class="btn dropdown-toggle btn-login btn_custom top-user" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img1" src="@if(!empty($userss[0]->profile)){{url('public/profile/'.$userss[0]->profile)}}@else {{url('uploads/Dummy-image.jpg')}} @endif" alt="">
                <span>My Account</span>
              </button>
              
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="{{url('/home')}}" class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Logout') }}</a>
              </div>
        </div>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
         </form> @endguest
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->