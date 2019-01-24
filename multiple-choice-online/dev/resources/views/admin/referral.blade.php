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
                            <li class="breadcrumb-item active">Referral</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>Content of Referral page</h4></div>
                           <?php $r_image=''; $r_title=''; $r_head1=''; $r_image2=''; $r_content1=''; $r_head2=''; 
                           $r_content2=''; $r_head3=''; $r_content3=''; $r_head4=''; $r_content4=''; $r_head5=''; $r_content5='';   ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'r_image')
      {
         $r_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_title')
      {
         $r_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head1')
      {
         $r_head1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_image2')
      {
         $r_image2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content1')
      {
         $r_content1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head2')
      {
         $r_head2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content2')
      {
         $r_content2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head3')
      {
         $r_head3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content3')
      {
         $r_content3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head4')
      {
         $r_head4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content4')
      {
         $r_content4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head5')
      {
         $r_head5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_content5')
      {
         $r_content5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_head6')
      {
         $r_head6= $option->coulmn_value; 
      }
      
  }
  
 ?>

@endif
                                </div>
                                <form method="POST" data-next="" class="addreferral" data-action="{{url('admin/addoptions')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            <div class="form-group">
                                                
                                            <label for="company_logo">Cover Image</label>
                                            <img class="d-block" id="imgFileUpload" alt="Select File" title="Select File" @if(!empty($r_image)) src="{{url('public/pages/'.$r_image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="r_image" @if(!empty($r_image)) value="{{$r_image}}" @endif class="logo">
                                            <input type="file" id="FileUpload1" name="profile" style="display: none" />
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <!--------------------1---------------------->
                                            <input type="hidden" name="pages" value="Referral Page">
                                            <div class="form-group"> 
                                                <label>Title</label>
                                                 <input type="text" name="r_title" style="color:black;" @if(!empty($r_title)) value="{{$r_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <!-------------2---------->
                                            <div class="form-group"> 
                                                <label>Section1 Text Heading</label>
                                                 <input type="text" name="r_head1" style="color:black;" @if(!empty($r_head1)) value="{{$r_head1}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Section1 Right Image</label>
                                            <img class="d-block" id="imgFileUpload2" alt="Select File" title="Select File" @if(!empty($r_image2)) src="{{url('public/pages/'.$r_image2)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="r_image2" @if(!empty($r_image2)) value="{{$r_image2}}" @endif class="logo2">
                                            <input type="file" id="FileUpload12" name="profile2" style="display: none" />
                                            <span class="uploaderror2" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Section1 Content</label>
                                                <textarea  id="editor1" rows="10" cols="80">@if(!empty($r_content1)){{$r_content1}}@endif
                                                </textarea>
                                                <span class="editor1" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            
                                            <!-----------3---------->
                                             <div class="form-group">
                                               <label>Text of Middel Section</label>
                                                 <input name="r_head2"  style="color:black;" @if(!empty($r_head2))value="{{$r_head2}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Middel Content</label>
                                                <textarea  id="editor2" rows="10" cols="80">@if(!empty($r_content2)){{$r_content2}}@endif
                                                </textarea>
                                                <span class="editor2" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            
                                         <!--------------------4------------------------->
                                            <div class="form-group">
                                               <label>Bottom Left Section Heading</label>
                                                 <input name="r_head3"  style="color:black;" @if(!empty($r_head3))value="{{$r_head3}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Bottom Left Section</label>
                                                <textarea  id="editor3" rows="10" cols="80">@if(!empty($r_content3)){{$r_content3}}@endif
                                                </textarea>
                                                <span class="editor3" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!--------------------5------------------------->
                                           
                                            <div class="form-group">
                                               <label>Bottom Right Section Heading</label>
                                                 <input name="r_head5"  style="color:black;" @if(!empty($r_head5))value="{{$r_head5}}"@endif class="form-control form-control-lg">
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                               <label>Text of Bottom Right Content</label>
                                                <textarea  id="editor4" rows="10" cols="80">@if(!empty($r_content4)){{$r_content4}}@endif
                                                </textarea>
                                                <span class="editor4" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            
                                            <div class="form-group">
                                              <button class="btn btn-info addreferralbtn">Save</button>  
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
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    if(fileupload.length > 1)
                  {
                  $('.remove_img').hide();
                   }
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                    $('.addreferralbtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload1").prop("files")[0]; // Getting the properties of file from file field
                     var form_data = new FormData(); // Creating object of FormData class
                 form_data.append("file", file_data)
                    
		      $.ajax({
		       headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
		       url : '{{url("/admin/uploadfile")}}',
		       type : 'POST',
		       data : form_data,
		       processData: false,  // tell jQuery not to process the data
		       contentType: false, 
		       dataType:'json', // tell jQuery not to set contentType
		       success : function(data) {
				if(data.erro==202)
				{
				$(".alert-danger").html(data.message);
				$(".alert-danger").show();
				 setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
				}
				if(data.erro==101)
				{   var srcimg = "{{url('public/pages')}}";
				   $('#imgFileUpload').attr('src',srcimg+'/'+data.path);	
				   $('.logo').val(data.path);
				}
		       }
                      });
                    $('.addreferralbtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload12");
        var image = $("#imgFileUpload2");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror2').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror2').css({'color':'red'});
                    $('.addreferralbtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror2').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload12").prop("files")[0]; // Getting the properties of file from file field
                     var form_data = new FormData(); // Creating object of FormData class
                 form_data.append("file", file_data)
                    
		      $.ajax({
		       headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
		       url : '{{url("/admin/uploadfile")}}',
		       type : 'POST',
		       data : form_data,
		       processData: false,  // tell jQuery not to process the data
		       contentType: false, 
		       dataType:'json', // tell jQuery not to set contentType
		       success : function(data) {
				if(data.erro==202)
				{
				$(".alert-danger").html(data.message);
				$(".alert-danger").show();
				 setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
				}
				if(data.erro==101)
				{   var srcimg = "{{url('public/pages')}}";
				   $('#imgFileUpload2').attr('src',srcimg+'/'+data.path);	
				   $('.logo2').val(data.path);
				}
		       }
                      });
                    $('.addreferralbtn').attr('disabled',false);
                }
        });
    });
  
</script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
                    CKEDITOR.replace( 'editor2' );
                    CKEDITOR.replace( 'editor3' );
                    CKEDITOR.replace( 'editor4' );
                   // CKEDITOR.replace( 'editor5' );
                    //CKEDITOR.replace( 'editor7' );
                    //CKEDITOR.replace( 'editor8' );
                   
            </script>