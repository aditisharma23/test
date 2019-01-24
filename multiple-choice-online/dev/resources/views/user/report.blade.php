	@include('user/layouts.app2')

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre">Reports
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                     <div class="box-inn-sp">
                    <div class="row">
                        
                        <div class="col-md-12">
                           
                                <div class="inn-title mb-20">
                                    <h4>Report</h4>
                                </div>
                                <form class="getsearch">
                                <section class="section1">
                                <div class="col-md-4">
                                    <div class="form-group lgbtn">
                                        <select class="form-control" id="Country" name="country" required>
											    <option value="">Select Country</option>
											     @if(!empty($countries))
											     @foreach($countries as $country)
											     	<option value="{{$country->id}}">{{$country->name}}</option>
											     @endforeach
												@endif
											</select>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group lgbtn">

                                        <select class="form-control" name="state" id="statelist">
												<option value="">Select State</option>
											</select>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="form-group lgbtn">

                                       	<select class="form-control" name="course" id="Course" required>
											   <option value="">Select Course</option>
											    @if(!empty($courses))
											    @foreach($courses as $course)
											    <option value="{{$course->id}}">{{$course->name}}</option>
											    @endforeach
											    @endif
											</select>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="form-group lgbtn">

                                        <select class="form-control" name="grade" id="Grade" required>
											    <option value="">Select Grade/Level</option>
											    @if(!empty($grades))
											    @foreach($grades as $grade)
											    <option value="{{$grade->id}}">{{$grade->name}}</option>
											    @endforeach
											    @endif
											</select>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="form-group lgbtn">

                                        	<select class="form-control" name="year" id="Year" required>
											    <option value="">Select Year</option>
											    @if(!empty($years))
											    @foreach($years as $year)
											    <option value="{{$year->id}}">{{$year->name}}</option>
											    @endforeach
											    @endif
											</select>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="form-group lgbtn">

                                        <select class="form-control" name="subject" id="Subject">
												<option value="">Select Subject</option>
											</select>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="form-group lgbtn">

                                       	<select class="form-control" name="chapter" id="Chapter">
											  <option value="">Select Chapter</option>
											</select>
                                    </div>

                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="form-group col-sm-12 mt-1 mb-0">

                                    <a href="javascript:void(0);" class="btn btn-primary section1hide addmorebtn" onclick="submittest()"  aria-expanded="false">Search</a>
                                </div>
                                </section>
                                </form>
                                 </div>
                                <div class="col-md-12 faqcollapse">
                                @include('user.search_report')
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include('user/layouts.footer')
   	<script>
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
                
                 //$('#tab1').addClass('active');
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
	    
	    
        	
        	
    $('.submitquestion').click(function(){
    if($('.addquestion').valid())
    {
        $('.submitquestion').attr('disabled',true);
        $('.submitquestion').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform('addquestion','submitquestion');
    }
    });
    







function submittest()
{
   
        var pageNumber='1';
        var data = $('.getsearch').serialize();
        $.ajax({
        type : 'GET',
        data: data,
        url: "{{url('user/getsearch')}}/?page=" +pageNumber,
        success : function(data){
        pageNumber +=1;
        if(data.length == 0){
            alert('Not Question Found !!!');
        }else{
         if(data.html=='session')
        {
            window.location.href="{{url('/')}}";
        }else
        {
            
            $('.faqcollapse').html(data.html);
            $('#discount1').DataTable();
           // $('#demo').show();
           // $('.section1').hide();  
            $(function() {
            $('.test').fSelect();
            });
        
        
        
        }
        
        }
        },error: function(data){
        
        },
        });
    
    
}




	</script>