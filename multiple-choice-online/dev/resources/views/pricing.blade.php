@include('layouts.header')

<?php  $pricing_title=''; $pricing_heading=''; $pricing_content=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'pricing_title')
      {
         $pricing_title= $option->coulmn_value; 
      }
       if($option->coulmn_name == 'pricing_heading')
      {
         $pricing_heading= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'pricing_content')
      {
         $pricing_content= $option->coulmn_value; 
      }
     
  }
  
 ?>

@endif	
<style>
   #pheres2 p i {
    color: #fff;
    margin-right: 12px;
}
.pricing_plan_box .lable {
    background: #fff;
    padding: 8px 0;
    text-align: center;
    width: 200px;
    position: absolute;
    top: 45px;
    right: -40px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.pricing_plan_box .lable h6 {
    color: #33d085;
    font-size: 10px;
    font-weight: bold;
}
</style>
    <div class="contactslider slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">{{$pricing_title}}</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/pricing')}}" style="color:white">{{$pricing_title}}</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		

<section class="pricing-section section_all bg-light" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_heading text-center">
                            <h3 class="all_section_heading">{{$pricing_heading}}</h3>
                            <div><i class="mbri-image-slider all_section_icons  text_custom font-weight-bold"></i></div>
<!--                            <p class="text-muted pt-2 all_section_heading_details text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
-->                          <?php echo $pricing_content; ?>
                        </div>


                <div class="row mt-5 ">
                    
                    @if(!empty($subscription))
                                      @foreach($subscription as $subscrip)
                                      <div class="col-lg-4 col-md-6 col-sm-6 col-12" >
                        <div class="mt-3 pricing_plan_box bg-white" @if($subscrip->id == '3') style="background:#8499f0 !important;border:#8499f0 !important; color:white !important;" @endif @if($subscrip->id == '2') style="background:#33d085 !important;border:#33d085 !important; color:white !important;" @endif >
                           @if($subscrip->id != '1')
                            <div class="lable">
                                <h6 class="best mb-0 text-uppercase" @if($subscrip->id == '3') style="color:#8499f0 !important;" @endif @if($subscrip->id == '2') style="color:#33d085 !important;" @endif >Popular &nbsp;Plan</h6>
                            </div>
                            @endif
                            <div class="pricing_header text-center" >
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-uppercase mb-0">@if(!empty($subscrip->title)){{$subscrip->title}}@endif</h4>
                                    <div class="pricing_devider mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold mb-0"><sub>$</sub>@if($subscrip->price != ''){{$subscrip->price}}@endif/<span>@if($subscrip->month == '12') Year @elseif($subscrip->month == '0') 2H @else Month @endif </span></h3>
                                </div>
                            </div>
                            <div class="list_price_features mb-0 phere" @if($subscrip->id != '1') id="pheres2" @endif>
                               @if(!empty($subscrip->description))<?php echo $subscrip->description; ?>@endif

                            </div>
                            @if(empty($tokenss))
                            <div class="text-center">
                                 <a href="{{url('/register')}}"  data-pid="<?php echo $subscrip->id; ?>" class="signup_today btn btn_custom   hoverpricing" @if($subscrip->id == '3') style="border: 2px solid transparent; color: #8499f0; background: #fff;transition: 0.3s;" @endif @if($subscrip->id == '2') style="border: 2px solid transparent; color: #33d085; background: #fff;transition: 0.3s;" @endif >Signup Today!</a>
                            </div>
                            @endif
                            @if(!empty($tokenss))
                            <div class="text-center">
                                 <a href="{{url('/getuserregister/'.$subscrip->id.'/'.$tokenss)}}"  data-pid="<?php echo $subscrip->id; ?>" class="signup_today btn btn_custom   hoverpricing" @if($subscrip->id == '3') style="border: 2px solid transparent; color: #8499f0; background: #fff;transition: 0.3s;" @endif @if($subscrip->id == '2') style="border: 2px solid transparent; color: #33d085; background: #fff;transition: 0.3s;" @endif >Signup Today!</a>
                            </div>
                            @endif
                        </div>
                    </div>
                                        @endforeach
                                      @else
                                      @endif
                    
                    
                    
                    
                    
                    
                    
                   <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="mt-3 pricing_plan_box bg-white">
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-uppercase mb-0">@if(!empty($subscription[0]->title)){{$subscription[0]->title}}@endif</h4>
                                    <div class="pricing_devider mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold mb-0"><sub>$</sub>@if($subscription[0]->price != ''){{$subscription[0]->price}}@endif/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features mb-0 phere">
                               @if(!empty($subscription[0]->description))<?php echo $subscription[0]->description; ?>@endif

                            </div>
                            <div class="text-center">
                                 <a href="{{url('/register')}}"  data-pid="<?php echo $subscription[0]->id; ?>" class="signup_today btn btn_custom   hoverpricing">Signup Today!</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                        <div class="mt-3 pricing_plan_box active">
                            <div class="lable">
                                <h6 class="best mb-0 text-uppercase">Popular &nbsp;Plan</h6>
                            </div>
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-white text-uppercase mb-0">@if(!empty($subscription[0]->title)){{$subscription[0]->title}}@endif</h4>
                                    <div class="pricing_devider bg-white mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold text-white mb-0"><sub>$</sub>@if($subscription[1]->price != ''){{$subscription[1]->price}}@endif/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features text-white mb-0 phere">
                               @if(!empty($subscription[1]->description))<?php echo $subscription[1]->description; ?>@endif

                            </div>
                            <div class="text-center">
                                <a href="{{url('/register')}}"  data-pid="<?php echo $subscription[1]->id; ?>"  class="btn btn_outline_custom signup_today">Signup Today!</a>
                            </div>
                        </div>
                    </div>-->
                    </div>
                </div>

                </div>
            </div>
        </section>
	
     @extends('layouts.footer')
   
      