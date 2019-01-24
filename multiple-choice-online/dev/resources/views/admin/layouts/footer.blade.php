 <footer class="footer">© 2018 Multiple Choice Online. Design by Indi IT Solutions.</footer>
       
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- delete modal -->
        <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="approve_question" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="dataids2">
<input type="hidden" id="datastatus2">
<input type="hidden" id="vals">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p class="changetextss"></p>
                                             <ul>
											 <a href="javascript:void(0);" class="btn btn-secondary requestactionsscancel" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger requestactionss">Submit</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            
<!---Approve And disapprove ----->
<div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="approve_withdraw" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="dataids">
<input type="hidden" id="datastatus">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p class="changetext"></p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger requestaction">Submit</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                                
 <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delte_notification" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="dataids">
<input type="hidden" id="datastatus">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p class="changetext"></p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger requestaction2">Submit</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
<!---------------------------->
        
        
        
        
        
        
        
        
<div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete_country111" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="param111">
<input type="hidden" id="param222">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger delete_confirmed111">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
  
  <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete_country112" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="param112">
<input type="hidden" id="param223">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger delete_confirmed112">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
  
      
        
        <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="deleteked" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="delparamsubs1">
<input type="hidden" id="delparamsubs2">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
<div class="alert alert-success as12" style="display:none;"></div>
                                   @csrf       <h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger delete_confirmsubecribe">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                                
                                
                                
                                
<div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="deletek" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="delparam1">
<input type="hidden" id="delparam2">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
<div class="alert alert-success as12" style="display:none;"></div>
                                   @csrf       <h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger delete_confirm">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                                
                                              
<div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete_que" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="param11">
<input type="hidden" id="param22">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger delete_confirmed11">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                                <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete_country" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="param1">
<input type="hidden" id="param2">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger delete_confirmed">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
      
                              
    <script src="{{url('/')}}/resources/views/admin/js/jquery.min.js"></script>
     <script src="{{url('/')}}/resources/js/validation.js"></script>
    <script src="{{url('/')}}/resources/js/admin.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/popper.min.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/waves.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/sidebarmenu.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/custom.min.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/jquery.sparkline.min.js"></script>
    
    <script src="{{url('/')}}/resources/views/admin/js/d3.min.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/c3.min.js"></script>
    <!-- <script src="../assets/plugins/toast-master/js/jquery.toast.js"></script> -->
    <script src="{{url('/')}}/resources/views/admin/js/dashboard1.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/jQuery.style.switcher.js"></script>
     <script src="{{url('/')}}/resources/views/admin/assets/plugins/datatables/datatables.min.js"></script>
     <script src="{{url('/')}}/resources/js/searchable_selectbox.js"></script>
     
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script src="{{url('/')}}/resources/views/admin/js/chartist.min.js"></script>
    <script src="{{url('/')}}/resources/views/admin/js/chartist-plugin-tooltip.min.js"></script>
  <!--script src="https://cdn.ckeditor.com/4.11.1/basic/ckeditor.js"></script>
  <!--script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script-->
   <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
   <!--<script src="{{url('/')}}/resources/views/admin/assets/plugins/Chart.js/chartjs.init.js"></script>-->
   
    <script>
   /* $(document).ready(function(){
        $(".sidebartoggler").click(function(){
            $(".logo-icon,.dark-logo").toggle();
        });
    });*/
    </script>
 @include('admin/layouts.jquery')
 <script>
 $(document).on('click','.openmodels',function(){
        $('.clicktoggle').not(this).next().removeClass('show');
        $(this).next().toggleClass('show');
    });
    $(document).on('click','.clicktoggle',function(){
        $('.openmodels').not(this).next().removeClass('show');
        $(this).next().toggleClass('show');
    });

</script>
 <script>
 /*$(document).on('click','.openmodels',function(){
        $('.clicktoggle').not(this).next().removeClass('show');
        $(this).next().toggleClass('show');
    });
    $(document).on('click','.clicktoggle',function(){
        $('.openmodels').not(this).next().removeClass('show');
        $(this).next().toggleClass('show');
    });*/

</script>

</body>

