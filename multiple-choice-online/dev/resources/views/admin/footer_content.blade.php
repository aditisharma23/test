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
                            <li class="breadcrumb-item active">Footer</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>Content of Footer page</h4></div>
                           <?php $footer_title=''; $footer_content=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'footer_title')
      {
         $footer_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'footer_content')
      {
         $footer_content= $option->coulmn_value; 
      }
     
  }
  
 ?>

@endif
                                </div>
                                <form method="POST" data-next="" class="footercontent" data-action="{{url('admin/addoptions')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            
                                            <input type="hidden" name="pages" value="Footer Content">
                                            <div class="form-group"> 
                                                <label>Footer Title</label>
                                                 <input type="text" name="footer_title" style="color:black;" @if(!empty($footer_title)) value="{{$footer_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                        <div class="form-group">
                                               <label>Content of footer</label>
                                                <textarea  id="editor1" rows="10" cols="80">@if(!empty($footer_content)){{$footer_content}}@endif
                                                </textarea>
                                                <span class="editor1" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                           
                                            <div class="form-group">
                                              <button class="btn btn-info footercontentbtn">Save</button>  
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
                
            </script>