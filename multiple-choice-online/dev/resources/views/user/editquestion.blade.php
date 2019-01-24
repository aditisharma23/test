@include('user/layouts.app2')
<style>
    label.error{
        color:red !important;
    }
     h3.classsections {
    display: inline-block;
}
</style>
			<!--== BODY INNER CONTAINER ==-->
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
						</li>
						<li class="active-bre"> Edit Question
						</li>

					</ul>
				</div>
				<!--== DASHBOARD INFO ==-->


				<!--== User Details ==-->
				<div class="sb2-2-3">
					<div class="box-inn-sp questionsection">
						<div class="row">
						    <div class="col-sm-12 col-12">
    						    <div class="inn-title">
                                    <h4>Choose Your Priorities</h4>
                                </div>
                                
							<div class="tab-inn ">
								<!--<p class="fontsize-p">Choose Your Priorities</p>-->
								<form class="addquestion" data-action="{{url('/user/editquestions')}}" onsubmit="return false" data-next="{{url('/user/questionlist')}}">
								   @csrf
								   <input type="hidden" name="pre_question_id" @if(isset($questions[0]->id)) value="{{$questions[0]->id}}" @endif>
								    <div class="setcion1">
								        <div class="row">
        									<div class="col-md-4">
                                                <div class="form-group lgbtn">
                                                 
        											<select class="form-control js-example-basic-single" id="Country" name="country" >
        											    <option value="">Select Country</option>
        											     @if(!empty($countries) && isset($questions[0]->country))
        											     @foreach($countries as $country)
        											     	<option @if(!empty($questions[0]->country)) @if($questions[0]->country==$country->id) selected @endif @endif value="{{$country->id}}">{{$country->name}}</option>
        											     @endforeach
        												@endif
        											</select>
        											
        										</div>
        
        
        
        									</div>
        									<div class="col-md-4">
        
        
        
        
        										<div class="form-group lgbtn">
        
        											<select class="form-control js-example-basic-single" name="state" id="statelist">
        												<option value="">Select State</option>
        												@if(!empty($states) && $questions[0]->state!='0' && isset($questions[0]->state))
        												@foreach($states as $state)
        												<option @if($questions[0]->state==$state->id) selected @endif value="{{$state->id}}">{{$state->name}}</option>
        												@endforeach
        												@endif
        											</select>
        										</div>
        
        
        
        									</div>
        									<div class="col-md-4">
        									<div class="form-group lgbtn">
        
        											<select class="form-control js-example-basic-single" name="course" id="Course" >
        											   <option value="">Select Course</option>
        											    @if(!empty($courses) && isset($questions[0]->course))
        											    @foreach($courses as $course)
        											    <option  @if($questions[0]->course==$course->id) selected @endif value="{{$course->id}}">{{$course->name}}</option>
        											    @endforeach
        											    @endif
        											</select>
        										</div>
        
        
        									</div>
        									<div class="col-md-4">
        
        
        
        
        										<div class="form-group lgbtn">
        
        											<select class="form-control js-example-basic-single" name="grade" id="Grade" >
        											    <option value="">Select Grade/Level</option>
        											    @if(!empty($grades) && isset($questions[0]->grade))
        											    @foreach($grades as $grade)
        											    <option @if($questions[0]->grade==$grade->id) selected @endif value="{{$grade->id}}">{{$grade->name}}</option>
        											    @endforeach
        											    @endif
        											</select>
        										</div>
        
        
        
        									</div>
        									<div class="col-md-4">
        
        
        
        
        										<div class="form-group lgbtn">
        
        											<select class="form-control js-example-basic-single" name="year" id="Year" >
        											    <option value="">Select Year</option>
        											    @if(!empty($years) && isset($questions[0]->year))
        											    @foreach($years as $year)
        											    <option @if($questions[0]->year==$year->id) selected @endif value="{{$year->id}}">{{$year->name}}</option>
        											    @endforeach
        											    @endif
        											</select>
        										</div>
        
        
        									</div>
        									<div class="col-md-4">
        
        
        
        
        										<div class="form-group lgbtn">
        
        											<select class="form-control js-example-basic-single" name="subject" id="Subject">
        												<option value="">Select Subject</option>
        												@if(!empty($subjects) && $questions[0]->subject !='0' && isset($questions[0]->subject))
        												@foreach($subjects as $subj)
        												<option @if($questions[0]->subject==$subj->id) selected @endif value="{{$subj->id}}">{{$subj->name}}</option>
        												@endforeach
        												@endif
        											</select>
        										</div>
        
        
        									</div>
        									<div class="col-md-4">
        										<div class="form-group lgbtn">
        											<select class="form-control js-example-basic-single" name="chapter" id="Chapter">
        											  <option value="">Select Chapter</option>
        											  @if(!empty($chapterss) && $questions[0]->chapter !='0' && isset($questions[0]->chapter))
        											  @foreach($chapterss as $chapter)
        											  <option @if($questions[0]->chapter==$chapter->id) selected @endif value="{{$chapter->id}}">{{$chapter->name}}</option>
        											  @endforeach
        											  @endif
        											</select>
        										</div>
        									</div>
        									<div class="clearfix"></div>
        									<div class="form-group col-sm-12 mt-1 mb-4">
        									    <input type="button" name="Proceed" value="Proceed" class="btn btn-primary checkvalidations" data-toggle="collapse" data-target="#">
        										<!--a href="{{url('/question-details')}}" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Proceed</a-->
        									</div>
        								</div>	
									</div>
									<div class="">
										<div id="demo" class="collapse">
										    <div class="hereappaned">
										        @if(!empty($answers))
										        @foreach($answers as $key=>$answer)
										        
										<section class="section1 deletes{{$key}}">
										    <div class="clearfix"></div><h3 class="mt-0 classsections">Edit Question</h3>
										     @if($key != 0)
										   	<button class="btn btn-danger pull-right question-btn deletequestion" data-class="deletes{{$key}}" type="button"><i class="fa fa-trash"></i></button>
										   	@endif
                                        <div class="row">
                                            <input type="hidden" name="question_answer_id[{{$key}}]" value="{{$answer->id}}">
                                        <div class="form-group col-md-12">
                                        <input class="form-control" @if(!empty($answer->question)) value="{{$answer->question}}" @endif name="question[{{$key}}]" id="" type="text" value="" placeholder="Add Question">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="Optiona">Option A</label>
                                        <input class="form-control" @if(!empty($answer->optiona)) value="{{$answer->optiona}}" @endif name="optiona[{{$key}}]" id="Optiona" type="text">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="Optionb">Option B</label>
                                        <input class="form-control" id="Optionb" @if(!empty($answer->optionb)) value="{{$answer->optionb}}" @endif name="optionb[{{$key}}]" type="text">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="Optionc">Option C</label>
                                        <input class="form-control" id="Optionc" @if(!empty($answer->optionc)) value="{{$answer->optionc}}" @endif name="optionc[{{$key}}]" type="text">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="Optiond">Option D</label>
                                        <input class="form-control" id="Optiond" @if(!empty($answer->optiond)) value="{{$answer->optiond}}" @endif name="optiond[{{$key}}]" type="text">
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                        <div class="col-lg-12">
                                        <h3 class="mt-3">Correct Answer</h3>
                                        </div>
                                        
                                        <div class="form-group col-lg-6">
                                        <select class="test" name="answer[{{$key}}]" >
                                        <optgroup>
                                        <option @if(!empty($answer->answer)) @if($answer->answer=='1') selected @endif @endif value="1">Option A</option>
                                        <option @if(!empty($answer->answer)) @if($answer->answer=='2') selected @endif @endif  value="2" >Option B</option>
                                        <option @if(!empty($answer->answer)) @if($answer->answer=='3') selected @endif @endif  value="3">Option C</option>
                                        <option @if(!empty($answer->answer)) @if($answer->answer=='4') selected @endif @endif  value="4" >Option D</option>
                                        </optgroup>
                                        
                                        </select>
                                        </div>													
                                        </div>
                                        </section>
                                        @endforeach
                                        @else 
                                        No Record Found!!
                                        @endif
                                        </div>
                                        @if(isset($questions[0]->id))
                            <div class="row">
                                <div class="form-group col-lg-12 mb-5 mt-3">
													  <button type="button" class="btn btn-primary pull-left addmorebtn" >Add More</button>
														<button class="btn btn-primary pull-right question-btn submitquestion" type="button">Submit</button>
														<button class="btn btn-default pull-right question-btn cancels" type="button">Cancel</button>
														
													
														
														
													</div>	
                            </div>
                            @endif

									</div>					
							   					
							</div>
							  </form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
		<!-- </div> -->

		<!-- </div> -->
		<!-- </div> -->

		<!--== BOTTOM FLOAT ICON ==-->


	@include('user/layouts.footer')
	<script>
	
    $('.cancels').click(function(){
        $('.setcion1').show();  
        $('#demo').hide();
    });
        	
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
	    
	    $('#Course').change(function(){
	         $('#Chapter').html('<option value="">Select Chapter</option>');
	        $('#Subject').attr('disabled',true);
	       var subject = $(this).val();
	       if(subject!='')
	       {
	           var pageNumber='1';
                $.ajax({
                type : 'GET',
                data: {"subject":subject},
                url: "{{url('/question')}}/?page=" +pageNumber,
                success : function(data){
                pageNumber +=1;
                if(data.length == 0){
                // :( no more articles
                }else{
                $('#Subject').html(data.html);
                 $('#Subject').attr('disabled',false);
                }
                },error: function(data){
                
                },
                });
            }  
	       
	    });
	    
	    $('#Subject').change(function(){
            $('#Chapter').attr('disabled',true);
            var chapter = $(this).val();
            if(chapter!='')
            {
            var pageNumber='1';
            $.ajax({
            type : 'GET',
            data: {"chapter":chapter},
            url: "{{url('/question')}}/?page=" +pageNumber,
            success : function(data){
            pageNumber +=1;
            if(data.length == 0){
            // :( no more articles
            }else{
            $('#Chapter').html(data.html);
            $('#Chapter').attr('disabled',false);
            }
            },error: function(data){
            
            },
            });
            }  
	    });
	    	$('.checkvalidations').click(function(){
	    	    if($('.addquestion').valid())
	    	    {
	    	        $('#demo').show();
	    	       /* $('.hereappaned').html('<h3 class="mt-5">Add Question</h3><section class="section0"> <div class="row"><div class="form-group col-md-12"> <input class="form-control" name="question[0]" id="" type="text" value="" placeholder="Add Question" required> </div> <div class="form-group col-lg-6"> <label for="Optiona">Option A</label> <input class="form-control" name="optiona[0]" id="Optiona" type="text" required> </div><div class="form-group col-lg-6"> <label for="Optionb">Option B</label> <input class="form-control" id="Optionb" name="optionb[0]" type="text" required> </div> <div class="form-group col-lg-6"> <label for="Optionc">Option C</label> <input class="form-control" id="Optionc" name="optionc[0]" type="text" required> </div> <div class="form-group col-lg-6"> <label for="Optiond">Option D</label> <input class="form-control" id="Optiond" name="optiond[0]" type="text" required> </div> <div class="clearfix"></div> <h3 class="mt-5">Correct Answer</h3> <div class="form-group col-lg-12"> <select class="test" name="answer[0]" > <optgroup> <option value="1">Option A</option> <option value="2" >Option B</option> <option value="3">Option C</option> <option value="4" >Option D</option> </optgroup> </select> </div>	</div> </section>');
                    (function($) {
                    $(function() {
                    $('.test').fSelect();
                    });
                    })(jQuery); */
                    $('.setcion1').hide();
	    	    }
        	});
        	
        	$('.addmorebtn').click(function(){
	    	    if($('.addquestion').valid())
	    	    {
	    	       var l= $('.hereappaned section').length;
	    	        //$('#demo').show();
	    	        $('.hereappaned').append('<section class="deletes'+l+' section'+l+'"> <br><div class="clearfix"></div><h3 class="mt-0 classsections">Add Question</h3> <button type="button" class="btn btn-danger pull-right  deletequestion" data-class="deletes'+l+'" ><i class="fa fa-trash"></i></button> <div class="row"><div class="form-group col-md-12"> <input class="form-control" name="question['+l+']"  type="text" value="" placeholder="Add Question" required> </div> <div class="form-group col-lg-6"> <label for="Optiona'+l+'">Option A</label> <input class="form-control" name="optiona['+l+']" id="Optiona'+l+'" type="text" required> </div><div class="form-group col-lg-6"> <label for="Optionb'+l+'">Option B</label> <input class="form-control" id="Optionb'+l+'" name="optionb['+l+']" type="text" required> </div> <div class="form-group col-lg-6"> <label for="Optionc'+l+'">Option C</label> <input class="form-control" id="Optionc'+l+'" name="optionc['+l+']" type="text" required> </div> <div class="form-group col-lg-6"> <label for="Optiond'+l+'">Option D</label> <input class="form-control" id="Optiond'+l+'" name="optiond['+l+']" type="text" required> </div> <div class="clearfix"></div> <div class="col-lg-12"><h3 class="mt-3">Correct Answer</h3></div> <div class="form-group col-lg-6"> <select class="test" name="answer['+l+']" > <optgroup> <option value="1">Option A</option> <option value="2" >Option B</option> <option value="3">Option C</option> <option value="4" >Option D</option> </optgroup> </select> </div>	</div> </section>');
                    (function($) {
                    $(function() {
                    $('.test').fSelect();
                    });
                    })(jQuery);
	    	    }
        	});
        	
        	 $('body').on('click', '.deletequestion', function() {
                   var vl = $(this).attr('data-class');
        	         $('.'+vl).remove();
            });
        	
    $('.submitquestion').click(function(){
    if($('.addquestion').valid())
    {
        $('.submitquestion').attr('disabled',true);
        $('.submitquestion').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform('addquestion','submitquestion');
    }
    });
    
