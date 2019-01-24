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
                            <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a></li>
                            <li class="breadcrumb-item">@if(!empty($c_details)) Edit Course @else Add Course @endif</li>

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
                                        <?php if(!empty($c_details)){?>
                                        <h4 class="card-title"><span class="lstick"></span>Edit Course</h4>
                                        <?php }else{ ?>
                                         <h4 class="card-title"><span class="lstick"></span>Add Course</h4>
                                        <?php } ?>
                                    </div>
                                </div>
                                
                                <span id="success_msg"></span>
                                <form method="POST" action="javascript:void(0);" name="addcourse" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          {{csrf_field()}}
                                            <div class="form-group mb-0">
                                                <label>Course Name</label>
                                            </div>
                                           <div class="form-group">
                                                <input type="hidden" name="id" id="id" value="<?php if(!empty($c_details)){echo $c_details[0]->id;}?>">
                                            <input type="text" name="name" id="c_name"
                                            value="<?php if(!empty($c_details)){echo $c_details[0]->name;}?>"
                                            
                                            class="form-control form-control-lg">
                                        	<p class="error" id="emailErr" style="display:none;">Course already exists.</p> 
                                            </div>

                                            <div class="form-group">
                                                <button href="javascript:avoid(0)" class="btn btn-info sbtconatct ">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    