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
                            <li class="breadcrumb-item active">About Us</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>Content of About us page</h4></div>
                           <?php $a_image=''; $a_title=''; $a_head1=''; $a_image2=''; $a_content1=''; $a_head2=''; 
                           $a_content2=''; $a_head3=''; $a_content3=''; $a_head4=''; $a_content4=''; $a_head5=''; $a_content5=''; $a_head6=''; $a_image9=''; $a_image3=''; $a_head7=''; $a_content7='';
                           $a_image4=''; $a_head8=''; $a_content8=''; $a_image5=''; $a_head9=''; $a_content9=''; $a_image6=''; $a_head10=''; $a_content10=''; $a_image7=''; $a_head11=''; $a_content11='';
                           $a_image8=''; $a_head12=''; $a_content12=''; $satisfied_students=''; $online_tests=''; $categories_no=''; $questions_no=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'a_image')
      {
         $a_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_title')
      {
         $a_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head1')
      {
         $a_head1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image2')
      {
         $a_image2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content1')
      {
         $a_content1= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head2')
      {
         $a_head2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content2')
      {
         $a_content2= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head3')
      {
         $a_head3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content3')
      {
         $a_content3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head4')
      {
         $a_head4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content4')
      {
         $a_content4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head5')
      {
         $a_head5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content5')
      {
         $a_content5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head6')
      {
         $a_head6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image9')
      {
         $a_image9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image3')
      {
         $a_image3= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head7')
      {
         $a_head7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content7')
      {
         $a_content7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image4')
      {
         $a_image4= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head8')
      {
         $a_head8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content8')
      {
         $a_content8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image5')
      {
         $a_image5= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head9')
      {
         $a_head9= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content9')
      {
         $a_content9= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'a_image6')
      {
         $a_image6= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head10')
      {
         $a_head10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content10')
      {
         $a_content10= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image7')
      {
         $a_image7= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head11')
      {
         $a_head11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content11')
      {
         $a_content11= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_image8')
      {
         $a_image8= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_head12')
      {
         $a_head12= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'a_content12')
      {
         $a_content12= $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'satisfied_students')
      {
         $satisfied_students = $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'online_tests')
      {
         $online_tests = $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'categories_no')
      {
         $categories_no = $option->coulmn_value; 
      }
      
      if($option->coulmn_name == 'questions_no')
      {
         $questions_no = $option->coulmn_value; 
      }
      
      
      
      
      
  }
  
 ?>

@endif
                                </div>
                                <form method="POST" data-next="" class="addabout" data-action="{{url('admin/addoptions')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            <div class="form-group">
                                                
                                            <label for="company_logo">Cover Image</label>
                                            <img class="d-block" id="imgFileUpload" alt="Select File" title="Select File" @if(!empty($a_image)) src="{{url('public/pages/'.$a_image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image" @if(!empty($a_image)) value="{{$a_image}}" @endif class="logo">
                                            <input type="file" id="FileUpload1" name="profile" style="display: none" />
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <!------------------------------------------>
                                            <input type="hidden" name="pages" value="About Us">
                                            <div class="form-group"> 
                                                <label>About Us Title</label>
                                                 <input type="text" name="a_title" style="color:black;" @if(!empty($a_title)) value="{{$a_title}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group"> 
                                                <label>First Heading</label>
                                                 <input type="text" name="a_head1" style="color:black;" @if(!empty($a_head1)) value="{{$a_head1}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middel Right Image1</label>
                                            <img class="d-block" id="imgFileUpload2" alt="Select File" title="Select File" @if(!empty($a_image2)) src="{{url('public/pages/'.$a_image2)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image2" @if(!empty($a_image2)) value="{{$a_image2}}" @endif class="logo2">
                                            <input type="file" id="FileUpload12" name="profile2" style="display: none" />
                                            <span class="uploaderror2" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middel Right Image2</label>
                                            <img class="d-block" id="imgFileUpload9" alt="Select File" title="Select File" @if(!empty($a_image9)) src="{{url('public/pages/'.$a_image9)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image9" @if(!empty($a_image9)) value="{{$a_image9}}" @endif class="logo9">
                                            <input type="file" id="FileUpload19" name="profile9" style="display: none" />
                                            <span class="uploaderror9" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content1</label>
                                                <textarea  id="editor1" rows="10" cols="80">@if(!empty($a_content1)){{$a_content1}}@endif
                                                </textarea>
                                                <span class="editor1" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!--------------------------------------------->
                                            <div class="form-group">
                                               <label>Text of Heading Section 01</label>
                                                 <input name="a_head2"  style="color:black;" @if(!empty($a_head2))value="{{$a_head2}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Section 01</label>
                                                <textarea  id="editor2" rows="10" cols="80">@if(!empty($a_content2)){{$a_content2}}@endif
                                                </textarea>
                                                 <span class="editor2" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            
                                            <div class="form-group">
                                               <label>Text of Heading Section 02</label>
                                                 <input name="a_head3"  style="color:black;" @if(!empty($a_head3))value="{{$a_head3}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Section 02</label>
                                                <textarea  id="editor3" rows="10" cols="80">@if(!empty($a_content3)){{$a_content3}}@endif
                                                </textarea>
                                                <span class="editor3" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading Section 03</label>
                                                 <input name="a_head4"  style="color:black;" @if(!empty($a_head4))value="{{$a_head4}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Section 03</label>
                                                <textarea  id="editor4" rows="10" cols="80">@if(!empty($a_content4)){{$a_content4}}@endif
                                                </textarea>
                                                <span class="editor4" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!---------------------------------------------->
                                            <div class="form-group">
                                               <label>Satisfied Students</label>
                                                 <input name="satisfied_students"  style="color:black;" @if(!empty($satisfied_students))value="{{$satisfied_students}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Online Tests</label>
                                                 <input name="online_tests"  style="color:black;" @if(!empty($online_tests))value="{{$online_tests}}"@endif class="form-control form-control-lg">
                                            </div>
                                             <div class="form-group">
                                               <label>Categories</label>
                                                 <input name="categories_no"  style="color:black;" @if(!empty($categories_no))value="{{$categories_no}}"@endif class="form-control form-control-lg">
                                            </div>
                                           <div class="form-group">
                                               <label>Questions</label>
                                                 <input name="questions_no"  style="color:black;" @if(!empty($questions_no))value="{{$questions_no}}"@endif class="form-control form-control-lg">
                                            </div>
                                            
                                            <!---------------------------------------------->
                                            <div class="form-group">
                                               <label>Text of Heading Below Middle Section</label>
                                                 <input name="a_head5"  style="color:black;" @if(!empty($a_head5))value="{{$a_head5}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content Below Middle Section</label>
                                                <textarea  id="editor5" rows="10" cols="80">@if(!empty($a_content5)){{$a_content5}}@endif
                                                </textarea>
                                                <span class="editor5" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!--------------------------->
                                             
                                            <!--div class="form-group mb-0">
                                               <label>Text of Content Below Middle Section</label>
                                                <textarea  id="editor6" rows="10" cols="80">@if(!empty($a_content6)){{$a_content6}}@endif
                                                </textarea>
                                                <span class="editor6" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div-->
                                            <!--------------------------->
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middle below Section 01 Image</label>
                                            <img class="d-block" id="imgFileUpload3" alt="Select File" title="Select File" @if(!empty($a_image3)) src="{{url('public/pages/'.$a_image3)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image3" @if(!empty($a_image3)) value="{{$a_image3}}" @endif class="logo3">
                                            <input type="file" id="FileUpload13" name="profile3" style="display: none" />
                                            <span class="uploaderror3" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading Middle below Section 01</label>
                                                 <input name="a_head7"  style="color:black;" @if(!empty($a_head7))value="{{$a_head7}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Middle below Section 01</label>
                                                <textarea  id="editor7" rows="10" cols="80">@if(!empty($a_content7)){{$a_content7}}@endif
                                                </textarea>
                                                <span class="editor7" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middle below Section 02 Image</label>
                                            <img class="d-block" id="imgFileUpload4" alt="Select File" title="Select File" @if(!empty($a_image4)) src="{{url('public/pages/'.$a_image4)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image4" @if(!empty($a_image4)) value="{{$a_image4}}" @endif class="logo4">
                                            <input type="file" id="FileUpload14" name="profile4" style="display: none" />
                                            <span class="uploaderror4" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading of Middle below Section 02</label>
                                                 <input name="a_head8"  style="color:black;" @if(!empty($a_head8))value="{{$a_head8}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Middle below Section 02</label>
                                                <textarea  id="editor8" rows="10" cols="80">@if(!empty($a_content8)){{$a_content8}}@endif
                                                </textarea>
                                                <span class="editor8" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Middle below Section 03 Image</label>
                                            <img class="d-block" id="imgFileUpload5" alt="Select File" title="Select File" @if(!empty($a_image5)) src="{{url('public/pages/'.$a_image5)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image5" @if(!empty($a_image5)) value="{{$a_image5}}" @endif class="logo5">
                                            <input type="file" id="FileUpload15" name="profile5" style="display: none" />
                                            <span class="uploaderror5" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading of Middle below Section 03</label>
                                                 <input name="a_head9"  style="color:black;" @if(!empty($a_head9))value="{{$a_head9}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Middle below Section 03</label>
                                                <textarea  id="editor9" rows="10" cols="80">@if(!empty($a_content9)){{$a_content9}}@endif
                                                </textarea>
                                                <span class="editor9" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <!--------------------------------------->
                                            <div class="form-group">
                                               <label>Text of Heading Bottom Section</label>
                                                 <input name="a_head6"  style="color:black;" @if(!empty($a_head6))value="{{$a_head6}}"@endif class="form-control form-control-lg"></textarea>
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Bottom Section 01 Image</label>
                                            <img class="d-block" id="imgFileUpload6" alt="Select File" title="Select File" @if(!empty($a_image6)) src="{{url('public/pages/'.$a_image6)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image6" @if(!empty($a_image6)) value="{{$a_image6}}" @endif class="logo6">
                                            <input type="file" id="FileUpload16" name="profile6" style="display: none" />
                                            <span class="uploaderror6" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading Bottom Section 01</label>
                                                 <input name="a_head10"  style="color:black;" @if(!empty($a_head10))value="{{$a_head10}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Bottom Section 01</label>
                                                <textarea  id="editor10" rows="10" cols="80">@if(!empty($a_content10)){{$a_content10}}@endif
                                                </textarea>
                                                <span class="editor10" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Bottom Section 02 Image</label>
                                            <img class="d-block" id="imgFileUpload7" alt="Select File" title="Select File" @if(!empty($a_image7)) src="{{url('public/pages/'.$a_image7)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image7" @if(!empty($a_image7)) value="{{$a_image7}}" @endif class="logo7">
                                            <input type="file" id="FileUpload17" name="profile7" style="display: none" />
                                            <span class="uploaderror7" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading of Bottom  Section 02</label>
                                                 <input name="a_head11"  style="color:black;" @if(!empty($a_head11))value="{{$a_head11}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Bottom  Section 02</label>
                                                <textarea id="editor11" rows="10" cols="80">@if(!empty($a_content11)){{$a_content11}}@endif
                                                </textarea>
                                                <span class="editor11" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group" style="margin-top:5px;">
                                                
                                            <label for="company_logo">Bottom Section 03 Image</label>
                                            <img class="d-block" id="imgFileUpload8" alt="Select File" title="Select File" @if(!empty($a_image8)) src="{{url('public/pages/'.$a_image8)}}" @else src="{{url('resources/images/dummy.png')}}" @endif style="cursor: pointer" / height="150px;">
                                            <input type="hidden" name="a_image8" @if(!empty($a_image8)) value="{{$a_image8}}" @endif class="logo8">
                                            <input type="file" id="FileUpload18" name="profile8" style="display: none" />
                                            <span class="uploaderror8" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Heading of Bottom Section 03</label>
                                                 <input name="a_head12"  style="color:black;" @if(!empty($a_head12))value="{{$a_head12}}"@endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Bottom Section 03</label>
                                                <textarea  id="editor12" rows="10" cols="80">@if(!empty($a_content12)){{$a_content12}}@endif
                                                </textarea>
                                                <span class="editor12" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                            <div class="form-group">
                                              <button class="btn btn-info addaboutbtn">Save</button>  
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
                    $('.addaboutbtn').attr('disabled',true);
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
                    $('.addaboutbtn').attr('disabled',false);
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
                    $('.addaboutbtn').attr('disabled',true);
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
                    $('.addaboutbtn').attr('disabled',false);
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
                    $('.addaboutbtn').attr('disabled',true);
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
                    $('.addaboutbtn').attr('disabled',false);
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
                    $('.addaboutbtn').attr('disabled',true);
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
                    $('.addaboutbtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload15");
        var image = $("#imgFileUpload5");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror5').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror5').css({'color':'red'});
                    $('.addaboutbtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror5').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload15").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload5').attr('src',srcimg+'/'+data.path);	
				   $('.logo5').val(data.path);
				}
		       }
                      });
                    $('.addaboutbtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload16");
        var image = $("#imgFileUpload6");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror6').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror6').css({'color':'red'});
                    $('.addaboutbtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror6').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload16").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload6').attr('src',srcimg+'/'+data.path);	
				   $('.logo6').val(data.path);
				}
		       }
                      });
                    $('.addaboutbtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload17");
        var image = $("#imgFileUpload7");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror7').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror7').css({'color':'red'});
                    $('.addaboutbtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror7').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload17").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload7').attr('src',srcimg+'/'+data.path);	
				   $('.logo7').val(data.path);
				}
		       }
                      });
                    $('.addaboutbtn').attr('disabled',false);
                }
        });
    });
    $(function () {
        var fileupload = $("#FileUpload18");
        var image = $("#imgFileUpload8");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror8').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror8').css({'color':'red'});
                    $('.addaboutbtn').attr('disabled',true);
                }else
                {
                     $('.remove_img').show();
                       $('.uploaderror8').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $("#FileUpload18").prop("files")[0]; // Getting the properties of file from file field
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
				   $('#imgFileUpload8').attr('src',srcimg+'/'+data.path);	
				   $('.logo8').val(data.path);
				}
		       }
                      });
                    $('.addaboutbtn').attr('disabled',false);
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
                    $('.addaboutbtn').attr('disabled',true);
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
                    $('.addaboutbtn').attr('disabled',false);
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
                   // CKEDITOR.replace( 'editor6' );
                    CKEDITOR.replace( 'editor7' );
                    CKEDITOR.replace( 'editor8' );
                    CKEDITOR.replace( 'editor9' );
                    CKEDITOR.replace( 'editor10' );
                    CKEDITOR.replace( 'editor11' );
                    CKEDITOR.replace( 'editor12' );
               
           /*     CKEDITOR.replace( 'editor1', {
	customConfig: '/ckeditor_settings/config.js'
} );

 CKEDITOR.replace( 'editor2', {
	customConfig: '/ckeditor_settings/config.js'
} ); */
            </script>