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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                    <!-- </div> -->
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card  indexicon bg-success">
                            <div class="card-body"><a href="{{url('admin/users')}}">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><!-- <span class="lstick m-r-20"></span> --><i class="mdi mdi-account-multiple text-white "></i></div>
                                    <div class="align-self-center">
                                    
                                        <h6 class="text-white m-t-10 m-b-0">Total Users</h6>
                                        <h2 class="text-white  m-t-0">{{$totaluser}}</h2></div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card indexicon bg-warning">
                            <div class="card-body"><a href="{{url('admin/questions')}}">
                                <div class="d-flex no-block text-white ">
                                    <div class="m-r-20 align-self-center"><!-- <span class="lstick m-r-20"></span> --><i class="fas fa-question"></i></div>
                                    <div class="align-self-center">
                                    
                                        <h6 class="text-white  m-t-10 m-b-0">Total Questions</h6>
                                        <h2 class="text-white  m-t-0">{{$totalque}}</h2></div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card indexicon bg-primary">
                            <div class="card-body"><a href="{{url('admin/reports/getpage')}}">
                                <div class="d-flex no-block text-white ">
                                    <div class="m-r-20 align-self-center"><!-- <span class="lstick m-r-20"></span> --><i class="
 far fa-file-excel"></i></div>
                                    <div class="align-self-center">
                                        <h6 class="text-white m-t-10 m-b-0">Attempted Test</h6>
                                        <h2 class="text-white  m-t-0">{{$totaltest}}</h2></div>
                                </div> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Recent Users</h4></div>

                                </div>
                                <div class="table-responsive m-t-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
												<th>Country</th>
												<th>DOB</th>
												<th>Age</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @forelse($users as $u)
                                            <tr>
                                                <td style="width:50px;"><a href="{{url('admin/user_details')}}/{{$u->id}}"><span class="round">
                                                     @if(!empty($u->profile))
                                                <img src="{{url('/')}}/public/profile/{{$u->profile}}"alt="user" width="50">											
                                                @else
                                                <img src="{{url('/')}}/uploads/Dummy-image.jpg"alt="user" width="50">											
                                                @endif
                                                    
                                                 </span></a></td>
                                                <td>
                                                <h6><a href="{{url('admin/user_details')}}/{{$u->id}}"><?=$u->name;?> <?=$u->lname;?></a></h6></td>
	                                            <td>{{ \App\country::getname($u->country)}}</td>
	                                            <td><?=  $u->dob  ? $u->dob : '-----';?></td>
                                                <td><?=  $u->age  ? $u->age : '-----';?></td> 												
                                                <td><?=  $u->email  ? $u->email : '-----';?></td>
                                                <td><?=  $u->phone  ? $u->phone : '-----';?></td>
                                                <td><?=  $u->address  ? $u->address : '-----';?></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                  <td>No Records</td>
                                            </tr>
                                            @endforelse
                                            
                                            
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Recent Users</h3>
                                        <h6 class="card-subtitle">Year 2018</h6></div>
                                    <div class="ml-auto">
                                        <ul class="list-inline">
                                            <li>
                                                <div class="d-flex">
                                                    <i class="fa fa-circle font-10 m-r-10 text-primary m-t-10"></i>
                                                    <div>
                                                        <h2 class="m-b-0">10368</h2>
                                                        <h6 class="text-muted">Earning</h6></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <i class="fa fa-circle font-10 m-r-10 text-info m-t-10"></i>
                                                    <div>
                                                        <h2 class="m-b-0">12659</h2>
                                                        <h6 class="text-muted">Expense</h6></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <i class="fa fa-circle font-10 m-r-10 text-muted m-t-10"></i>
                                                    <div>
                                                        <h2 class="m-b-0">15478</h2>
                                                        <h6 class="text-muted">Sales</h6></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="sales-overview" class="p-relative" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div-->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

         

@include('admin/layouts.footer')