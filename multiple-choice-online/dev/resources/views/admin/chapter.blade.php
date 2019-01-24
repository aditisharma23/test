@include('admin/layouts.app2')
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
                            <li class="breadcrumb-item active">Chapter</li>
                        </ol>
                        <a href="{{url('admin/addfilter_chapter')}}" class="btn btn-info btn-rounded float-right btn-sm m-0"><i class="mdi mdi-plus"></i> Add Chapter</a>
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
                                        <h4 class="card-title"><span class="lstick"></span>Chapter</h4>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="myTable1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                 <th>Course</th>
                                                  <th>Subject</th>
                                                <th>Chapter</th>
                                          
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="htmlss">
                                            @forelse($chapter as $c)
                        <tr id="remove-{{$c->id}}">
                        <td>{{App\course::getsupername($c->parent)}}</td>
                        <td>{{App\course::getname($c->parent)}}</td>
                        <td><?=$c->name;?></td>
                        <td>
                         <a href="{{url('admin/addfilter_chapter')}}/{{$c->id}}" class="btn-info mr-1"><i class="mdi mdi-pencil"></i></a>
                         <a href="javascript:void(0);" data-url-param1="courses"
                         data-url-param2="{{ $c->id }}" class=" btn-danger delete_request112"   data-toggle="modal" data-target="#delete_country112">
                         <i class="mdi mdi-delete"></i></a>
                        </td>
                        </tr>
                        @empty
                        <tr>
                        <td></td> 
                        <td></td>
                        <td>No records found</td>
                        <td></td>
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
                              