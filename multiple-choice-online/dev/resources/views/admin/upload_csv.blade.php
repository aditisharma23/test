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
                            <li class="breadcrumb-item active" >Upload CSV</li>

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
                                        
                                         <h4 class="card-title"><span class="lstick"></span>Upload CSV</h4>
                                         
                        
                                    </div>
                                </div>
                                
                                <span id="success_msg"></span>
                                <form method="POST" action="{{url('admin/uploadcsv')}}" name="uploadcsvs" class="mt-2 uploadcsvs" enctype="multipart/form-data"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          {{csrf_field()}}
                                            <div class="form-group mb-0">
                                                <label>Upload CSV</label>
                                            </div>
                                            <div class="form-group">
                                                
                                            <input type="file" name="csv" id="csv" class="form-control form-control-lg FileUpload1">
                                        	<p class="error uploaderror" id="uploadcsv" style="display:none;"></p> 
                                            </div>
                                            <div class="form-group mt-0">
                                              <button type="submit" class="btn btn-info upload" >Upload</button>  
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>

            </div>
           
           @include('admin/layouts.footer')
   <script>
   $('.uploadcsvs').submit(function(){
       if($('.FileUpload1').val() != '')
       {  
           
                var fileExtension = ['csv'];
                if ($.inArray($(".FileUpload1").val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                //alert("Only formats are allowed : "+fileExtension.join(', '));
                $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                $('.uploaderror').css({'color':'red'});
                $('.uploaderror').show();
                $('.upload').attr('disabled',true);
                }else
                {      $('.upload').attr('disabled',false);
                $('.uploaderror').html('');
                $('.uploaderror').hide();
                return true;
                
                }
       }else
       {        $('.uploaderror').html("This filed is required");
                $('.uploaderror').css({'color':'red'});
                $('.uploaderror').show();
                $('.upload').attr('disabled',true);
           return false;
       }
   });
    
        
        $(".FileUpload1").change(function () {
                var fileExtension = ['csv'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                     $('.uploaderror').show();
                     $('.upload').attr('disabled',true);
                }else
                {      $('.upload').attr('disabled',false);
                       $('.uploaderror').html('');
                       $('.uploaderror').hide();
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                           }
    });
    </script>
