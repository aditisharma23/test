<!DOCTYPE html>
<html lang="en">


<?php $countriess = App\country::getoption(); 
      if(session()->exists('user'))
      {
        $userid =Session()->get('userid');
        $userss = App\User::getbycondition(array('id'=>$userid));  
      }
?>
<head>
    <title>@if(!empty($title)) {{$title}} @endif</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="{{url('/')}}/resources/views/user/images/fav.ico">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/jquery-steps.css">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/mob.css">
    <link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/materialize.css" />
	<link rel="stylesheet" href="{{url('/')}}/resources/views/user/css/dataTables.bootstrap.min.css"/>
    <link href="{{url('/')}}/resources/views/user/css/bootstrap-glyphicons.css" rel="stylesheet"> 
    <link href="{{url('/')}}/resources/css/searchable_selectbox.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900&amp;subset=latin-ext" rel="stylesheet">

</head>
<style>
    .form-control.error{
        color: #555;
    }
    label.error{
        color: red;
    }
</style>
<body >
    <!--== MAIN CONTRAINER ==-->
    <!-- header -->
          <div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-6 col-sm-6 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="{{url('/')}}" class="logo"><img src="{{url('/')}}/resources/views/user/images/logo.png" alt="" />
            </a>
        </div>
        <!--== SEARCH ==-->
        <!--== NOTIFICATION ==-->
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-6 col-sm-6 col-xs-6">
            <!-- Dropdown Trigger -->
          
            <a class='waves-effect  dropdown-button top-user-pro' href='#' data-activates='top-menu'><img class="img1" src="@if(!empty($userss[0]->profile)){{url('public/profile/'.$userss[0]->profile)}}@else {{url('uploads/Dummy-image.jpg')}} @endif" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li><a href="{{url('/myprofile')}}" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{url('/user/wallet')}}" class="waves-effect"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>My Wallet</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{url('/user/getSignOut')}}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
              <?php 
                           $data['user_id']=Session()->get('userid');
                            $count = App\Notification::getbycondition(array('status'=>'1','w_to'=>'user','to_id'=>$data['user_id']));
                           $notification = App\Notification::getbycondition23(array('status'=>'1','w_to'=>'user','to_id'=>$data['user_id'])); 
                    
                    ?>
                        <div class="dropdown cover-notification">
                       <button class="btn btn-primary dropdown-toggle openmodels notifi-btn" style="background-color:#33d085; border-color: #33d085" type="button" ><i class="fa fa-bell" aria-hidden="true"><span class="badge notifi-badge">@if(count($count) != 0) {{count($count)}} @endif</span></i>
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu notify-drop">
                        @if(count($notification) > 0)
                        @foreach($notification as $notificatio)
                        <li data-id="{{$notificatio->id}}"  data-url="{{url($notificatio->url)}}" class="viewnotifications"><a href="javascript:void(0);"> <span class="round round-user">
                        <?php  $img = App\Admin::getdetailsuserret2(array('id'=>$notificatio->from_id),'profile');
                        ?>
                        @if(!empty($img))
                        <img src="{{url('/')}}/public/profile/{{$img}}"alt="user" width="50">											
                        @else
                        <img src="{{url('/')}}/uploads/Dummy-image.jpg"alt="user" width="50">											
                        @endif
                        
                        </span><span class="notify-txt"><?php echo $notificatio->title; ?></span> <span class="notify-time" style="margin:left:2px;"><i class="fa fa-clock-o" aria-hidden="true"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($notificatio->created_at))->diffForHumans()}}</span></a></li>
                        @endforeach
                        @else
                        No Notification Found
                        @endif
                        <div class="all-notify"><a href="{{url('/user/notification')}}"  class="notifylodmorebtn" >View All</a></div>
                        </ul>
                        </div>
            <a href="{{url('/attempt_test')}}" class="btn btn-primary pull-right btn-attempt">Attempt Test</a>
            <?php  $data['user_id']=Session()->get('userid');
            if(App\Hours::getdetailsuserret($data['user_id'],'package_id') == '1' ){ ?>
            
            <a href="javascript:void(0);" class="btn btn-primary pull-right btn-attempt">
                Total Hours:- <span id="timer" class="timer">{{App\Hours::getdetailsuserfield($data['user_id'],'total_hours')}} </span>
                <input type="hidden" id="stopper" value="1">
            </a>
        <?php  }?>
        
        
        </div>
    </div>
