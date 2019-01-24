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
                            <li class="breadcrumb-item active">Suggested Answer</li>
                        </ol>
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                    <!-- </div> -->
                </div>
                <?php //print_r($questions);
                ////print_r($questions11);?>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                            <div class="card-body userdatabtn-color">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Suggested Answer</h4>
                                    </div>
                                </div>
                                
                                <div class="box-inn-sp" id="product_container">
                 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover reporttable" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Correct Answer</th>
                                                    <th>Submitted Answer</th>
                                                    <th>Suggested Answer</th>
                                                     <th>View</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($suggested_answers) && count($suggested_answers) > 0)
											 @forelse($suggested_answers as $result)
                                                <tr>
                                                    <td>@if(!empty($result->question)){{$result->question}}@endif
                                                      </td>
													<td>@if($result->realanswer=='1')
													{{$result->optiona}}
													@elseif($result->realanswer=='2') 
													{{$result->optionb}}
													@elseif($result->realanswer=='3')
													{{$result->optionc}}
													@elseif($result->realanswer=='4') 
													{{$result->optiond}}
													@endif</td>
													<td>@if($result->myanswer=='1')
													{{$result->optiona}}
													@elseif($result->myanswer=='2') 
													{{$result->optionb}}
													@elseif($result->myanswer=='3')
													{{$result->optionc}}
													@elseif($result->myanswer=='4') 
													{{$result->optiond}}
													@endif</td>
													<td>
													    @if($result->suggested_answer=='1')
													{{$result->optiona}}
													@elseif($result->suggested_answer=='2') 
													{{$result->optionb}}
													@elseif($result->suggested_answer=='3')
													{{$result->optionc}}
													@elseif($result->suggested_answer=='4') 
													{{$result->optiond}}
													@endif
													</td>
                                                    <td><a href="{{url('/admin/suggestion_detail/'.$result->tid)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                                 </tr>
                                            @empty
                                            <tr>
                                            <td colspan="5" style="text-align:center;">No Record Found!!!</td>
                                            </tr>
                                            @endforelse
                                            @else
                                            <tr>
                                            <td colspan="5" style="text-align:center;">No Record Found!!!</td>
                                            </tr>
											@endif
                                              
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
             @include('admin/layouts.footer')
               