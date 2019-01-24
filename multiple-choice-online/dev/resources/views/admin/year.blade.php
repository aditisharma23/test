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
                            <li class="breadcrumb-item active">Year</li>
                        </ol>
                        <a href="{{url('admin/addfilter_year')}}" class="btn btn-info btn-rounded float-right btn-sm m-0"><i class="mdi mdi-plus"></i> Add Year</a>
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
                                        <h4 class="card-title"><span class="lstick"></span>Year</h4>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Year</th>
                                          
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="htmlss" >
                                            @forelse($year as $y)
                                            <tr id="remove-{{$y->id}}">
                                            <td><?=$y->name;?></td>
                                            <td>
                <a href="{{url('admin/addfilter_year')}}/{{$y->id}}" class="btn-info mr-1"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript:void(0);" data-url-param1="years"
                data-url-param2="{{ $y->id }}" class=" btn-danger delete_request"   data-toggle="modal" data-target="#delete_country">
                 <i class="mdi mdi-delete"></i></a>
                                            </td>
                                            </tr>
                                          @empty
                                            <tr>
                                            <td>No records found</td>
                                            <td>
                                            </td>
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

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          @include('admin/layouts.footer')
<!-- delete modal -->
                                <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header p-0 border-0">
                                         
                                                <!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
                                            </div>
                                            <div class="modal-body text-center">
                                          
                                               <i class="mdi mdi-close"></i>
                                              <h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="#" class="btn btn-danger">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
  