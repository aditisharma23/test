
         @include('admin/layouts.app2')
         <style>
             [type="radio"]:disabled:checked + label:after
             {
             background-color: #26a69a !important;
             }
            .js-example-basic-single{
                width: 100%;
            } 
             </style>
             <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  float:left;
}
.switch input {     
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 16px 16px 16px 16px;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
span.slider {
    border-radius: 16px 16px 16px 16px;
}
</style>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                         <button type="button" onclick="location.href='{{url('admin/adduser')}}';" class="btn btn-info btn-rounded float-right btn-sm m-0" ><i class="mdi mdi-plus"></i> Add User</button>
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
                            <div class="card-body userdatabtn-color">
                                
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Users</h4>
                                    </div>
                                </div>
                            
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
											    <th>Images</th>
                                                <th>Name</th>
												<th>Country</th>
												<th>DOB</th>
                                                <th>Age</th>  												
                                                <th>Email</th>
                                                <th>Total Test</th>
                                                <th>Total Questions</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($users as $u)
                                            <tr id="remove-{{$u->id}}">
                                                <td style="width:50px;"><span class="round">
                                                @if(!empty($u->profile))
                                                <img src="{{url('/')}}/public/profile/{{$u->profile}}" alt="user" width="50"></span></td>											
                                                @else
                                                <img src="{{url('/')}}/uploads/Dummy-image.jpg" alt="user" width="50"></span></td>											
                                                @endif
                                                <td>{{$u->name}} {{$u->lname}}</td>
												<td>{{$u->country}}</td>
	                                            <td>{{$u->dob}}</td>
                                                <td>{{$u->age}}</td>    												
                                                <td>{{$u->email}}</td>
                                                <td><a href="{{url('admin/total_test')}}/{{$u->id}}">{{App\Test::gettotaltest($u->id)}}</a></td>
                                                <td><a href="{{url('admin/total_questions/'.$u->id)}}">{{App\Test::gettotalque($u->id)}}</a></td>
                                               <td>
                                                <label class="switch">
                                                  <input type="checkbox" data-id="{{$u->id}}" data-uid="{{$u->id}}"  class="checkb" @if($u->status=='1') checked  @endif >
                                                  <span class="slider"></span>
                                                </label>
                                                            </td>
                                                <td>
                                                    <a href="{{url('admin/edituser')}}/{{$u->id}}" class="btn-info mr-1 " >
                                        <i class="mdi mdi-pencil"></i></a>
                                                    <a href="{{url('admin/user_details')}}/{{$u->id}}" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a><a href="javascript:void(0);" data-url-param1="users"
                data-url-param2="{{ $u->id }}" class=" btn-danger delete_request"   data-toggle="modal" data-target="#delete_country"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">No Results found.. !</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>

            </div>

            

   
@include('admin/layouts.footer')
<script>
      jQuery(".checkb").click(function(){
   var id = $(this).attr('data-id');
   var uid ='0';
        if(this.checked == true)
        {
            var value = '1';
        }else
        {
             var value ='0';
        }
        var table='users';
        var column= 'status';
      var url = "{{ url('check-exists-update2') }}"+"/"+table+"/"+id+"/"+column+"/"+value+"/"+uid;

      

      $.ajax({
        url: url,
        async: false,
        success: function(data){
          //if(data.trim()) exists = true;
          if(data=='1')
          {
              if(value=='1')
              {
                $(".as1").html('User activate Successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }else
              {
                $(".as1").html('User Blocked Successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }
          }else
          {
            $(".dg1").html('Error to update user status!');
             $(".dg1").show();  
             setTimeout(function(){  $(".dg1").hide();; }, 3000);
          }
             
        }
      });

      
});
 
</script>