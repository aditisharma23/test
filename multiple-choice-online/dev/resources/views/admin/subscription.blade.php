 @include('admin/layouts.app2')
 
 <div class="page-wrapper">
     

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">

                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Subscription</li>
                        </ol>
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                        <!-- </div> -->
                    </div>


                    <!-- ============================================================== -->
                    <!-- Projects of the month -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body userdatabtn-color">
                                    <div class="d-flex no-block">
                                        <div>
                                            <h4 class="card-title"><span class="lstick"></span>Subscriptions</h4>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-2 mb-3">
                    <div class="col-lg-4 ">
                        
                        <div class="mt-3 pricing_plan_box bg-white pos-w-delt">
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-uppercase mb-0">@if(!empty($subscription[0]->title)){{$subscription[0]->title}}@endif</h4>
                                    <div class="pricing_devider mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold mb-0"><sup>$</sup>@if($subscription[0]->price != ''){{$subscription[0]->price}}@endif/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features mb-0 phere">
                                @if(!empty($subscription[0]->description))<?php echo $subscription[0]->description; ?>@endif
                            </div>
                            <div class="text-center">
                                <a href="{{url('admin/usersubscription/1')}}" class="btn btn_custom">Edit Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-3 pricing_plan_box active pos-w-delt">
                            <div class="lable">
                                <h6 class="best mb-0 text-uppercase">Popular &nbsp;Plan</h6>
                            </div>
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-white text-uppercase mb-0">@if(!empty($subscription[1]->title)){{$subscription[1]->title}}@endif</h4>
                                    <div class="pricing_devider bg-white mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold text-white mb-0"><sup>$</sup>@if($subscription[1]->price != ''){{$subscription[1]->price}}@endif/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features text-white mb-0 phere">
                                @if(!empty($subscription[1]->description))<?php echo $subscription[1]->description; ?>@endif
                            </div>
                            <div class="list_price_features text-white mb-0 phere" style="padding:0px !important;">
                               <label>Referral Amount:- @if(!empty($subscription[1]->referrel_amount))<?php echo $subscription[1]->referrel_amount; ?>@endif    </label>
                            </div>
                            <div class="text-center">
                                <a href="{{url('admin/usersubscription/2')}}" class="btn  btn-white">Edit Plan</a>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-4">
                        <div class="mt-3 pricing_plan_box  active pos-w-delt" style="background:#8499f0;border:#8499f0">
                            <div class="lable">
                                <h6 class="best mb-0 text-uppercase"   style="color:#8499f0;">Popular &nbsp;Plan</h6>
                            </div>
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-white text-uppercase mb-0">@if(!empty($subscription[2]->title)){{$subscription[2]->title}}@endif</h4>
                                    <div class="pricing_devider bg-white mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold text-white mb-0"><sup>$</sup>@if($subscription[2]->price != ''){{$subscription[2]->price}}@endif/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features text-white mb-0 phere">
                                @if(!empty($subscription[2]->description))<?php echo $subscription[2]->description; ?>@endif
                            </div>
                              <div class="list_price_features text-white mb-0 phere" style="padding:0px !important;">
                               <label>Referral Amount:- @if(!empty($subscription[2]->referrel_amount))<?php echo $subscription[2]->referrel_amount; ?>@endif    </label>
                            </div>
                            <div class="text-center">
                                <a href="{{url('admin/usersubscription/3')}}" class="btn  btn-white" style="color:#8499f0;" >Edit Plan</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4">
                        <div class="mt-3 pricing_plan_box bg-white">
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-uppercase mb-0">Ultra</h4>
                                    <div class="pricing_devider mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold mb-0"><sub>$</sub>99/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features mb-0">
                                <p><i class="mdi mdi-check icon_success_color"></i> Additional Features</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Maximum Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>24/7 Pve Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Custom Domain</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Free Email Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Single User</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn_custom">Choose Plan</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
@include('admin/layouts.footer')
<script>
$( ".phere p" ).prepend( '<i class="mdi mdi-check icon_success_color"></i>' );
</script>