
@include('admin/layouts.app2')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                            <li class="breadcrumb-item active">Total Test</li>
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
                                        <h4 class="card-title"><span class="lstick"></span>Total Test</h4>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
											    <th>S No.</th>
                                                <th>Date</th>
                                                <th>Total Questions</th>
                                                <th>Correct Answers</th>
                                                <th>Scores</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($test as $key=>$t)
                                            <?php $key +=1; ?>
                                            <tr>
											    <td>{{$key}}</td>
                                                <td><span class="badge badge-secondary">{{ date("d M Y", strtotime($t->test_date))}}</span></td>
                                                <td>{{$t->total_questions}}</td>
                                                <td>{{$t->correct_answers}}</td>
                                                <td><span class="badge badge-info"><?php 
                                                $tq=$t->total_questions;
                                                $ca=$t->correct_answers;
                                                if($tq != 0)
                                                {
                                                  $s=$ca/$tq * 100;
                                                  echo round($s).'%';   
                                                }else
                                                {
                                                   echo  '0%';  
                                                }
                                                
                                                
                                                
                                                ?></span></td>
                                                <td>
                                                    <a href="{{url('admin/user_test_details')}}/{{$t->user_id}}/{{$t->id}}/{{$t->test_id}}" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                           @empty
                                           <tr>
                                               <td >No records found</td>
                                                <td></td> <td></td> <td></td> <td></td> <td></td>
                                               </tr>
                                               @endforelse
                                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

              @include('admin/layouts.footer')