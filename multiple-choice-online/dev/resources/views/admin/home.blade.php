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
                            <li class="breadcrumb-item active">Home</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>Content of Home page</h4></div>
                           <?php $h_image=''; $h_title=''; $h_head1=''; $h_image2=''; $h_content1=''; $h_head2=''; 
                           $h_content2=''; $h_head3=''; $h_content3=''; $h_head4=''; $h_content4=''; $h_head5=''; $h_content5=''; $h_head6=''; $h_image9=''; $h_image3=''; $h_head7=''; $h_content7='';
                           $h_image4=''; $h_head8=''; $h_content8=''; $h_image5=''; $h_head9=''; $h_content9=''; $h_image6=''; $h_head10=''; $h_content10=''; $h_image7=''; $h_head11=''; $h_content11=''; $h_image8=''; $h_head12=''; $h_content12='';  ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'h_image')
      {
         $h_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_title')
      {
         $h_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head1')
      {
         $h_head1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image2')
      {
         $h_image2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content1')
      {
         $h_content1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head2')
      {
         $h_head2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content2')
      {
         $h_content2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head3')
      {
         $h_head3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content3')
      {
         $h_content3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head4')
      {
         $h_head4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content4')
      {
         $h_content4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head5')
      {
         $h_head5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content5')
      {
         $h_content5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head6')
      {
         $a_head6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image9')
      {
         $h_image9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image3')
      {
         $h_image3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head7')
      {
         $h_head7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content7')
      {
         $h_content7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image4')
      {
         $h_image4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head8')
      {
         $h_head8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content8')
      {
         $h_content8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image5')
      {
         $h_image5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head9')
      {
         $h_head9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content9')
      {
         $h_content9= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'h_image6')
      {
         $h_image6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head10')
      {
         $h_head10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content10')
      {
         $h_content10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image7')
      {
         $h_image7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head11')
      {
         $h_head11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content11')
      {
         $h_content11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_image8')
      {
         $h_image8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_head12')
      {
         $h_head12= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'h_content12')
      {
         $h_content12= $option->coulmn_value; 
      }
      
      
      
      
      
  }
  
 ?>

@endif
                                </div>
                                <form method="POST" data-next="" class="addhome" data-action="{{url('admin/addoptions')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            <div class="form-group">
                                                
                                            <label for="company_logo">Cover Image</label>
                                            <img class="d-block" id="imgFileUpload" alt="Select File" title="Select File" @if(!empty($h_image)) src="{{url('public/pages/'.$h_image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="h_image" @if(!empty($h_image)) value="{{$h_image}}" @endif class="logo">
                                            <input type="file" id="FileUpload1" name="profile" style="display: none" />
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <!--------------------1---------------------->
                                            <input type="hidden" name="pages" value="Home Page">
                                            <div class="form-group"> 
                                                <label>Home Title</label>
                                                 <input type="text" name="h_title" style="color:black;" @if(!empty($h_title)) value="{{$h_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content1</label>
                                                <textarea  id="editor1" rows="10" cols="80">@if(!empty($h_content1)){{$h_content1}}@endif
                                                </textarea>
                                                <span class="editor1" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!-------------2---------->
                                            <div class="form-group"> 
                                                <label>Middel Text Heading</label>
                                                 <input type="text" name="h_head1" style="color:black;" @if(!empty($h_head1)) value="{{$h_head1}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Middel Content</label>
                                                <textarea  id="editor2" rows="10" cols="80">@if(!empty($h_content2)){{$h_content2}}@endif
                                                </textarea>
                                                <span class="editor2" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!-----------3(1)---------->
                                             <div class="form-group">
                                               <label>Text of Left Heading1</label>
                                                 <input name="h_head2"  style="color:black;" @if(!empty($h_head2))value="{{$h_head2}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middel Right Image1</label>
                                            <img class="d-block" id="imgFileUpload2" alt="Select File" title="Select File" @if(!empty($h_image2)) src="{{url('public/pages/'.$h_image2)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="h_image2" @if(!empty($h_image2)) value="{{$h_image2}}" @endif class="logo2">
                                            <input type="file" id="FileUpload12" name="profile2" style="display: none" />
                                            <span class="uploaderror2" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Left Content1</label>
                                                <textarea  id="editor3" rows="10" cols="80">@if(!empty($h_content3)){{$h_content3}}@endif
                                                </textarea>
                                                <span class="editor3" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!--------------------3(2)------------------------->
                                           
                                            <div class="form-group">
                                               <label>Text of Right Heading2</label>
                                                 <input name="h_head3"  style="color:black;" @if(!empty($h_head3))value="{{$h_head3}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middel left mage2</label>
                                            <img class="d-block" id="imgFileUpload9" alt="Select File" title="Select File" @if(!empty($h_image9)) src="{{url('public/pages/'.$h_image9)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="h_image9" @if(!empty($h_image9)) value="{{$h_image9}}" @endif class="logo9">
                                            <input type="file" id="FileUpload19" name="profile9" style="display: none" />
                                            <span class="uploaderror9" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                               <label>Text of Right Content2</label>
                                                <textarea  id="editor4" rows="10" cols="80">@if(!empty($h_content4)){{$h_content4}}@endif
                                                </textarea>
                                                <span class="editor4" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!---------------3(3)------------->
                                            <div class="form-group">
                                               <label>Text of Left Heading3</label>
                                                 <input name="h_head5"  style="color:black;" @if(!empty($h_head5))value="{{$h_head5}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middle below Section 01 Image</label>
                                            <img class="d-block" id="imgFileUpload3" alt="Select File" title="Select File" @if(!empty($h_image3)) src="{{url('public/pages/'.$h_image3)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="h_image3" @if(!empty($h_image3)) value="{{$h_image3}}" @endif class="logo3">
                                            <input type="file" id="FileUpload13" name="profile3" style="display: none" />
                                            <span class="uploaderror3" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                             <div class="form-group">
                                               <label>Text of Left Content3</label>
                                                <textarea  id="editor5" rows="10" cols="80">@if(!empty($h_content5)){{$h_content5}}@endif
                                                </textarea>
                                                <span class="editor5" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            
                                            <!-----------------Below Section------------------------->
                                            
                                            <div class="form-group">
                                               <label>Text of Heading below Section</label>
                                                 <input name="h_head7"  style="color:black;" @if(!empty($h_head7))value="{{$h_head7}}"@endif class="form-control form-control-lg">
                                            </div>
                                             <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Image of below Section</label>
                                            <img class="d-block" id="imgFileUpload4" alt="Select File" title="Select File" @if(!empty($h_image4)) src="{{url('public/pages/'.$h_image4)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="h_image4" @if(!empty($h_image4)) value="{{$h_image4}}" @endif class="logo4">
                                            <input type="file" id="FileUpload14" name="profile4" style="display: none" />
                                            <span class="uploaderror4" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Content of below Section</label>
                                                <textarea  id="editor7" rows="10" cols="80">@if(!empty($h_content7)){{$h_content7}}@endif
                                                </textarea>
                                                <span class="editor7" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                           <!-----------Testimonials -------->
                                            <div class="form-group">
                                               <label>Heading of Testimonials</label>
                                                 <input name="h_head8"  style="color:black;" @if(!empty($h_head8))value="{{$h_head8}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Content of Testimonials</label>
                                                <textarea  id="editor8" rows="10" cols="80">@if(!empty($h_content8)){{$h_content8}}@endif
                                                </textarea>
                                                <span class="editor8" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!--div class="form-group mb-0" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middle below Section 03 Image</label>
                                            <img id="imgFileUpload5" alt="Select File" title="Select File" @if(!empty($a_image5)) src="{{url('public/pages/'.$a_image5)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image5" @if(!empty($a_image5)) value="{{$a_image5}}" @endif class="logo5">
                                            <input type="file" id="FileUpload15" name="profile5" style="display: none" />
                                            <span class="uploaderror5" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Heading of Middle below Section 03</label>
                                                 <input name="a_head9"  style="color:black;" @if(!empty($a_head9))value="{{$a_head9}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Content of Middle below Section 03</label>
                                                <textarea  id="editor9" rows="10" cols="80">@if(!empty($a_content9)){{$a_content9}}@endif
                                                </textarea>
                                                <span class="editor9" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div-->
                                            <!--------------------------------------->
                                            <!--div class="form-group mb-0">
                                               <label>Text of Heading Bottom Section</label>
                                                 <input name="a_head6"  style="color:black;" @if(!empty($a_head6))value="{{$a_head6}}"@endif class="form-control form-control-lg"></textarea>
                                            </div>
                                            <div class="form-group mb-0" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Bottom Section 01 Image</label>
                                            <img id="imgFileUpload6" alt="Select File" title="Select File" @if(!empty($a_image6)) src="{{url('public/pages/'.$a_image6)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image6" @if(!empty($a_image6)) value="{{$a_image6}}" @endif class="logo6">
                                            <input type="file" id="FileUpload16" name="profile6" style="display: none" />
                                            <span class="uploaderror6" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Heading Bottom Section 01</label>
                                                 <input name="a_head10"  style="color:black;" @if(!empty($a_head10))value="{{$a_head10}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Content of Bottom Section 01</label>
                                                <textarea  id="editor10" rows="10" cols="80">@if(!empty($a_content10)){{$a_content10}}@endif
                                                </textarea>
                                                <span class="editor10" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group mb-0" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Bottom Section 02 Image</label>
                                            <img id="imgFileUpload7" alt="Select File" title="Select File" @if(!empty($a_image7)) src="{{url('public/pages/'.$a_image7)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image7" @if(!empty($a_image7)) value="{{$a_image7}}" @endif class="logo7">
                                            <input type="file" id="FileUpload17" name="profile7" style="display: none" />
                                            <span class="uploaderror7" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Heading of Bottom  Section 02</label>
                                                 <input name="a_head11"  style="color:black;" @if(!empty($a_head11))value="{{$a_head11}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Content of Bottom  Section 02</label>
                                                <textarea id="editor11" rows="10" cols="80">@if(!empty($a_content11)){{$a_content11}}@endif
                                                </textarea>
                                                <span class="editor11" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group mb-0" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Bottom Section 03 Image</label>
                                            <img id="imgFileUpload8" alt="Select File" title="Select File" @if(!empty($a_image8)) src="{{url('public/pages/'.$a_image8)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image8" @if(!empty($a_image8)) value="{{$a_image8}}" @endif class="logo8">
                                            <input type="file" id="FileUpload18" name="profile8" style="display: none" />
                                            <span class="uploaderror8" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Heading of Bottom Section 03</label>
                                                 <input name="a_head12"  style="color:black;" @if(!empty($a_head12))value="{{$a_head12}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group mb-0">
                                               <label>Text of Content of Bottom Section 03</label>
                                                <textarea  id="editor12" rows="10" cols="80">@if(!empty($a_content12)){{$a_content12}}@endif
                                                </textarea>
                                                <span class="editor12" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div-->
                                            <div class="form-group">
                                              <button class="btn btn-info addhomebtn">Save</button>  
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
                    $('.addhomebtn').attr('disabled',true);
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
                    $('.addhomebtn').attr('disabled',false);
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
                    $('.addhomebtn').attr('disabled',true);
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
                    $('.addhomebtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload13");
        var image = $("#imgFileUpload3");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror3').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror3').css({'color':'red'});
                    $('.addhomebtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror3').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload13").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload3').attr('src',srcimg+'/'+data.path);	
				   $('.logo3').val(data.path);
				}
		       }
                      });
                    $('.addhomebtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload14");
        var image = $("#imgFileUpload4");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror4').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror4').css({'color':'red'});
                    $('.addhomebtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror4').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload14").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload4').attr('src',srcimg+'/'+data.path);	
				   $('.logo4').val(data.path);
				}
		       }
                      });
                    $('.addhomebtn').attr('disabled',false);
                }
        });
    });
    
   
    
    
    $(function () {
        var fileupload = $("#FileUpload19");
        var image = $("#imgFileUpload9");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror9').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror9').css({'color':'red'});
                    $('.addhomebtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror9').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload19").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload9').attr('src',srcimg+'/'+data.path);	
				   $('.logo9').val(data.path);
				}
		       }
                      });
                    $('.addhomebtn').attr('disabled',false);
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
                    CKEDITOR.replace( 'editor5' );
                    CKEDITOR.replace( 'editor7' );
                    CKEDITOR.replace( 'editor8' );
                   
            </script>