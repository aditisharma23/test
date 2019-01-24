@include('user/layouts.app2')
<style>
    label.error{
        color: red;
    }
</style>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{url('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre">My Profile
                        </li>
                        
                    </ul>
                </div>		
                <main class="pt-0 pb-0">
                    <div class="main-section trip-details">
                        <section class="companies-info tabs-friend userdetail-topspace">
                            <div class="container-fluid p-0">
                                <div class="row">
                                  <div class="col-lg-3">
                                      <div class="userdetailleftimg">
                                          <div class="icn-edit">
                                           <img  src="@if(!empty($users[0]->profile)){{url('public/profile/'.$users[0]->profile)}}" @else {{url('uploads/Dummy-image.jpg')}} @endif" id="imgFileUpload" class="circle" width="100">
                                            
                                           <label class="icn-profl" for="profl">
                                            <i class="material-icons dp48">edit</i>
                                            <input type="file" id="profl" class="FileUpload1">
                                            <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
                                      
                                       </label>
                                    </div>
                                    <h4>@if(!empty($users[0]->name)){{$users[0]->name}}@endif @if(!empty($users[0]->lname)){{$users[0]->lname}}@endif</h4>
                                    <p>@if(!empty($users[0]->email)){{$users[0]->email}}@endif</p>
                                    <p>@if(!empty($users[0]->phone))+{{$users[0]->phone}}@endif</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul class="nav nav-tabs " id="myTab" role="tablist">
                                    <li class="nav-item active">
                                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#my-friend" role="tab" aria-controls="my-friend" aria-selected="true" aria-expanded="true"><i class="fa fa-file-text"></i>Personal Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#friend-request" role="tab" aria-controls="friend-request" aria-selected="false" aria-expanded="true"><i class="fa fa-check-square"></i>Subscription Plan</a>
                                    </li>


                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active in" id="my-friend" role="tabpanel" aria-labelledby="home-tab" aria-expanded="false">
                                        <div class="companies-list userdetail-topspacetab">

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="main-ws-sec profiledetail">

                                                      <form methode="post" class="profileupdate" data-action="{{url('user/profile')}}" data-next="{{url('/myprofile')}}">
                                                        @csrf
                                                          <div class="form-group col-lg-6">
                                                            <label for="fstname">First Name</label>
                                                            <input class="form-control" name="name" id="fstname" @if(!empty($users[0]->name))value="{{$users[0]->name}}"@endif type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="lstname">Last Name</label>
                                                            <input class="form-control" name="lname" id="lstname" @if(!empty($users[0]->lname))value="{{$users[0]->lname}}"@endif type="text">
                                                        </div>	

                                                        <div class="form-group col-lg-6">
                                                            <label for="phone">Phone No</label>
                                                            <input class="form-control" name="phone" id="phone" @if(!empty($users[0]->phone))value="{{$users[0]->phone}}"@endif type="text">
                                                        </div>	

                                                        <div class="form-group col-lg-6">
                                                            <label for="email">Email Address</label>
                                                            <input class="form-control" name="email" id="email" @if(!empty($users[0]->email))value="{{$users[0]->email}}"@endif type="email">
                                                        </div>		
                
                                                        <div class="form-group col-lg-6">
                                                            <label for="address">Country</label>
                                                            <select  class="form-control js-example-basic-single countryselect" id="Country" name="country">
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
                                                            <select  class="form-control js-example-basic-single " id="statelist" name="state">
                                                               <option value="">Select State</option>
                                                                @if(!empty($states) && $users[0]->state!='0')
                                                                @foreach($states as $state)
                                                                <option @if($users[0]->state==$state->id) selected @endif value="{{$state->id}}">{{$state->name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                    
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="address">Address</label>
                                                            <input class="form-control" id="address" name="address" @if(!empty($users[0]->address))value="{{$users[0]->address}}"@endif type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="newpassword">New Password</label>
                                                            <input class="form-control" name="newpassword" id="newpassword" type="password">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="conpassword">Confirm Password</label>
                                                            <input class="form-control" name="conpassword" id="conpassword" type="password">
                                                        </div>
                                                        <div class="form-group col-lg-12 mt-1">
                                                            <input class="btn btn-primary profileupdatebtn" type="submit" value="Submit">
                                                        </div>	
                                                    </form>





                                                </div>

                                            </div>
                                        </div>
                                        <div class="process-comm">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                        <!--process-comm end-->
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="friend-request" role="tabpanel" aria-labelledby="home-tab" aria-expanded="false">
                                    <div class="companies-list userdetail-topspacetab pt-0">

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="main-ws-sec">

                                                 <div class="sb2-2-3 mt-0">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="box-inn-sp">

                                                                <div class="tab-inn table-responsive ">
                                                                    <div class="table-desi">
                                                                        <?php  ////print_r($transactions);?>
                                                                        <div class="table-responsive">
                                                                            <table class="table table-hover" id="discount1" >
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Plan Name</th>
                                                                                    <th>Price</th>
                                                                                    <th>Payment Method</th>
                                                                                    <th>Expiry Date</th>



                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($transactions as $key=>$t)
                                                                                <tr>
                                                                                    <td>@if($t->amount != '0' && $t->transaction_id =='0') Wallet @elseif($t->transaction_id != 0) #{{$t->transaction_id}} @else Free @endif</td>
                                                                                    <td>{{App\Subscription_content::getname($t->package_id)}}</td>
                                                                                    <td>$<?=$t->amount;?></td>
                                                                                    <td>@if($t->package_id == '1')
                                                                                    --
                                                                                    @elseif($t->amount != '0' && $t->transaction_id =='0')
                                                                                    Wallet
                                                                                    @else
                                                                                    Card
                                                                                    @endif
                                                                                    </td>
                                                                                    <td><?php  
                                                                                    if($key == '0')
                                                                                    {   $datek = App\Hours::getdetailsuserret(Session()->get('userid'),'expiry');
                                                                                        $date1 = date('M-d Y',strtotime($datek));
                                                                                    }else
                                                                                    {
                                                                                        if(!empty($t->exp) &&  $t->exp!='')
                                                                                        {
                                                                                            $date1 = date('M-d Y',strtotime($t->exp));
                                                                                        }else
                                                                                        {
                                                                                        
                                                                                        $date = strtotime($t->created);
                                                                                        if($t->package_id == '1'){
                                                                                         $date1 = date('M-d Y',strtotime("+7 day", $date));
                                                                                         }else if($t->package_id == '3')
                                                                                         {  
                                                                                            $date1 = date('M-d Y',strtotime("+1 year", $date));  
                                                                                         }
                                                                                         else{
                                                                                             $date1 = date('M-d Y',strtotime("+1 month", $date)); 
                                                                                         }
                                                                                        }
                                                                                     
                                                                                    }
                                                                                     ?> 
                                                                                     <?=$date1;?></td>
                                                                                </tr>
                                                                                @endforeach
                                                                              </tbody>
                                                                        </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="process-comm">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                            <!--process-comm end-->
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--companies-info end-->

    </div>
</main>

</div>

@include('user/layouts.footer')
<script>

$(document).ready(function() {
$('.js-example-basic-single').select2();  
});
         
         $('#Country').change(function(){
	        $('#statelist').attr('disabled',true);
	       var country = $(this).val();
	       if(country!='')
	       {
	           var pageNumber='1';
                $.ajax({
                type : 'GET',
                data: {"country":country},
                url: "{{url('/question')}}/?page=" +pageNumber,
                success : function(data){
                pageNumber +=1;
                if(data.length == 0){
                // :( no more articles
                }else{
                $('#statelist').html(data.html);
                 $('#statelist').attr('disabled',false);
                }
                },error: function(data){
                
                },
                });
            }  
	       
	    });
	    
    $(function () {
        var fileupload = $(".FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
      //  image.click(function () {
        //   fileupload.click();
      //  });
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
		       url : '{{url("/user/uploadfile")}}',
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
				   $('.img1').attr('src',srcimg+'/'+data.path);
				   $('.img2').attr('src',srcimg+'/'+data.path);
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