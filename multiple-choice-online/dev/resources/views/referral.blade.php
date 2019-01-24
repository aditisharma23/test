@include('layouts.header')

 <?php $r_image=''; $r_title=''; $r_head1=''; $r_image2=''; $r_content1=''; $r_head2=''; 
                           $r_content2=''; $r_head3=''; $r_content3=''; $r_head4=''; $r_content4=''; $r_head5=''; $r_content5='';   ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'r_image')
      {
         $r_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_title')
      {
         $r_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head1')
      {
         $r_head1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_image2')
      {
         $r_image2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content1')
      {
         $r_content1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head2')
      {
         $r_head2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content2')
      {
         $r_content2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head3')
      {
         $r_head3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content3')
      {
         $r_content3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head4')
      {
         $r_head4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content4')
      {
         $r_content4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head5')
      {
         $r_head5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content5')
      {
         $r_content5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head6')
      {
         $r_head6= $option->coulmn_value; 
      }
      
  }
  
 ?>

@endif
<style>
.checkuser{
        border: 1px solid #33d085;
    background-color: #33d085;
}
</style>
<div class="contactslider slider-area" style="background-image:url({{url('public/pages/'.$r_image)}});">
    <div class="page-title">
        <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-content slider-content-breadcrumb text-center">
                            <h1 class="white-color f-700">@if(!empty($r_title)){{$r_title}}@endif</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/referral')}}" style="color:white">@if(!empty($r_title)){{$r_title}}@endif</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>		

<section class="faq-mainsection what-we-do pt-3 pb-5 bg-white" style="background: #fff;">
    <div class="container">


                <div class="row mt-5 vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="features_box_content mt-3">
                            
                            <h4 class="font-weight-bold text-capitalize features_box_title_top">@if(!empty($r_head1)){{$r_head1}}@endif</h4>
                            <div class="features_border_top"></div>
                            @if(!empty($r_content1))<?php echo $r_content1; ?>@endif
                            @if(!empty(Session()->get('userid')))
                             @if($userid =Session()->get('userid'))
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalsreffer" class="btn btn_custom mt-5 startreffer">Start Referring</a>
                             @endif
                             @else
                             <a href="{{url('/login')}}"  class="btn btn_custom mt-5">Start Referring</a>
                             @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img src="@if(!empty($r_image2)){{url('public/pages/'.$r_image2)}}@else {{url('/')}}/resources/images/referral.png @endif" class="img-fluid mx-auto d-block" alt="" title="features-1">
                        </div>
                    </div>
                </div>
    </div>	
</section>

<section class="section_all bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_heading  text-center">
                            <h3 class="all_section_heading">@if(!empty($r_head2)){{$r_head2}}@endif</h3>
                            <div><i class="mbri-magic-stick all_section_icons  text_custom font-weight-bold"></i></div>
                            @if(!empty($r_content2))<?php echo $r_content2; ?>@endif
                        </div>
                    </div>
                </div>

                <div class="row mt-5 d-flex">
                    <div class="col-lg-4 offset-2">
                        <div class="services_box bg-white heigh100 text-center p-4 mt-3">
                            <div class="service_icon text-left">
                                <h1 class="text-muted">1.</h1>
                            </div>
                            <div class="service_content mt-4 text-left">
                                <h5 class="font-weight-bold text-left">@if(!empty($r_head3)){{$r_head3}}@endif</h5>
                                @if(!empty($r_content3))<?php echo $r_content3; ?>@endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services_box bg-white heigh100 text-center p-4 mt-3">
                            <div class="service_icon text-left">
                                <h1 class="text-muted">2.</h1>
                            </div>
                            <div class="service_content mt-4 text-left">
                                <h5 class="font-weight-bold text-left">@if(!empty($r_head5)){{$r_head5}}@endif</h5>
                               @if(!empty($r_content4))<?php echo $r_content4; ?>@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	
 @extends('layouts.footer')
 <div class="modal fade " id="myModalsreffer" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form name="reffer" class="reffer" methode="post"  data-next="" data-action="{{url('/reffer_friend')}}">
        <div class="modal-content">
            <!--div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div-->
            <div class="modal-body">
                <h3>Invite Friend</h3>
            

                <div class="form-group">
                    <label for="comment">Email:</label>
                    <input class="form-control" name="email" id="email" placeholder="example@example.com" autocomplete="off" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-Success checkuser" >Submit</button>
            </div>
        </div>
        </form>

    </div>
</div>
      