  @include('admin/layouts.app2')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                            <li class="breadcrumb-item active">Withdraw Request</li>
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
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body bg-info ">
                                <center class="m-t-30">
                                     @if(!empty($user[0]->profile))
                                                <img src="{{url('/')}}/public/profile/{{$user[0]->profile}}" alt="user"  class="img-circle" width="120"></span></td>											
                                                @else
                                                <img src="{{url('/')}}/uploads/Dummy-image.jpg" alt="user" width="120"  class="img-circle"></span></td>											
                                                @endif
                                   
                                    <h5 class="text-white font-weight-bold card-title m-t-10">{{$user[0]->name}} {{$user[0]->lname}}</h5>
                                    <h6 class="text-white card-subtitle">{{$user[0]->email}}</h6>
                            </center>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
					 <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <!--ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Details</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Questions</a> </li>
                            </ul-->
                            <!-- Tab panes -->
                         
                        <div class="tab-pane">
                        <div class="card-body pt-4 pb-3">
						<div class="container-fluid p-0">
						<div class="row">
                        <div class="col-lg-6 col-md-6 mt-1">						
                        <span class="font-weight-bold">Name</span>
						<h6 class="bg-light py-2">{{$user[0]->name}} {{$user[0]->lname}}</h6>
						</div>
                        <div class="col-lg-6 col-md-6 mt-1">						
                        <span class="font-weight-bold">Phone No</span>
						<h6 class="bg-light py-2">{{$user[0]->phone}}</h6>
						</div>
                        <div class="col-lg-6 col-md-6 mt-1">						
                        <span class="font-weight-bold">DOB</span>
						<h6 class="bg-light py-2">{{$user[0]->dob}}</h6>
						</div>
                        <div class="col-lg-6 col-md-6 mt-1">						
                        <span class="font-weight-bold">Age</span>
						<h6 class="bg-light py-2">{{$user[0]->age}}</h6>
						</div>						
                        <div class="col-lg-12 col-md-12 mt-1">						
                        <span class="font-weight-bold">Email Address</span>
						<h6 class="bg-light  py-2">{{$user[0]->email}}</h6>
						</div>
                        <div class="col-lg-12 mt-3">
                        <div class="card mb-0 ">
                        <div class="card-body p-0">
                        <h5 class="card-title font-weight-bold b-b pb-2">Withdraw Request</h5>
                        <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    
                                    <th>Wallet Amount</th>
                                    <th>Requested Amount</th>
                                    <th>Withdrawal Amount</th>
                                    <th>Status</th>
    							
                                </tr>
                            </thead>
                            <tbody class="bg-light">
                                <tr>
                                    <td class="">${{$walletamount}}</td>
                                    <td class="">${{$user[0]->requestamount}}</td>
                                    <td class="">${{$withdrwaamount}}</td>
                                    <td class=""><?php if($user[0]->requestatus=='0'){ ?> <span class="badge bg-danger">Pending</span>
                                            <?php } elseif($user[0]->requestatus=='1'){ ?>
                                            <span class="badge bg-danger">Decline</span>
                                           <?php  }else{?> <span class="badge bg-success">Approve</span> <?php } ?></td>
                                   
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>				           


</div>

                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <!--div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
<div class="box-inn-sp">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q1. <span>Where did the real Boston Tea Party take place?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Washington dc</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Boston</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Philadelphia</p>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q2. <span>You are participating in a race. You've just passed the second person. What position are you now in?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p>1st</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>2nd</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="correct">3rd <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>4th</p>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q3. <span>John digs a hole that is 2 yards wide, 3 yards long, and 1 yard deep. How many cubic feet of dirt are in it?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p>0</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="wrong">2
                                            <span class="ansreport">
                                                <i class="fa fa-times" aria-hidden="true"></i> Wrong Answer
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="correct">3 <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>5</p>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q4. <span>Where did the real Boston Tea Party take place?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Washington dc</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Boston</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Philadelphia</p>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q5. <span>John digs a hole that is 2 yards wide, 3 yards long, and 1 yard deep. How many cubic feet of dirt are in it?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p>0</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="correct">2 
                                            <span class="ansreport">
                                                <i class="fa fa-check" aria-hidden="true"></i> Correct Answer
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="wrong">3
                                            <span class="ansreport">
                                                <i class="fa fa-times" aria-hidden="true"></i> Wrong Answer
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>5</p>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q6. <span>Where did the real Boston Tea Party take place?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Washington dc</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Boston</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Philadelphia</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                                    </div>
                                </div-->
                          
                        </div>
                    </div>					
					
					
					
					
                    <!-- Column -->

                    </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
   
@include('admin/layouts.footer')