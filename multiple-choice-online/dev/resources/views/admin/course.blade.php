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
                            <li class="breadcrumb-item active">Course</li>
                        </ol>
                        <a href="{{url('admin/addfilter_course')}}" class="btn btn-info btn-rounded float-right btn-sm m-0"><i class="mdi mdi-plus"></i> Add Course</a>
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
                                        <h4 class="card-title"><span class="lstick"></span>Courses</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       <tbody  id="htmlss" >
                                            @forelse($course as $c)
                                            <tr id="remove-{{$c->id}}">
                                            <td><?=$c->name;?></td>
                                            <td>
                                            <a href="{{url('admin/addfilter_course')}}/{{$c->id}}" class="btn-info mr-1"><i class="mdi mdi-pencil"></i></a>
                                            <a href="javascript:void(0);" data-url-param1="courses"
                data-url-param2="{{ $c->id }}" class="btn-danger delete_request"   data-toggle="modal" data-target="#delete_country">
                 <i class="mdi mdi-delete"></i></a>
                                             </td>
                                            </tr>
                                            @empty
                                            <tr>
                                            <td>No records found</td>
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
          @include('admin/layouts.footer')