function submitform(form,btn)
{
     var data = $('.'+form).serialize();
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                         $('.'+btn).html('Submit');   
                         
                    }
                    if(data.erro==101)
                    {
                        if(form !='profileupdate')
                        {
                            $('.'+form)[0].reset();
                        }
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                         
                             $('.'+btn).html('Submit');   
                         
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}

$(document).ready(function(){
	        
	       var country = $('#Country').val();
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
                    
                     var st=  $('#statelist').val();
                if(st.length < 1)
                { $('#statelist').attr('disabled',true);
                    $('#statelist').html(data.html);
                    $('#statelist').attr('disabled',false);
                }
                
                }
                },error: function(data){
                
                },
                });
            }  
	       
	    
	         //$('#Chapter').html('<option value="">Select Chapter</option>');
	       
	       var subject = $('#Course').val();
	       if(subject!='')
	       {
	           var pageNumber='1';
                $.ajax({
                type : 'GET',
                data: {"subject":subject},
                url: "{{url('/question')}}/?page=" +pageNumber,
                success : function(data){
                pageNumber +=1;
                if(data.length == 0){
                // :( no more articles
                }else{
                    var sbj=  $('#Subject').val();
                if(sbj.length < 1)
                {
                     $('#Subject').attr('disabled',true);
                    $('#Subject').html(data.html);
                   $('#Subject').attr('disabled',false);
                }
                
                }
                },error: function(data){
                
                },
                });
            }  
	       
	   
	    
	  
           
            var chapter = $('#Subject').val();
            if(chapter!='')
            {
            var pageNumber='1';
            $.ajax({
            type : 'GET',
            data: {"chapter":chapter},
            url: "{{url('/question')}}/?page=" +pageNumber,
            success : function(data){
            pageNumber +=1;
            if(data.length == 0){
            // :( no more articles
            }else{
               var chp=  $('#Chapter').val();
                if(chp.length < 1)
                {
                     $('#Chapter').attr('disabled',true);
                    $('#Chapter').html(data.html);
                    $('#Chapter').attr('disabled',false);
                }
            }
            },error: function(data){
            
            },
            });
            }  
});
	</script>

	