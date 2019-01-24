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
                            <li class="breadcrumb-item"><a href="{{url('admin/testimonials')}}">Testimonials</a></li>
                             <li class="breadcrumb-item active">@if(!empty($testimonials)) Edit Testimonials @else Add Testimonials @endif</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>@if(!empty($testimonials)) Edit Testimonials @else Add Testimonials @endif</h4></div>
                           
                                </div>
                                <form method="POST" data-next="{{url('admin/testimonials')}}" class="@if(!empty($testimonials)) addtestimon1 @else addtestimon @endif" data-action="{{url('admin/add_testimonial')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            <div class="form-group">
                                                
                                            <label for="company_logo">Image</label>
                                            <img class="d-block" id="imgFileUpload" alt="Select File" data-url="{{url('resources/images/dummy.png')}}" title="Select File" @if(!empty($testimonials)) @if(!empty($testimonials[0]->image)) src="{{url('public/testimonials/'.$testimonials[0]->image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="image" @if(!empty($a_image)) value="{{$a_image}}" @endif class="logo">
                                            <input type="file" id="FileUpload1" name="profile" style="display: none" />
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <input type="hidden" name="id" @if(!empty($testimonials)) @if(!empty($testimonials[0]->id)) value="{{$testimonials[0]->id}}" @endif @endif >
                                           <div class="questions-head">
                                               
                                            <div class="form-group">
                                               <label>Title</label>
                                                 <input type="text" name="title" @if(!empty($testimonials))  @if(!empty($testimonials[0]->title)) value="{{$testimonials[0]->title}}" @endif @endif  style="color:black;" class="form-control">
                                            </div>
                                            <div class="form-group">
                                               <label>Name</label>
                                                 <input type="text" name="name" @if(!empty($testimonials))  @if(!empty($testimonials[0]->name)) value="{{$testimonials[0]->name}}" @endif @endif  style="color:black;" class="form-control">
                                            </div>
                                            <div class="form-group">
                                               <label>Description</label>
                                                  <textarea name="description"  style="color:black;" class="form-control">@if(!empty($testimonials))@if(!empty($testimonials[0]->description)){{$testimonials[0]->description}}@endif @endif</textarea>
                                            </div>
                                            <div class="form-group">
                                               <label>Status</label>
                                                 <select name="status"  class="form-control">
                                                     <option value="1">Active</option>
                                                     <option value="0">Inactive</option>
                                                 </select>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                              <button class="btn btn-info  @if(!empty($testimonials)) addtestimonbtn1 @else addtestimonbtn @endif">Save</button>  
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
                    $('.addtestimonbtn').attr('disabled',true);
                    $('.addtestimonbtn1').attr('disabled',true);
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
		       url : '{{url("/admin/testemonialfile")}}',
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
				{   var srcimg = "{{url('public/testimonials')}}";
				   $('#imgFileUpload').attr('src',srcimg+'/'+data.path);	
				   $('.logo').val(data.path);
				}
		       }
                      });
                    $('.addtestimonbtn').attr('disabled',false);
                     $('.addtestimonbtn1').attr('disabled',false);
                }
        });
    });
</script>
