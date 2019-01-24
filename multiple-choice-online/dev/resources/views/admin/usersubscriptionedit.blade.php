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
                            <li class="breadcrumb-item active">Subscription Content</li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>Subscription Content</h4></div>
                           
                                </div>
                                <form method="POST" data-next="{{url('admin/subscription')}}" class="editsubcription" data-action="{{url('admin/editsubcription')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            
                                            <input type="hidden" name="id" @if(!empty($subscription[0]->id)) value="{{$subscription[0]->id}}" @endif>
                                            <div class="form-group"> 
                                                <label>Title</label>
                                                 <input type="text" name="title" style="color:black;" @if(!empty($subscription[0]->title)) value="{{$subscription[0]->title}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group"> 
                                                <label>Price</label>
                                                 <input type="text" name="price"  id="price" style="color:black;" 
                                                 @if(isset($subscription[0]->price)) value="{{$subscription[0]->price}}" 
                                                 @endif 
                                                  @if(isset($subscription[0]->id) && $subscription[0]->id=='1') disabled
                                                 @endif 
                                                 
                                                 
                                                 
                                                 class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group"  style="display:none;">
                                               <label>Duration (in months)</label>
                                                  <input name="month"  style="color:black;" @if(isset($subscription[0]->month)) value="{{$subscription[0]->month}}" @endif class="form-control form-control-lg">
            
                                            </div>
                                            
                                            <div class="form-group" style="display:none;">
                                               <label>Currency</label>
                                                 <input name="currency"  style="color:black;" @if(isset($subscription[0]->currency)) value="{{$subscription[0]->currency}}" @endif class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Text of Content of Section 01</label>
                                                <textarea  id="editor1" rows="10" cols="80">@if(isset($subscription[0]->description)){{$subscription[0]->description}}@endif
                                                </textarea>
                                                 <span class="editor1" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                                            </div>
                                             @if(isset($subscription[0]->id) && $subscription[0]->id!='1') 
                                                  <div class="form-group">
                                               <label>Referral Amount</label>
                                                 <input name="referrel_amount" 
                                                 style="color:black;" @if(isset($subscription[0]->referrel_amount)) value="{{$subscription[0]->referrel_amount}}" @endif class="form-control  referrel_amount form-control-lg">
                                            </div>
                                            
                                            @endif
                                            
                                             <div class="form-group">
                                               <label>Status</label>
                                               <select name="status" class="form-control">
                                                   <option @if($subscription[0]->status=='1') selected @endif value="1">Active</option>
                                                   <option @if($subscription[0]->status=='0') selected @endif value="0">Inactive</option>
                                               </select>
                                            </div>
                                            
                                            <div class="form-group">
                                              <button class="btn btn-info editsubcriptionbtn">Save</button>  
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
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
                    
               
           /*     CKEDITOR.replace( 'editor1', {
	customConfig: '/ckeditor_settings/config.js'
} );

 CKEDITOR.replace( 'editor2', {
	customConfig: '/ckeditor_settings/config.js'
} ); */
            </script>