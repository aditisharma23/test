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
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <!-- <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Profile</h3>
                </div> -->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <!--<div class="icn-edit">
                                    <img src="https://sites.indiit.com/multiple-choice-online/dev/public/profile/1545393908.jpg" style="cursor: pointer;" id="imgFileUpload" class="img-circle" width="100" height="100">
                                    <label class="icn-profl" for="profl">
                                        <i class="fa fa-edit"></i>
                                        <input type="file" id="profl" class="FileUpload1">
                                        <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                   </label>
                                </div>-->
                                
                                <center class="m-t-20 m-b-20"> 
                                    <div class="icn-edit">
                                        <img src="@if(!empty($admin->profile)){{url('public/profile/'.$admin->profile)}}" @else {{url('uploads/Dummy-image.jpg')}} @endif" style="cursor: pointer;" id="imgFileUpload" class="img-circle" width="100" height="100" />
                                        <label class="icn-profl" for="profl">
                                            <i class="fa fa-edit"></i>
                                            <input type="file" id="profl" class="FileUpload1">
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                        </label>
                                    </div>
                                    <h4 class="card-title m-t-10">@if(!empty($admin->name)){{$admin->name}}@endif @if(!empty($admin->lname)){{$admin->lname}}@endif</h4>
                                </center>
                            </div>
                            <!--div>
                                <hr> </div-->
                            <!--div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6>
                            </div-->
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Account Settings</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Update Password</a> </li>
                                <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li> -->
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <form class="editprofile" method="post" data-action="{{url('admin/editprofile')}}" data-next="{{url('admin/profile')}}">
                                            <div class="form-group">
                                            @csrf
                                                <label class="col-md-12">First Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="name" placeholder="Johnathan e.g." @if(!empty($admin->name)) value="{{$admin->name}}" @endif class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Last Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="lname" placeholder="Doe e.g." @if(!empty($admin->lname)) value="{{$admin->lname}}" @endif class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" placeholder="example@example.com" class="form-control form-control-line"  @if(!empty($admin->email)) value="{{$admin->email}}" @endif name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <!--div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div-->
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text"name="phone"  placeholder="123 456 7890" @if(!empty($admin->phone)) value="{{$admin->phone}}" @endif class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success font-14 editprofilebtn">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <form class="editpassword" data-action="{{url('admin/updatepassword')}}" data-next="">
                                            <div class="form-group">
                                                <label class="col-md-12">Current Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="oldpassword" value="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="newpassword" id="newpassword" value="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Confirm New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="conpassword" value="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success font-14 editpasswordbtn">Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                

            </div>
           
         @include('admin/layouts.footer')
   
    <script>
    $(function () {
        var fileupload = $(".FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
           fileupload.click();
       });
        fileupload.change(function () {
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                }else
                {
                       $('.uploaderror').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                   
                    var file_data = $(".FileUpload1").prop("files")[0]; // Getting the properties of file from file field
                     var form_data = new FormData(); // Creating object of FormData class
                 form_data.append("file", file_data)
                    
		      $.ajax({
		       headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
		       url : '{{url("/admin/uploadprofile")}}',
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
				
				{   var srcimg = "{{url('public/profile')}}";
				   $('#imgFileUpload').attr('src',srcimg+'/'+data.path);
				   $('.profile-pic').attr('src',srcimg+'/'+data.path);
				   $(".as1").html(data.message);
			    	$(".as1").show();
			    	setTimeout(function(){ $('.as1').hide(); }, 5000);
				}
		       }
                      });
                }
        });
    });
    </script>
  