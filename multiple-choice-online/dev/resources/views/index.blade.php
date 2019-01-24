@include('layouts.header')

<?php  $c_title=''; $c_line2=''; $c_conno=''; $c_email=''; $c_address=''; $c_image='';  $a_head5=''; $a_content5=''; $a_head6=''; $a_image9=''; $a_image3=''; $a_head7=''; $a_content7='';
                           $a_image4=''; $a_head8=''; $a_content8=''; $a_image5=''; $a_head9=''; $a_content9=''; $h_image=''; $h_title=''; $h_head1=''; $h_image2=''; $h_content1=''; $h_head2=''; 
                           $h_content2=''; $h_head3=''; $h_content3=''; $h_head4=''; $h_content4=''; $h_head5=''; $h_content5=''; $h_head6=''; $h_image9=''; $h_image3=''; $h_head7=''; $h_content7='';
                           $h_image4=''; $h_head8=''; $h_content8=''; $h_image5=''; $h_head9=''; $h_content9=''; $h_image6=''; $h_head10=''; $h_content10=''; $h_image7=''; $h_head11=''; $h_content11=''; $h_image8=''; $h_head12=''; $h_content12=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'c_image')
      {
         $c_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_title')
      {
         $c_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_line2')
      {
         $c_line2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_conno')
      {
         $c_conno= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_email')
      {
         $c_email= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_address')
      {
         $c_address= $option->coulmn_value; 
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
       if($option->coulmn_name == 'h_image')
      {
         $h_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_title')
      {
         $h_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head1')
      {
         $h_head1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image2')
      {
         $h_image2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content1')
      {
         $h_content1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head2')
      {
         $h_head2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content2')
      {
         $h_content2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head3')
      {
         $h_head3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content3')
      {
         $h_content3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head4')
      {
         $h_head4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content4')
      {
         $h_content4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head5')
      {
         $h_head5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content5')
      {
         $h_content5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head6')
      {
         $a_head6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image9')
      {
         $h_image9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image3')
      {
         $h_image3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head7')
      {
         $h_head7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content7')
      {
         $h_content7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image4')
      {
         $h_image4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head8')
      {
         $h_head8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content8')
      {
         $h_content8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image5')
      {
         $h_image5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head9')
      {
         $h_head9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content9')
      {
         $h_content9= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'h_image6')
      {
         $h_image6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head10')
      {
         $h_head10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content10')
      {
         $h_content10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image7')
      {
         $h_image7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head11')
      {
         $h_head11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content11')
      {
         $h_content11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image8')
      {
         $h_image8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head12')
      {
         $h_head12= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content12')
      {
         $h_content12= $option->coulmn_value; 
      }
  }
  
 ?>

@endif


        <!-- Home Section Start--> 
        <section class="bg_home_lan_img full_height_100vh_home" id="home" style="background-image:url({{url('public/pages/'.$h_image)}});">
            <div class="bg_overlay_cover_on"></div>
            <div class="home_table_cell">
                <div class="home_table_cell_center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center">
                            
                                    <h1 clasimages/features_2.pngs="home_title text-white mx-auto text-capitalize mb-0 pt-4" style="color:#33d085;">@if(!empty($h_title)){{$h_title}}@endif</h1>
                                    <div class="home_text_details">
                                        <!--p class="home_subtitle mt-4 mx-auto mb-0"></p-->
                                        @if(!empty($h_content1))<?php echo $h_content1; ?>@endif
                                    </div>

                                    <div class="home_btn_manage mt-4 pt-3">
                                        <a href="{{url('register')}}" class="btn btn_custom btn-rounded mr-3">sign up for free</a>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Section End-->

        <!-- Features Start -->
        <section class="section_all" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_heading text-center">
                            <h3 class="all_section_heading">@if(!empty($h_head1)){{$h_head1}}@endif</h3>
                            <div><i class="mbri-android all_section_icons  text_custom font-weight-bold"></i></div>
                            <!--p class="text-muted pt-2 all_section_heading_details text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p-->
                            @if(!empty($h_content2))<?php echo $h_content2; ?>@endif
                        </div>
                    </div>
                </div>

                <div class="row mt-5 vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="features_box_content mt-3">
                            
                            <h4 class="font-weight-bold text-capitalize features_box_title_top">@if(!empty($h_head2)){{$h_head2}}@endif</h4>
                            <div class="features_border_top"></div>
                            @if(!empty($h_content3))<?php echo $h_content3; ?>@endif

                     
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img src="@if(!empty($h_image2)){{url('public/pages/'.$h_image2)}}@else {{url('/')}}/resources/images/features_2.png @endif" class="img-fluid mx-auto d-block" alt="" title="features-1">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img src="@if(!empty($h_image9)){{url('public/pages/'.$h_image9)}}@else {{url('/')}}/resources/images/features_1.png @endif" class="img-fluid mx-auto d-block" alt="" title="features-2">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features_box_content mt-3">
                            
                            <h4 class="font-weight-bold text-capitalize features_box_title_top">@if(!empty($h_head3)){{$h_head3}}@endif</h4>
                            <div class="features_border_top"></div>
                            @if(!empty($h_content4))<?php echo $h_content4; ?>@endif

                           

                        </div>
                    </div>

                </div>

                <div class="row mt-5 vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="features_box_content mt-3">
                            
                            <h4 class="font-weight-bold text-capitalize features_box_title_top">@if(!empty($h_head5)){{$h_head5}}@endif</h4>
                            <div class="features_border_top"></div>
                            @if(!empty($h_content5))<?php echo $h_content5; ?>@endif

                  
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img src="@if(!empty($h_image3)){{url('public/pages/'.$h_image3)}}@else {{url('/')}}/resources/images/features_3.png @endif" class="img-fluid mx-auto d-block" alt="" title="features-3">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features End -->

        <!-- Start Services -->
        <section class="section_all bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_heading  text-center">
                            <h3 class="all_section_heading">@if(!empty($a_head5)){{$a_head5}}@endif</h3>
                            <div><i class="mbri-magic-stick all_section_icons  text_custom font-weight-bold"></i></div>
                            @if(!empty($a_content5))<?php echo $a_content5; ?>@endif
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
        <!-- End Services -->

        <!-- Start Cta -->
        <section class="section_all bg_video_img_cover" style="background-image:url({{url('public/pages/'.$h_image4)}});">
            <div class="bg_overlay_cover_on"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="cta-info  text-center">
                            <h3 class=" text-white text-capitalize font-weight-bold">@if(!empty($h_head7)){{$h_head7}}@endif</h3>
                            @if(!empty($h_content7))<?php echo $h_content7; ?>@endif
                            <div class="text-center mt-4 pt-3">
                                <a href="{{url('login')}}" class="btn btn_custom">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta -->

        <!-- Video Section End -->

        <!-- Clients Start -->
     <section class="section_all bg-light" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_heading text-center">
                            <h3 class="all_section_heading">@if(!empty($h_head8)){{$h_head8}}@endif</h3>
                            <div><i class="mbri-user all_section_icons  text_custom font-weight-bold"></i></div>
                           @if(!empty($h_content8))<?php echo $h_content8; ?>@endif
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div id="owl-slider" class="owl-carousel mt-3">
                                @if(!empty($testimonials))
                                           
                                            @forelse($testimonials as $u)
										<div class="business_client_box  m-2 bg-white p-4">
											<div class="client_box_img mb-3">
												<img @if(!empty($u->image)) src="{{url('public/testimonials/'.$u->image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif  alt="" class="img-fluid rounded-circle mx-auto d-block">
											</div>
											<div class="clients_name text-center">
												<h5 class="mb-0 font-weight-bold"><?=  $u->name  ? $u->name : '-----';?></h5>
												<small class="text-muted"><?=$u->title;?></small>
											</div>
											<p class="pt-3 text-muted text-center mx-auto"><?=  $u->description  ? $u->description : '-----';?></p>
										</div>
										@empty
                                            No Records
										@endforelse
										 
										@endif

											
                        </div>
                    </div>
                </div>

            </div>
        </section>
        


        <section class="section_all" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_heading text-center">
                            <h3 class="all_section_heading">Get In Touch</h3>
                            <div><i class="mbri-pin all_section_icons  text_custom font-weight-bold"></i></div>
                            <p class="text-muted pt-2 all_section_heading_details text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-6">
                        <div class="business_form_custom bg-white">
                            <form class="contactus2" data-action="{{url('/contactus')}}" data-next="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject.." required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone number..." required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="message" id="message" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn_custom sbtconatct2" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="text-center mt-3">
                            <div class="contact_icon">
                                <i class="mbri-mobile2 text_custom"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Call Us</p>
                                <p class="text-muted">+9850043456</p>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <div class="contact_icon">
                                <i class="mbri-letter text_custom"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">For Support Enquiries</p>
                                <p class="text-muted">exmaple@gmail.com</p>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <div class="contact_icon">
                                <i class="mbri-pin text_custom"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Address</p>
                                <p class="text-muted">9592 Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us End -->
 @extends('layouts.footer')
      