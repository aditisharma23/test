<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="#">
    <title>@if(!empty($title)){{$title}}@else Multiple Choice Online @endif</title>
    <link href="{{url('/')}}/resources/views/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/views/admin/css/perfect-scrollbar.css" rel="stylesheet">
	<link rel="stylesheet" href="{{url('/')}}/resources/views/admin/css/font-awesome.css">	
    <link href="{{url('/')}}/resources/views/admin/css/chartist.min.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/views/admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/views/admin/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/views/admin/css/style.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/views/admin/css/dashboard1.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/views/admin/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/searchable_selectbox.css" id="theme" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{url('/')}}/resources/views/admin/assets/plugins/datatables/media/css/dataTables.bootstrap4.css"> 

</head>
<style>
    .error{
        color:red !important;
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
    .logo-icon {
      display:none;
      width: 30px;
    }
    .mini-sidebar .topbar .navbar-brand img.dark-logo {
        display: none;
    }
    .mini-sidebar .logo-icon {
        display: block;
        position: relative;
        top: 10px;
    }
    a.openmodels {
    font-size: xx-large;
  
}
ul.cs-scroll li a{
    text-decoration: none; 
}
 ul.cs-scroll {
      list-style: none;
      padding: 5px;
   }
   
.navbar-expand-md .navbar-nav .dropdown-menu.notify-drop {
    position: absolute;
    width: 300px;
    right: 0;
    left: auto;
    padding: 15px;
}
.notify-drop li {
    margin-bottom: 10px;
    font-size: 14px;
    float:left;
}
.notify-drop .round {
    width: 35px;
    height: 35px;
    line-height: normal;
    background: none;
    margin-right: 10px;
    border: 2px solid #a1adb3;
    float:left;
}
.notify-drop .round img {
    width: 100%;
    height: 100%;
}
.notify-txt {
    float: left;
    width: calc(100% - 45px);
    line-height: 1.3;
    font-size: 12px;
}
.notify-time {
    float: left;
    width: 100%;
    color: gray;
    font-size: 12px;
    margin-top: 5px;
}
.notify-time i.fa.fa-clock-o {
    margin-right: 5px;
}
.all-notify {
    background: #f5f5f5;
    padding: 10px;
    text-align: center;
    float: left;
    width: 100%;
}
.all-notify a.notifylodmorebtn {
    color: #000;
    font-size: 14px;
    font-weight: 600;
}
.userdatabtn-color .btn-rounded.btn-sm {
    margin-left: 40px !important;
}
.userdatabtn-color input#selectAllDomainList {
    margin-top: 10px;
}
.notifi-btn .mdi-bell::before {
font-size: 21px;
color: #a6b7bf

}
.notifi-badge {

    top: -10px !important;
    left: -12px;
    background: transparent !important;
    color: #33d085 !important;

}
.notifi-btn:hover , .notifi-btn:focus {

    box-shadow: none;

}
.notify-drop {

    box-shadow: 0 0 5px #000 !important;

}
.notifi-btn {

    border: transparent !important;
    box-shadow: none;
    margin-top: 5px;

}
.open-main-drop{
    padding: 0px !important;
    box-shadow: 0 0 5px #000 !important;
}
.open-main-drop li{
margin-bottom: 0;
font-size: 14px;
border-bottom: 1px solid #ccc;
padding: 12px 10px;
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
<body class="fix-header fix-sidebar card-no-border" >

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
             <p class="loader__label">Multiple Choice Online</p>
        </div>
    </div>

    <div id="main-wrapper">
<!--header file-->
<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('admin/dashboard')}}">

                            <img src="{{url('/')}}/resources/views/admin/images/logo-white.png" alt="homepage" class="dark-logo" />
                            <img src="{{url('/')}}/resources/views/admin/images/logo-icon.png" alt="homepage" class="logo-icon" />
                            <!-- Light Logo icon -->
                  </span> </a>
                </div>
           
                <div class="navbar-collapse">
                  
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
              
                    <ul class="navbar-nav my-lg-0">
                  
                        <!--li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li-->
                      <li>
                           <?php 
                           
                            $count = App\Notification::getbycondition(array('status'=>'1','w_to'=>'admin'));
                           $notification = App\Notification::getbycondition23(array('status'=>'1','w_to'=>'admin')); 
                    
                    ?>
                        <div class="dropdown cover-notification">
                        <button class="btn btn-primary dropdown-toggle openmodels notifi-btn" style="background-color:transparent;" type="button" ><i class="mdi-bell mdi" aria-hidden="true"><span class="badge notifi-badge">@if(count($count) != '0' ){{count($count)}} @endif</span></i>
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu notify-drop open-main-drop">
                        @if(count($notification) > 0)
                        @foreach($notification as $notificatio)
                        <li data-id="{{$notificatio->id}}"  data-url="{{url($notificatio->url)}}" class="viewnotifications"><a href="javascript:void(0);"> <span class="round">
                        <?php  $img = App\User::getdetailsuserret2(array('id'=>$notificatio->from_id),'profile');
                        ?>
                        @if(!empty($img))
                        <img src="{{url('/')}}/public/profile/{{$img}}"alt="user" width="50">											
                        @else
                        <img src="{{url('/')}}/uploads/Dummy-image.jpg"alt="user" width="50">											
                        @endif
                        
                        </span><span class="notify-txt"><?php echo $notificatio->title; ?> <span class="notify-time" style="margin:left:2px;"><i class="fa fa-clock-o" aria-hidden="true"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($notificatio->created_at))->diffForHumans()}}</span></span></a> </li>
                        @endforeach
                        @else
                        <li>No New Notification</li>
                        @endif
                        <div class="all-notify"><a href="{{url('/admin/notification')}}"  class="notifylodmorebtn" >View All</a></div>
                        </ul>
                        </div>
                       
                      </li>
                        
                        
                        <?php if(Auth::user()){ $auth = Auth::user();  }else{ $auth=''; } ?>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark clicktoggle" href="javascript:void(0);"  aria-haspopup="true" aria-expanded="false"><img src="@if(!empty($auth->profile)) {{url('public/profile/'.$auth->profile)}} @else {{url('/')}}/resources/views/admin/images/1.jpg @endif" alt="user" class="profile-pic" /><span>My Account</span><i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                        <li> <a class="waves-effect waves-dark" href="{{url('admin/profile')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</a>
                        </li>                                    
                                    <li>
                                        

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form><a href="{{ route('admin.logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <!--sidebar-->
        <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                        <!--li class="user-profile"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="assets/images/users/profile.png" alt="user" /><span class="hide-menu">Steave Jobs </span></a>
                            <ul aria-expanded="false" class="collapse">
                             <li><a href="javascript:void()">My Profile </a></li> 
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="javascript:void()">Logout</a></li>
                            </ul>
                        </li-->

                        <li class="nav-devider"></li>

                        <li class="nav-small-cap">Main</li>

                        <li @if(!empty($page)) @if($page=='dashboard') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</a>
                        </li>

                        <li @if(!empty($page)) @if($page=='country' || $page=='state_province' || $page=='course' || $page=='grade_level' || $page=='year' || $page=='subject' || $page=='chapter') class="active" @endif @endif > <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-tree"></i><span class="hide-menu">Category Filters <i class="mdi mdi-chevron-down"></i></a>

                           <ul aria-expanded="false" class="collapse">
                            <li @if(!empty($page)) @if($page=='country') class="active" @endif @endif ><a href="{{url('admin/country')}}" @if(!empty($page)) @if($page=='country') class="active" @endif @endif >Country</a></li>
                            <li @if(!empty($page)) @if($page=='state_province') class="active" @endif @endif ><a href="{{url('admin/state_province')}}" @if(!empty($page)) @if($page=='state_province') class="active" @endif @endif >State/Province</a></li>
                            <li @if(!empty($page)) @if($page=='course') class="active" @endif @endif ><a href="{{url('admin/course')}}" @if(!empty($page)) @if($page=='course') class="active" @endif @endif >Course</a></li>
                            <li @if(!empty($page)) @if($page=='grade_level') class="active" @endif @endif ><a href="{{url('admin/grade_level')}}" @if(!empty($page)) @if($page=='grade_level') class="active" @endif @endif >Grade/Level</a></li>
                            <li @if(!empty($page)) @if($page=='year') class="active" @endif @endif ><a href="{{url('admin/year')}}" @if(!empty($page)) @if($page=='year') class="active" @endif @endif >Year</a></li>
                            <li @if(!empty($page)) @if($page=='subject') class="active" @endif @endif ><a href="{{url('admin/subject')}}" @if(!empty($page)) @if($page=='subject') class="active" @endif @endif >Subject</a></li>
                            <li @if(!empty($page)) @if($page=='chapter') class="active" @endif @endif ><a href="{{url('admin/chapter')}}" @if(!empty($page)) @if($page=='chapter') class="active" @endif @endif >Chapter</a></li>								

                        </ul>							
                    </li>

                    <li @if(!empty($page)) @if($page=='questions') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/questions')}}" aria-expanded="false"><i class="mdi mdi-network-question"></i><span class="hide-menu">Questions</a>
                    </li>
                    <li @if(!empty($page)) @if($page=='suggested_answers') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/suggested_answers')}}" aria-expanded="false"><i class="mdi mdi-network-question"></i><span class="hide-menu">Suggested Answers</a>
                    </li>

                    <li @if(!empty($page)) @if($page=='users') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/users')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</a>
                    </li>
                    <li style="display:none;" @if(!empty($page)) @if($page=='withdraw') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/withdraw')}}" aria-expanded="false"><i class="mdi mdi-square-inc-cash"></i><span class="hide-menu">Withdraw Request</a>
                    </li>
                     <li @if(!empty($page)) @if($page=='subescribedusers') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/subescribedusers')}}" aria-expanded="false"><i class="mdi mdi-send"></i><span class="hide-menu">Newsletter Users</a>
                    </li>
                    <li @if(!empty($page)) @if($page=='reports') class="active" @endif @endif > <a class="waves-effect waves-dark" href="{{url('admin/reports')}}" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Reports</a></li>
                    <li @if(!empty($page)) @if($page=='subscription') class="active" @endif @endif >
                        <a class="waves-effect waves-dark" href="{{url('admin/subscription')}}" aria-expanded="false"><i class="mdi-briefcase-check mdi"></i><span class="hide-menu">Subscription</a>
                    </li>
                    <li @if(!empty($page)) @if($page=='subscription_list') class="active" @endif @endif >
                        <a class="waves-effect waves-dark" href="{{url('admin/subscription_list')}}" aria-expanded="false"><i class="mdi-briefcase-check mdi"></i><span class="hide-menu">Payment List</a>
                    </li>
                   
                    <li @if(!empty($page)) @if($page=='settings') class="active" @endif @endif >
                        <a class="waves-effect waves-dark" href="{{url('admin/settings')}}" aria-expanded="false"><i class="mdi-settings mdi"></i><span class="hide-menu">Settings</a>
                    </li>
                    <li @if(!empty($page)) @if($page=='home1' || $page=='about' || $page=='contactus' || $page=='faqs' || $page=='faq_list' || $page=='testimonials' || $page=='referral') class="active" @endif @endif > <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi-file-document-box mdi"></i><span class="hide-menu">Pages <i class="mdi mdi-chevron-down"></i></a>

                           <ul aria-expanded="false" class="collapse">
                            <li @if(!empty($page)) @if($page=='home1') class="active" @endif @endif ><a href="{{url('admin/home1')}}" @if(!empty($page)) @if($page=='home1') class="active" @endif @endif >Home</a></li>
                            <li @if(!empty($page)) @if($page=='about') class="active" @endif @endif ><a href="{{url('admin/about')}}" @if(!empty($page)) @if($page=='about') class="active" @endif @endif >About Us</a></li>
                            <li @if(!empty($page)) @if($page=='contactus') class="active" @endif @endif ><a href="{{url('admin/contactus')}}" @if(!empty($page)) @if($page=='contactus') class="active" @endif @endif >Contact Us</a></li>
                            <li @if(!empty($page)) @if($page=='faqs') class="active" @endif @endif ><a href="{{url('admin/faqs')}}" @if(!empty($page)) @if($page=='faqs') class="active" @endif @endif >FAQ</a></li>
                            <li @if(!empty($page)) @if($page=='faq_list') class="active" @endif @endif ><a href="{{url('admin/faq_list')}}" @if(!empty($page)) @if($page=='faq_list') class="active" @endif @endif >FAQ List</a></li>
                             <li @if(!empty($page)) @if($page=='testimonials') class="active" @endif @endif ><a href="{{url('admin/testimonials')}}" @if(!empty($page)) @if($page=='testimonials') class="active" @endif @endif >Testimonials</a></li>
                             <li @if(!empty($page)) @if($page=='referral') class="active" @endif @endif ><a href="{{url('admin/referral')}}" @if(!empty($page)) @if($page=='referral') class="active" @endif @endif >Referral</a></li>
                           	<li @if(!empty($page)) @if($page=='footer') class="active" @endif @endif ><a href="{{url('admin/footer')}}" @if(!empty($page)) @if($page=='footer') class="active" @endif @endif >Footer</a></li>							
<li @if(!empty($page)) @if($page=='pricing') class="active" @endif @endif ><a href="{{url('admin/pricing')}}" @if(!empty($page)) @if($page=='pricing') class="active" @endif @endif >Pricing</a></li>
                        <li @if(!empty($page)) @if($page=='loginregister') class="active" @endif @endif ><a href="{{url('admin/loginregister')}}" @if(!empty($page)) @if($page=='loginregister') class="active" @endif @endif >Content(Login/Register)</a></li>
                        </ul>							
                    </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


<div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">

                        <!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
                    </div>
                    <div class="modal-body text-center">

                     <i class="mdi mdi-close"></i>
                     <h1>Are you sure</h1>
                     <p>Do you really want to delete these records? This process cannot be undone.</p>
                     <ul>
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </ul>											  

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




