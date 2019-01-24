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
                            <li class="breadcrumb-item active">Login/Register</li>
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
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                           <h4 class="card-title mb-4"><span class="lstick"></span>Login/Register Of Content</h4></div>
                           <?php $lr_title=''; $rl_title=''; $l_side_content=''; $r_side_content=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'lr_title')
      {
         $lr_title= $option->coulmn_value; 
      }
       if($option->coulmn_name == 'rl_title')
      {
         $rl_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'l_side_content')
      {
         $l_side_content= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_side_content')
      {
         $r_side_content = $option->coulmn_value; 
      }
     
  }
  
 ?>

@endif
                                </div>
                                <form method="POST" data-next="" class="loginscontent" data-action="{{url('admin/addoptions')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            
                                            <input type="hidden" name="pages" value="Login/Register Content">
                                            <div class="form-group"> 
                                                <label>Login Title</label>
                                                 <input type="text" name="lr_title" style="color:black;" @if(!empty($lr_title)) value="{{$lr_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group"> 
                                                <label>Register Title</label>
                                                 <input type="text" name="rl_title" style="color:black;" @if(!empty($rl_title)) value="{{$rl_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                        <div class="form-group">
                                               <label>Login Content</label>
                                                <textarea  id="editor1" rows="10" cols="80">@if(!empty($l_side_content)){{$l_side_content}}@endif
                                                </textarea>
                                                <span class="editor1" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group">
                                               <label>Register Content</label>
                                                <textarea  id="editor2" rows="10" cols="80">@if(!empty($r_side_content)){{$r_side_content}}@endif
                                                </textarea>
                                                <span class="editor2" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                           
                                            <div class="form-group">
                                              <button class="btn btn-info loginregistercontentbtn">Save</button>  
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
               
                    CKEDITOR.replace( 'editor1' );
                    CKEDITOR.replace( 'editor2' );
                
            </script>