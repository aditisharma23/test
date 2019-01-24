@include('user/layouts.app2')

<div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="javascript:void(0);"> Questions View</a>
                    </li>

                </ul>
            </div>
    
<style>
.form-group label {
    color: #333;
    font-weight:600;
}
</style>
            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>View</h4>

                            </div>
                            <div class="tab-inn table-responsive ">
                                <div class="table-desi">
                                      <div class="setcion1">
                                          <div class="row">
        									<div class="col-md-4">
                                                <div class="form-group lgbtn">
                                                    <label>Country: </label> 
                                                    @if(!empty($countries) && count($countries) > 0)
                                                    @foreach($countries as $country)
                                                    @if(!empty($questions[0]->country)) @if($questions[0]->country==$country->id) {{$country->name}} @endif @endif 
                                                    @endforeach
                                                    @endif
        										</div>
        									</div> 
        									   @if(!empty($states) && $questions[0]->state!='0' && count($states) > 0)
                                                <div class="col-md-4">
                                                <div class="form-group lgbtn">
                                                <label>State: </label>
                                                @foreach($states as $state)
                                                @if($questions[0]->state==$state->id) {{$state->name}} @endif
                                                @endforeach
                                                </div>
                                                </div>
        										@endif 
        									<div class="col-md-4">
        									<div class="form-group lgbtn">
                                                 <label>Course: </label>
        											    @if(!empty($courses) && isset($questions[0]->course) && count($courses) > 0)
        											    @foreach($courses as $course)
        											    @if($questions[0]->course==$course->id) {{$course->name}} @endif 
        											    @endforeach
        											    @endif
        										</div>
                                            </div>
        									<div class="col-md-4">
                                             <div class="form-group lgbtn">
                                                  <label>Select Grade/Level: </label>
        											    @if(!empty($grades) && isset($questions[0]->grade) && count($grades) > 0)
        											    @foreach($grades as $grade)
        											     @if($questions[0]->grade==$grade->id) {{$grade->name}} @endif
        											    @endforeach
        											    @endif
        								
        										</div>
                                              </div>
        									<div class="col-md-4">
                                                    <div class="form-group lgbtn">
                                                     <label>Year: </label>
        											    @if(!empty($years) && isset($questions[0]->year) && count($years) > 0)
        											    @foreach($years as $year)
        											    @if($questions[0]->year==$year->id) {{$year->name}} @endif 
        											    @endforeach
        											    @endif
        											
        										</div>
        
        
        									</div>
        										@if(!empty($subjects) && $questions[0]->subject !='0' && count($subjects) > 0)
        									<div class="col-md-4">
                                               <div class="form-group lgbtn">
                                                      <label>Subject: </label>
        												@foreach($subjects as $subj)
        								               @if($questions[0]->subject==$subj->id) {{$subj->name}} @endif
        												@endforeach
        										</div>
                                           	</div>
                                           		@endif
                                           	@if(!empty($chapterss) && $questions[0]->chapter !='0' && count($chapterss) > 0)
        									<div class="col-md-4">
        										<div class="form-group lgbtn">
        											 <label>Chapter: </label>
        											  
        											  @foreach($chapterss as $chapter)
        											  @if($questions[0]->chapter==$chapter->id) {{$chapter->name}} @endif 
        											  @endforeach
        										</div>
        									</div>
									    
									         @endif
									    </div>
									
									<div class="clearfix"></div>
								
									</div>
									 @if(!empty($answers) && count($answers) > 0)
								      @foreach($answers as $key=>$answer)
								      <?php $key+=1; ?>
								      
								        <div class="row">
                                           <div class="col-md-12">
        
                                                <div class="tab-inn detail-page px-0">
                    
                                                   @if(!empty($answer->question)) <h3>Q{{$key}}. <span>{{$answer->question}}</span></h3> @endif
                                                    <div class="row ans-options">
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='1') class="correct" @endif @endif >@if(!empty($answer->optiona)){{$answer->optiona}}@endif @if(!empty($answer->answer)) @if($answer->answer=='1') <i class="fa fa-check" aria-hidden="true"></i> @endif @endif</p>
                                                        </div>
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='2') class="correct" @endif @endif >@if(!empty($answer->optionb)){{$answer->optionb}}@endif @if(!empty($answer->answer)) @if($answer->answer=='2') <i class="fa fa-check" aria-hidden="true"></i> @endif @endif</p>
                                                        </div>
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='3') class="correct" @endif @endif >@if(!empty($answer->optionc)){{$answer->optionc}}@endif @if(!empty($answer->answer)) @if($answer->answer=='3') <i class="fa fa-check" aria-hidden="true"></i> @endif @endif</p>
                                                        </div>
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='4') class="correct" @endif @endif >@if(!empty($answer->optiond)){{$answer->optiond}}@endif @if(!empty($answer->answer)) @if($answer->answer=='4') <i class="fa fa-check" aria-hidden="true"></i> @endif @endif</p>
                                                        </div>
                                                    </div>
                    
                    
                                                </div>
                    
                                            </div>
                                        </div>
                                    
                                    @endforeach
                                    @else 
                                    <div class="row">
                                           <div class="col-md-12">
                                              <div class="tab-inn detail-page px-0" style="text-align:center;">
                                    No Record Found!!
                                    </div>
                                    </div>
                                    </div>
                                    @endif
                        
                                </div>
                            </div>
                                
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>






@include('user/layouts.footer')
