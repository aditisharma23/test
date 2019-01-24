@include('layouts.header')

 <?php  $c_title=''; $c_line2=''; $c_conno=''; $c_email=''; $c_address=''; $c_image=''; ?>
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
      
  }
  
 ?>

@endif
		
    <div class="contactslider slider-area" style="background-image: url({{url('public/pages/'.$c_image)}});">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" @if(!empty($c_image)) style="background-image: {{url('public/pages/'.$c_image)}};" @else style="background-image: url(img/bg/others_bg.jpg);" @endif >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">@if(!empty($c_title)) {{$c_title}} @endif</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/contact')}}" style="color:white">@if(!empty($c_title)) {{$c_title}} @endif</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		
		
     <div class="advisors-area  pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="contact-info-text">
                        <div class="section-title mb-20">
                            <div class="section-title-heading mb-10">
                                <h1>Contact Info</h1>
                            </div>
                            @if(!empty($c_line2)) 
                            <div class="section-title-para">
                                <p>{{$c_line2}}</p>
                            </div>
                             @endif
                        </div>
                    </div>
					
					

					
					
                    <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                   <i class="mbri-mobile2 text_custom"></i>
                                </div>
                                  @if(!empty($c_conno)) 
                                <div class="contact-text">
                                    <h5>Call Us</h5>
                                    <span>+{{$c_conno}}</span>
                                </div>
                                @endif
                            </li>
                            <li>
                                <div class="contact-icon">
                                  <i class="mbri-letter text_custom"></i>
                                </div>
                                @if(!empty($c_email)) 
                                <div class="contact-text">
                                    <h5>Email Us</h5>
                                    <span>{{$c_email}}</span>
                                </div>
                                @endif
                            </li>
                            <li>
                                <div class="contact-icon">
                                  <i class="mbri-pin text_custom"></i>
                                </div>
                                 @if(!empty($c_address)) 
                                <div class="contact-text">
                                    <h5>Location</h5>
                                    <span>{{$c_address}}</span>
                                </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="events-details-form faq-area-form mb-30 p-0">
                        <form class="contactus" data-action="{{url('/contactus')}}" data-next="">
                            @csrf
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="events-form-title mb-25">
                                        <h2>Get In Touch</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Name :" name="name" type="text" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Email :" name="email" type="email">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Subject :" name="subject" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Phone :" name="phone" type="text">
                                </div>
                                <div class="col-xl-12">
                                    <textarea cols="30" rows="10" name="message" placeholder="Message :"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <div class="faq-form-btn events-form-btn">
                                        <button class="btn m-0 sbtconatct">submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27443.76230988292!2d76.67573418955078!3d30.705176750000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1539340492305" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->
<?php $address= $c_address; 
echo '<iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
?>
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.545766818729!2d-113.55016268428784!3d53.530168780017966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02191dfba9c3d%3A0x75ce63ec3f7d8504!2s{{str_replace(' ','+',$c_address)}}!5e0!3m2!1sen!2sin!4v1542713380098" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
<!---->    <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.545766818729!2d-113.55016268428784!3d53.530168780017966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02191dfba9c3d%3A0x75ce63ec3f7d8504!2s{{str_replace(' ','+',$c_address)}}!5e0!3m2!1sen!2sin!4v1542713380098" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
-->
       @extends('layouts.footer')
       
      