</div>
<!-- // header -->
<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">       
        <!-- sidemenu -->
       <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img class="img2" src="@if(!empty($userss[0]->profile)){{url('public/profile/'.$userss[0]->profile)}}@else {{url('uploads/Dummy-image.jpg')}} @endif" alt="">
                    </li>
                    <li>
                        <h5>@if(!empty($userss)){{$userss[0]->name}}@endif @if(!empty($userss)){{$userss[0]->lname}}@endif <span> @if(!empty($userss)){{$userss[0]->address}}@endif 
                        @if(!empty($countriess) && !empty($userss))
                        @foreach($countriess as $countrys)
                        @if($userss[0]->country==$countrys->id) , {{$countrys->name}}@endif
                        @endforeach
                        @endif</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13 drop-dhoadow-none">
                <ul class="collapsible" data-collapsible="accordion">
                    <li @if(!empty($page) && $page=='home') class="active" @endif ><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="false"></i> Dashboard</a></li>
                    <li @if(!empty($page) && $page=='myprofile') class="active" @endif ><a href="{{url('/myprofile')}}" ><i class="fa fa-user" aria-hidden="false"></i>My Profile</a></li>
                    <li @if(!empty($page) &&  $page=='question') class="active" @endif ><a href="{{url('/question')}}"><i class="fa fa-question" aria-hidden="false"></i>Add Question</a></li>
                    <li  @if(!empty($page) && ( $page=='questionlist' || $page=='editquestion' || $page=='viewquestion' )) class="active" @endif ><a href="{{url('user/questionlist')}}"><i class="fa fa-list" aria-hidden="false"></i>Questions List</a></li>
                    
                   <?php 
                $data['user_id']=Session()->get('userid');
                $expiry = DB::table('users_hours')->where('user_id',$data['user_id'])->select('expiry')->first();
                if(App\Hours::getdetailsuserret($data['user_id'],'package_id') == '1' ){ 
                if(date('Y-m-d') < date('Y-m-d',strtotime($expiry->expiry))){
                    if(App\Hours::getdetailsuserret($data['user_id'],'total_hours') == '00:00:00')
                    {
                    ?>
                     <li @if(!empty($page) && $page=='attempt_test') class="active" @endif >
                        <a href="{{url('/subscription')}}"><i class="fa fa-file-text-o" aria-hidden="false">
                        </i>Attempt Test</a></li>
                       <?php
                    }else
                    {
                       ?>
                       <li @if(!empty($page) && $page=='attempt_test') class="active" @endif >
                        <a href="{{url('/attempt_test')}}"><i class="fa fa-file-text-o" aria-hidden="false">
                        </i>Attempt Test</a></li>
                       
                       <?php
                    }
                }else
                {
                    ?>
                        <li @if(!empty($page) && $page=='attempt_test') class="active" @endif >
                        <a href="{{url('/subscription')}}"><i class="fa fa-file-text-o" aria-hidden="false">
                        </i>Attempt Test</a></li>
                    <?php
                }
                }else
                {    
                   $dat3 =  App\Hours::getdetailsuserret($data['user_id'],'expiry');
                 
                    $date1 = date('Y-m-d',strtotime($dat3));
                $date2 = date('Y-m-d');
                 
                    /* if(date('Y-m-d') < date('Y-m-d',App\Hours::getdetailsuserret($data['user_id'],'expiry') ))*/
                    if($date2 < $date1)
                    {
                         ?>
                         
                         <li @if(!empty($page) && $page=='attempt_test') class="active" @endif >
                        <a href="{{url('/attempt_test')}}"><i class="fa fa-file-text-o" aria-hidden="false">
                        </i>Attempt Test</a></li>
                         <?php
                     }
                     else
                     {
                        ?>
                        <li @if(!empty($page) && $page=='attempt_test') class="active" @endif >
                        <a href="{{url('/subscription')}}"><i class="fa fa-file-text-o" aria-hidden="false">
                        </i>Attempt Test</a></li>
                       
                        <?php 
                     }
                    
                    
                }
                   ?> 
               
                  
                        
                        <li @if(!empty($page) && $page=='subscription') class="active" @endif >
                        <a href="{{url('/subscription')}}"><i class="fa fa-file-text-o" aria-hidden="false">
                        </i>Subscription</a></li>
                     
                        
                        
                    <li @if(!empty($page) &&  ( $page=='report' || $page=='test_detail' )) class="active" @endif ><a href="{{url('user/report')}}"><i class="fa fa-bar-chart" aria-hidden="false"></i>Report</a></li>
                    <li @if(!empty($page) &&  ( $page=='referral')) class="active" @endif ><a href="{{url('/user/referral')}}"><i class="fa fa-users" aria-hidden="false"></i>Referral</a></li>
                </ul>
            </div>
        </div>
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
      .notifi-btn .fa-bell::before {
    font-size: 19px;
    color: #a6b7bf;

}
.cover-notification .dropdown-menu.notify-drop.show a {

    padding: 0 !important;

}
.notifi-btn {

    background: transparent !important;
    margin-top: 10px;
    padding-left: 0px !important;
    padding-right: 0px !important;

}
.notifi-badge {
    top: -13px !important;
    left: -12px;
    background: transparent !important;
    color: #33d085 !important;

}
.btn.btn-primary.dropdown-toggle.openmodels.notifi-btn:hover , .btn.btn-primary.dropdown-toggle.openmodels.notifi-btn:focus {

    background: transparent !important;

}
.cover-notification ul a {

    color: #33d085 !important;
    text-decoration-line: none;

}
.cover-notification .dropdown-menu {
    margin: 5px -12px 0 !important;
    width:300px;
    left: -126px;
    padding:0;
}
.notify-drop .round-user {
    width: 30px !important;
    height: 30px !important;
    border-radius: 100% !important;
    float: left;
    margin-right: 10px;
    display: inline-block;
    margin-top: 0;
}
.notify-drop .notify-txt {
    white-space: normal;
    width: calc(100% - 40px);
    float: left;
    min-height: 30px;
    align-items: center;
    display: flex;
    line-height: 1.3;
}
.notify-drop .notify-time {
   margin: left:2px;
    display: block;
    color: gray;
    font-size: 10px;
    padding-left: 40px;
    margin-top: 2px;
    float: left;
    width:100%;
}
.notify-time i.fa.fa-clock-o {
    margin-right: 5px;
}

.dropdown.cover-notification ul li {

    padding: 12px 10px;
    border-bottom: 1px solid #ccc;
    float:left;
}
.dropdown.cover-notification {

    width: 20px;
    float: right;

}
.round-user img {

    width: 100%;
    height: 100%;
    border-radius: 100%;
    border: 1px solid #ccc;

}
.all-notify {

    text-align: center;
    padding: 9px 4px;
    border-radius: 0 0 5px 5px;
    float: left;
    width: 100%;
}
.all-notify .notifylodmorebtn{color:#000 !important;font-weight: 600;}
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
        <!-- // sidemenu -->