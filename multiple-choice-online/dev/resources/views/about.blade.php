@include('layouts.header')

<?php $a_image=''; $a_title=''; $a_head1=''; $a_image2=''; $a_content1=''; $a_head2=''; 
                           $a_content2=''; $a_head3=''; $a_content3=''; $a_head4=''; $a_content4=''; $a_head5=''; $a_content5=''; $a_head6=''; $a_image9=''; $a_image3=''; $a_head7=''; $a_content7='';
                           $a_image4=''; $a_head8=''; $a_content8=''; $a_image5=''; $a_head9=''; $a_content9=''; $a_image6=''; $a_head10=''; $a_content10=''; $a_image7=''; $a_head11=''; $a_content11=''; $a_image8=''; $a_head12=''; $a_content12=''; 
                           $satisfied_students=''; $online_tests=''; $categories_no=''; $questions_no=''; 
                           ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'a_image')
      {
         $a_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_title')
      {
         $a_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head1')
      {
         $a_head1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image2')
      {
         $a_image2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image9')
      {
         $a_image9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content1')
      {
         $a_content1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head2')
      {
         $a_head2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content2')
      {
         $a_content2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head3')
      {
         $a_head3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content3')
      {
         $a_content3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head4')
      {
         $a_head4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content4')
      {
         $a_content4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head5')
      {
         $a_head5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content5')
      {
         $a_content5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head6')
      {
         $a_head6= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'a_image3')
      {
         $a_image3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head7')
      {
         $a_head7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content7')
      {
         $a_content7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image4')
      {
         $a_image4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head8')
      {
         $a_head8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content8')
      {
         $a_content8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image5')
      {
         $a_image5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head9')
      {
         $a_head9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content9')
      {
         $a_content9= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'a_image6')
      {
         $a_image6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head10')
      {
         $a_head10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content10')
      {
         $a_content10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image7')
      {
         $a_image7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head11')
      {
         $a_head11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content11')
      {
         $a_content11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image8')
      {
         $a_image8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head12')
      {
         $a_head12= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content12')
      {
         $a_content12= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'satisfied_students')
      {
         $satisfied_students = $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'online_tests')
      {
         $online_tests = $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'categories_no')
      {
         $categories_no = $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'questions_no')
      {
         $questions_no = $option->coulmn_value; 
      }
      
      
      
  }
  
 ?>

@endif
<div class="contactslider slider-area" style="background-image: url({{url('public/pages/'.$a_image)}});">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">@if(!empty($a_title)){{$a_title}}@endif</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/about')}}" style="color:white">@if(!empty($a_title)){{$a_title}}@endif</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		
<!-- start content-->		
<section class="what-we-do sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                    
                        <h4 class="font-weight-bold text-capitalize features_box_title_top">@if(!empty($a_head1)){{$a_head1}}@endif</h4>
						<div class="features_border_top"></div>
                    </div>
                    <div class="text">
                        @if(!empty($a_content1))<?php echo $a_content1; ?>@endif
                    </div>
                    <div class="link-btn mb-30 mt-40"><a href="{{url('login')}}" class="theme-btn btn-style-one">Get Started</a></div>
                </div>
                <div class="col-lg-6">
                    <div class="stacked-image-carousel">
                        <!--Slides-->
                        <div class="slides">
                            <!--Slide-->
                            <div class="slide">
                                <div class="image"><img src="@if(!empty($a_image2)){{url('public/pages/'.$a_image2)}}@else{{url('/')}}/resources/images/3.jpg @endif" alt=""></div>
                            </div>
                            <!--Slide-->
                            <div class="slide active">
                                <div class="image"><img class="imgnone" src="@if(!empty($a_image9)){{url('public/pages/'.$a_image9)}} @else {{url('/')}}/resources/images/service-6.jpg @endif" alt=""></div>
                            </div>
                           
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>
    <!-- About Mission -->
<section class="our-mission">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mission-block">
                        <div class="inner-box">
                            <div class="count">01.</div>
                            <h4><a href="javascript:void(0);">@if(!empty($a_head2)){{$a_head2}}@endif</a></h4>
                            <div class="text">@if(!empty($a_content2))<?php echo $a_content2; ?>@endif</div>
                            <!--ul class="list-style-six">
                                <li>Convallis ligula ligula gravida tristique.</li>
                                <li>Lobortis massa fringilla odio.</li>
                            </ul-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mission-block">
                        <div class="inner-box">
                            <div class="count">02.</div>
                            <h4><a href="javascript:void(0);">@if(!empty($a_head3)){{$a_head3}}@endif</a></h4>
                            <div class="text">@if(!empty($a_content3))<?php echo $a_content3; ?>@endif</div>
                        </div>
                    </div>
                </div>
				
                <div class="col-lg-4">
                    <div class="mission-block">
                        <div class="inner-box">
                            <div class="count">03.</div>
                            <h4><a href="javascript:void(0);">@if(!empty($a_head4)){{$a_head4}}@endif</a></h4>
                            <div class="text">@if(!empty($a_content4))<?php echo $a_content4; ?>@endif</div>
                        </div>
                    </div>
                </div>				
				
				
            </div>
        </div>
    </section>
<section class="indexprojectdetail text-center">
<div class="container-fluid">
		  

					<div class="wrapper">
					  <div class="row">
    <div class="col-lg-3 col-sm-12 col-12">
         <img src="{{url('/')}}/resources/images/counter_icon1.png" alt="">
      <h2 class="timer count-title count-number" @if(!empty($satisfied_students))data-to="{{$satisfied_students}}"@endif data-speed="1500"></h2>
       <p class="count-text ">Satisfied Students</p>
    </div>

    <div class="col-lg-3 col-sm-12 col-12">
         <img src="{{url('/')}}/resources/images/counter_icon2.png" alt="">
      <h2 class="timer count-title count-number" @if(!empty($online_tests))data-to="{{$online_tests}}"@endif data-speed="1500"></h2>
      <p class="count-text ">Online Tests</p>
    </div>

   <div class="col-lg-3 col-sm-12 col-12">
         <img src="{{url('/')}}/resources/images/counter_icon3.png" alt="">
      <h2 class="timer count-title count-number" @if(!empty($categories_no))data-to="{{$categories_no}}"@endif  data-speed="1500"></h2>
      <p class="count-text ">Categories</p>
    </div>

    <div class="col-lg-3 col-sm-12 col-12">
         <img src="{{url('/')}}/resources/images/counter_icon4.png" alt="">
      <h2 class="timer count-title count-number" @if(!empty($questions_no))data-to="{{$questions_no}}"@endif  data-speed="1500"></h2>
      <p class="count-text ">Questions</p>
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
                            <h3 class="all_section_heading">@if(!empty($a_head5)){{$a_head5}}@endif</h3>
                            <div><i class="mbri-magic-stick all_section_icons  text_custom font-weight-bold"></i></div>
                            @if(!empty($a_content5))<?php echo $a_content5; ?>@endif
                            <!--p class="text-muted pt-2 all_section_heading_details text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p-->
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="services_box bg-white text-center p-4 mt-3">
                            <div class="service_icon">
                                <img class="learning-icon" src="@if(!empty($a_image3)){{url('public/pages/'.$a_image3)}}@else {{url('/')}}/resources/images/3.png @endif">
                            </div>
                            <div class="service_content mt-4">
                                <h5 class="font-weight-bold">@if(!empty($a_head7)){{$a_head7}}@endif</h5>
                                     @if(!empty($a_content7))<?php echo $a_content7; ?>@endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services_box bg-white text-center p-4 mt-3">
                            <div class="service_icon">
                                <img class="learning-icon" src="@if(!empty($a_image4)){{url('public/pages/'.$a_image4)}}@else {{url('/')}}/resources/images/4.png @endif">
                            </div>
                            <div class="service_content mt-4">
                                <h5 class="font-weight-bold">@if(!empty($a_head8)){{$a_head8}}@endif</h5>
                                @if(!empty($a_content8))<?php echo $a_content8; ?>@endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services_box bg-white text-center p-4 mt-3">
                            <div class="service_icon">
                               <img class="learning-icon" src="@if(!empty($a_image5)){{url('public/pages/'.$a_image5)}}@else {{url('/')}}/resources/images/2.png @endif">
                            </div>
                            <div class="service_content mt-4">
                                <h5 class="font-weight-bold">@if(!empty($a_head9)){{$a_head9}}@endif</h5>
                                @if(!empty($a_content9))<?php echo $a_content9; ?>@endif
                            </div>
                        </div>
                    </div>
                </div>

              
				
				
            </div>
        </section>
    <!-- Our Team -->
<section class="what-we-do-three sp-two grey-bg">
        <div class="container">
		
						<div class="sec-title">
                    
                        <h4 class="font-weight-bold text-capitalize features_box_title_top">@if(!empty($a_head6)){{$a_head6}}@endif</h4>
						<div class="features_border_top"></div>
                    </div>
		
            <div class="row">

                <div class="col-lg-4">

			  <div class="card aboutflaticon text-center py-3 mt-2 mb-2" width="100%">
				<img class="card-img-top text-center" src="@if(!empty($a_image6)){{url('public/pages/'.$a_image6)}}@else {{url('/')}}/resources/images/maths2.png @endif" alt="Card image" width="100%">
				<div class="card-body">
				  <h2 class="card-title">@if(!empty($a_head10)){{$a_head10}}@endif</h2>
				  @if(!empty($a_content10))<?php echo $a_content10; ?>@endif
				</div>
			  </div>				
				
				
                </div>				
				
				
                <div class="col-lg-4">

  <div class="card aboutflaticon text-center py-3 mt-2 mb-2" width="100%">
    <img class="card-img-top text-center" src="@if(!empty($a_image7)){{url('public/pages/'.$a_image7)}}@else {{url('/')}}/resources/images/maths.png @endif" alt="Card image" width="100%">
    <div class="card-body">
      <h2 class="card-title">@if(!empty($a_head11)){{$a_head11}}@endif</h2>
      @if(!empty($a_content11))<?php echo $a_content11; ?>@endif
    </div>
  </div>				
				
				
                </div>
				
               <div class="col-lg-4">

  <div class="card aboutflaticon text-center py-3 mt-2 mb-2" width="400%">
    <img class="card-img-top text-center" src="@if(!empty($a_image8)){{url('public/pages/'.$a_image8)}}@else {{url('/')}}/resources/images/maths1.png @endif" alt="Card image" width="100%">
    <div class="card-body">
      <h2 class="card-title">@if(!empty($a_head12)){{$a_head12}}@endif</h2>
      @if(!empty($a_content12))<?php echo $a_content12; ?>@endif
    </div>
  </div>				
				
				
                </div>				
				
				
            </div>
        </div>
    </section>
		
@extends('layouts.footer')
      