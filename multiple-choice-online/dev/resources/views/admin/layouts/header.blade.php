<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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
</head>


    <body>
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
        <!-- START NAVBAR -->
        <nav class="contactnav navbar navbar-expand-lg fixed-top custom_nav_menu sticky">
            <div class="container">
                <!-- LOGO -->
                <h3 class="navbar-brand logo text_custom">
                   Multiple Choice Online
                </h3>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link">Online Tests</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                        </li>
                     
                        <li class="nav-item">
                            <a href="{{url('/pricing')}}" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/faq')}}" class="nav-link">Faq</a>
                        </li>
                <li class="nav-item">
                    <a href="{{url('/referral')}}" class="nav-link">Referral</a>
                </li>
             
                    </ul>
                    @guest
                    <a href="{{url('/login')}}" class="btn_custom btn btn_small text-capitalize navbar-btn">Login / Sign Up</a>
                     @else
                     
         <a class="btn_custom btn btn_small text-capitalize navbar-btn" href="{{url('/home')}}">
         {{ Auth::user()->name }}</a>         
        <a class="btn_custom btn btn_small text-capitalize navbar-btn" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
         </form> @endguest
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->