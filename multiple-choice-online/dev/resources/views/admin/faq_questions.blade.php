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
                            <li class="breadcrumb-item"><a href="{{url('/admin/faq_list')}}">FAQ List</a></li>
                             <li class="breadcrumb-item active">@if(!empty($optioss)) Edit FAQ @else Add FAQ @endif </li>
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
                           <h4 class="card-title mb-4"><span class="lstick"></span>@if(!empty($optioss)) Edit FAQ @else Add FAQ @endif </h4></div>
                           
                                </div>
                                <form method="POST" data-next="{{url('admin/faq_list')}}" class="@if(!empty($optioss)) addfaqs1 @else addfaqs @endif" data-action="{{url('admin/add_faq')}}" class="mt-4"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                          @csrf
                                            
                                            <input type="hidden" name="id" @if(!empty($optioss)) @if(!empty($optioss[0]->id)) value="{{$optioss[0]->id}}" @endif @endif >
                                           <div class="questions-head">
                                            <div class="form-group">
                                               <label>Question </label>
                                                 <input type="text" name="questions" @if(!empty($optioss))  @if(!empty($optioss[0]->questions)) value="{{$optioss[0]->questions}}" @endif @endif  style="color:black;" class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                               <label>Answers</label>
                                                  <textarea name="answer"  style="color:black;" class="form-control form-control-lg">@if(!empty($optioss))@if(!empty($optioss[0]->answer)){{$optioss[0]->answer}}@endif @endif</textarea>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                              <button class="btn btn-info  @if(!empty($optioss)) addfaqsbtn1 @else addfaqsbtn @endif">Save</button>  
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
