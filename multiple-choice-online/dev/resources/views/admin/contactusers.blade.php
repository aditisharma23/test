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
                            <li class="breadcrumb-item active">Contact Us</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>Content of contact us page</h4></div>
                           <?php $c_title=''; $c_line2=''; $c_conno=''; $c_email=''; $c_address=''; $c_image=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'c_image')
      {
         $c_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_title')
      {
         $c_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_line2')
      {
         $c_line2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_conno')
      {
         $c_conno= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_email')
      {
         $c_email= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'c_address')
      {
         $c_address= $option->coulmn_value; 
      }
      
  }
  
 ?>

@endif
                                </div>
                                <form method="POST" data-next="" class="contactus" data-action="{{url('admin/addoptions')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            <div class="form-group">
                                                
                                            <label for="company_logo">Cover Image</label>
                                            <img class="d-block" id="imgFileUpload" alt="Select File" title="Select File" @if(!empty($c_image)) src="{{url('public/pages/'.$c_image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="c_image" @if(!empty($c_image)) value="{{$c_image}}" @endif class="logo">
                                            <input type="file" id="FileUpload1" name="profile" style="display: none" />
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <input type="hidden" name="pages" value="Contact Us">
                                            <div class="form-group"> 
                                                <label>Contact us Title</label>
                                                 <input type="text" name="c_title" style="color:black;" @if(!empty($c_title)) value="{{$c_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Contact Info</label>
                                                 <textarea name="c_line2"  style="color:black;" class="form-control form-control-lg">@if(!empty($c_line2)){{$c_line2}}@endif</textarea>
                                            </div>
                                            <div class="form-group">
                                               <label>Contact Number</label>
                                                 <input type="text" name="c_conno" style="color:black;"  @if(!empty($c_conno)) value="{{$c_conno}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Contact Email</label>
                                                 <input type="text" name="c_email"  style="color:black;" @if(!empty($c_email)) value="{{$c_email}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Contact Address</label>
                                                 <input type="text" name="c_address" style="color:black;" @if(!empty($c_address)) value="{{$c_address}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                              <button class="btn btn-info sbtconatct">Save</button>  
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
                    $('.sbtconatct').attr('disabled',true);
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
                    $('.sbtconatct').attr('disabled',false);
                }
        });
    });
</script>