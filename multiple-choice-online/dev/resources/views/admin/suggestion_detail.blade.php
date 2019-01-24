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
            
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
 
                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Suggested Answer Detail</li>
                        </ol>
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                    <!-- </div> -->
                </div>
                <?php //print_r($questions);
                ////print_r($questions11);?>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                            <div class="card-body userdatabtn-color">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Suggested Answer Detail</h4>
                                    </div>
                                </div>
                                
                                <div class="box-inn-sp" id="product_container">
                                    @if(!empty($suggested_answers))
									      @forelse($suggested_answers as $key=> $realanswer)
									      <?php 
									    
									      $key +=1;
									      $result3='';
									      
									      if($realanswer->suggested_answer=='1')
									         {
									             $result3='A';
									         }
									         if($realanswer->suggested_answer=='2')
									         {
									              $result3='B';
									         }
									         if($realanswer->suggested_answer=='3')
									         {
									             $result3='C';
									         }
									         if($realanswer->suggested_answer=='4')
									         {
									             $result3='D';
									         }
									       $result2= '';
									       if($realanswer->realanswer=='1')
									         {
									             $result2='a';
									         }
									         if($realanswer->realanswer=='2')
									         {
									              $result2='b';
									         }
									         if($realanswer->realanswer=='3')
									         {
									             $result2='c';
									         }
									         if($realanswer->realanswer=='4')
									         {
									             $result2='d';
									         }
									      
									          $result= '';
									         if($realanswer->myanswer=='1')
									         {
									             $result='a';
									         }
									         if($realanswer->myanswer=='2')
									         {
									              $result='b';
									         }
									         if($realanswer->myanswer=='3')
									         {
									             $result='c';
									         }
									         if($realanswer->myanswer=='4')
									         {
									             $result='d';
									         }
									      ?>
									      
						
						<div class="row">			      
                            <div class="col-md-12">
                                <div class="detail-page mt-2">

                                <h3>Q. <span>{{$realanswer->question}}</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p  class=" @if($realanswer->myanswer=='1' && $realanswer->realanswer != $realanswer->myanswer ) wrong @elseif($realanswer->realanswer=='1') correct  @endif  " >{{$realanswer->optiona}} @if($realanswer->myanswer=='1' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer </span> @endif @if($realanswer->realanswer=='1' ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class=" @if($realanswer->myanswer=='2' && $realanswer->realanswer != $realanswer->myanswer) wrong @elseif($realanswer->realanswer=='2') correct @endif " >{{$realanswer->optionb}} @if($realanswer->myanswer=='2' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer </span> @endif @if($realanswer->realanswer=='2' ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class=" @if($realanswer->myanswer=='3' && $realanswer->realanswer != $realanswer->myanswer) wrong @elseif($realanswer->realanswer=='3') correct @endif " >{{$realanswer->optionc}} @if($realanswer->myanswer=='3' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i>  Wrong Answer </span> @endif @if($realanswer->realanswer=='3' ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class=" @if($realanswer->myanswer=='4' && $realanswer->realanswer != $realanswer->myanswer) wrong @elseif($realanswer->realanswer=='4') correct @endif "  >{{$realanswer->optiond}} @if($realanswer->myanswer=='4' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i>  Wrong Answer  </span> @endif @if($realanswer->realanswer=='4'  ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                </div>
                                @if(!empty($realanswer->suggested_answer) && !empty($realanswer->comment))
                                <div class="suggestion mb-0">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="{{$result3}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="3" id="comment">{{$realanswer->comment}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endif

                            </div>
                            </div>
                        </div>
                         @empty
                       <div class="col-md-12">
                        
                        <div class="tab-inn detail-page">
                        No Suggestion Found!!
                        </div>
                        
                        </div>
                    @endforelse
                    
                    @endif
                    
                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
             @include('admin/layouts.footer')
               