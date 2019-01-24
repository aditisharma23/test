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
                        <li class="breadcrumb-item active">@if(!empty($users[0]->id)) Edit user @else Add user @endif</li>
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
                                <center class="m-t-20 m-b-20"> <img src="@if(!empty($users[0]->profile)){{url('public/profile/'.$users[0]->profile)}}" @else {{url('uploads/Dummy-image.jpg')}} @endif" style="cursor: pointer;" id="imgFileUpload" class="img-circle" width="100" height="100" />
                                            <input type="file" id="profl" class="FileUpload1" style="display:none;">
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                    <h4 class="card-title m-t-10">@if(!empty($users[0]->name)){{$users[0]->name}}@endif @if(!empty($users[0]->lname)){{$users[0]->lname}}@endif</h4>
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
                                <!--li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Update Password</a> </li>-->
                                <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li> -->
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <form methode="post" class="profileupdate" data-action="{{url('admin/userprofile')}}" data-next="{{url('admin/users')}}">
                                                        @csrf
                                                        <div class="row">
                                                          <div class="form-group col-lg-6">
                                                            <label for="fstname">First Name</label>
                                                            <input class="form-control" name="name" id="fstname" @if(!empty($users[0]->name))value="{{$users[0]->name}}"@endif type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="lstname">Last Name</label>
                                                            <input class="form-control" name="lname" id="lstname" @if(!empty($users[0]->lname))value="{{$users[0]->lname}}"@endif type="text">
                                                        </div>
                                                        <input type="hidden" name="id" @if(!empty($users[0]->id))value="{{$users[0]->id}}"@endif >
                                                        <input type="hidden" name="profile" class="profiless" @if(!empty($users[0]->profile))value="{{$users[0]->profile}}"@endif >
                                                        </div>
                                                        <div class="row">
                                                        <div class="form-group col-lg-6">
                                                            <label for="phone">Phone No</label>
                                                            <input class="form-control" name="phone" id="phone" @if(!empty($users[0]->phone))value="{{$users[0]->phone}}"@endif type="text">
                                                        </div>	

                                                        <div class="form-group col-lg-6">
                                                            <label for="email">Email Address</label>
                                                            <input class="form-control" name="email" id="email" @if(!empty($users[0]->email))value="{{$users[0]->email}}"@endif type="email">
                                                        </div>
                                                        </div>
                                                        <div class="row">
                
                                                        <div class="form-group col-lg-6">
                                                            <label for="address">Country</label>
                                                            <select  class="form-control js-example-basic-single countryselect cat_country" id="Country" name="country">
                                                               <option value="">Select Country</option>
                                                                @if(!empty($countries))
                                                                @foreach($countries as $country)
                                                                <option @if(!empty($users[0]->country)) @if($users[0]->country==$country->id) selected @endif @endif value="{{$country->id}}">{{$country->name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                    
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="state">State</label>
                                                            <select  class="form-control js-example-basic-single state_country" id="statelist" name="state">
                                                               <option value="">State/Province</option>
                                                                @if(!empty($states) && $users[0]->state!='0')
                                                                @foreach($states as $state)
                                                                <option @if($users[0]->state==$state->id) selected @endif value="{{$state->id}}">{{$state->name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                    
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="form-group col-lg-6">
                                                            <label for="address">Address</label>
                                                            <input class="form-control" id="address" name="address" @if(!empty($users[0]->address))value="{{$users[0]->address}}"@endif type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="newpassword">New Password</label>
                                                            <input class="form-control" name="newpassword" id="newpassword" type="password" @if(empty($users[0]->id)) required @endif>
                                                        </div>
                                                        </div>
                                                        <div class="row">

                                                        <div class="form-group col-lg-6">
                                                            <label for="conpassword">Confirm Password</label>
                                                            <input class="form-control" name="conpassword" id="conpassword" type="password" @if(empty($users[0]->id)) required @endif>
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                            <input class="btn btn-success profileupdatebtn" type="submit" value="Submit">
                                                        </div>
                                                        </div>
                                                    </form>
                                    </div>
                                </div>
                                <!--second tab-->
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                

            </div>
           
         @include('admin/layouts.footer')
   
    <script>
    
    $(document).ready(function() {
    $('.js-example-basic-single').select2({width: '100%',});  
    });
           
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
		       url : '{{url("/admin/uploadprofiless")}}',
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
				$('.profiless').val(data.path);
				   $('#imgFileUpload').attr('src',srcimg+'/'+data.path);
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
  