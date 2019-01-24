
	@include('user/layouts.app2')

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2 hereresult">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre">Attempt Test
                    </li>

                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="box-inn-sp questionsection attemptsection">
                    <div class="row"> 
                        <div class="col-sm-12 col-12"> 
                         <input type="hidden" value="{{App\Hours::getdetailsuserfield(Session()->get('userid'),'package_id')}}" id="pack_id" >
                        
                        <div class="inn-title">
                            <h4>Please Fill The Required Details In Order To Proceed</h4>
                        </div>
                            
                        <div class="tab-inn ">
                            
				            	<!--<p  class="fontsize-p"></p>-->
                            <form class="attemptest" data-action="{{url('/user/attempttest')}}" onsubmit="return false" data-next="{{url('/user/attempttest')}}">
                                <section class="section1">
                                    <div class="row">        
                                        <div class="col-md-4">
                                            <div class="form-group lgbtn">
                                                <select class="form-control js-example-basic-single" id="Country" name="country" >
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
        
                                                <select class="form-control js-example-basic-single" name="state" id="statelist">
        												<option value="">Select State</option>
        											</select>
                                            </div>
        
                                        </div>
                                        <div class="col-md-4">
        
                                            <div class="form-group lgbtn">
        
                                               	<select class="form-control js-example-basic-single" name="course" id="Course" >
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
        
                                                <select class="form-control js-example-basic-single" name="grade" id="Grade" >
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
        
                                                	<select class="form-control js-example-basic-single" name="year" id="Year" >
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
        
                                                <select class="form-control js-example-basic-single" name="subject" id="Subject">
        												<option value="">Select Subject</option>
        											</select>
                                            </div>
        
                                        </div>
                                        <div class="col-md-4">
            
                                                <div class="form-group lgbtn">
            
                                                   	<select class="form-control js-example-basic-single" name="chapter" id="Chapter">
            											  <option value="">Select Chapter</option>
            											</select>
                                                </div>
            
                                            </div>
                                
                                          <div class="clearfix"></div>
                                         <div class="form-group col-sm-12 mt-1 mb-4">

                                    <a href="javascript:void(0);" class="btn btn-primary section1hide addmorebtn"  aria-expanded="false">Proceed</a>
                                </div>
                                    </div>
                                </section>

                                <div class="alltest">

                                    <div id="demo" class="collapse">
                                         <div class="step-app">

                                        
                                    </div>
                                    </div>

                                </div> </form>

                        </div>
                    </div>
                </div>
            </div>
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
	    
	    	$('.section1hide').click(function(){
	    	  
	    	  
	    	   $.ajax({
                    type : 'GET',
                    data: '',
                    url: "{{url('user/hours_left')}}",
                    success : function(data){
                   if(data == '00:00:00')
                   {
                       alert('Hours empty.. please upgrade your subscription');
                   }
                   else
                   {
                       if($('.attemptest').valid())
	    	    {
	    	         var pageNumber='1';
	    	        var data = $('.attemptest').serialize();
                    $.ajax({
                    type : 'GET',
                    data: data,
                    url: "{{url('user/getquestions')}}/?page=" +pageNumber,
                    success : function(data){
                    pageNumber +=1;
                    if(data.length == 0){
                       alert('Not Question Found !!!');
                    }else{
                        if(data.html=='')
                        {
                            alert('Not Question Found !!!'); 
                        }else
                        {
                            $('.step-app').html(data.html);
                            $('#demo').show();
                            var user=$('#pack_id').val();
                            if(user=='1'){
                            count();
                            $('#timer').show();
                            }
                            $('.section1').hide();  
                            $(function() {
                            $('.test').fSelect();
                            });
                        }
                    }
                    },error: function(data){
                    
                    },
                    });
	    	       } 
                   }
                },error: function(data){
                    
                    },
                    });
	    	    
	    	  
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


$('body').on('click','.clicksubmitsu', function(){
    var btn = $(this);
    var key = $(this).attr('data-count');
   var answer =  $('.adnswers'+key).val();
   var comment = $('#comment'+key).val();
   var data_modal = $(this).attr('data-modal');
   var data_myanswer = $(this).attr('data-my-answer');
   var id = $(this).attr('data-user_test_id');
   var x='0';
    if(answer.length > 0 )
    {
        $('.slectbox'+key).hide();
    }else
    { x='1';
     $('.slectbox'+key).show(); 
    }
    
     if(comment.length > 0 )
    {
        $('.commmentbox'+key).hide();
    }else
    {  x='1';
     $('.commmentbox'+key).show(); 
    }
    
    if(x=='0' && id !='')
    {
        $(this).attr('disabled',true);
       $(this).html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
      $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: "{{url('/user/addsugestion')}}",
                data: {"suggested_answer":answer,"comment":comment,"id":id},
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
                        $('.'+data_modal).hide();
                        $('#'+data_modal).hide();
                        $('.modal-backdrop').remove();
                       $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                     $('.'+btn).html('Submit');   
                    }
                },
            }); 
    }else
    {
      alert('invalid');  
    }
});
$('body').on('click','.next-tab', function(){
var coun = $('body').find('.step-tab-panel.active').attr('data-count');
$('body').find('#tab'+coun).removeClass('active');
coun++;
$('body').find('#tab'+coun).addClass('active');
});
$('body').on('click','.prevoius-tab', function(){
    var coun = $('body').find('.step-tab-panel.active').attr('data-count');
    $('body').find('#tab'+coun).removeClass('active');
    coun--;
    $('body').find('#tab'+coun).addClass('active');
});

// var i=$('#ui-tabs').tabs( "option", "active"); //get selected tab index
//$('#ui-tabs').tabs( "option", "active", coun+num );
function submitquestion(id,value,show,btn,question_id,test_id,addid)
{
    
        if($('input[name="'+value+'"]:checked').length > 0){
            var answer = $('input[name="'+value+'"]:checked').val();
            $('#'+id).attr('disabled',true);
            //$('#'+id).html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: "{{url('/user/addsugestion')}}",
                data: {"test_id":test_id,"question_id":question_id,"answer":answer},
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('#'+id).attr('disabled',false);
                     $('#'+id).html('Submit');   
                         
                    }
                    if(data.erro==101)
                    { 
                        $('.'+addid).attr('data-user_test_id',data.id);
                       $('.'+btn).attr('disabled',false);
                       //$('.'+btn).html('Submit'); 
                        $('#'+id).hide();
                        $(show).show();
                        $('.'+btn).attr('disabled',false);  
                    }
                },
            }); 
        }else{
             $(".dg1").html('Please Select a one option');
             $(".dg1").show();
            setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
        }
        
       
}

function submittest(form)
{
    if($('.'+form).valid())
    {
        var pageNumber='1';
        var data = $('.'+form).serialize();
        $.ajax({
        type : 'GET',
        data: data,
        url: "{{url('user/attempttest')}}/?page=" +pageNumber,
        success : function(data){
        pageNumber +=1;
        if(data.length == 0){
            alert('Not Question Found !!!');
        }else{
        if(data.html=='')
        {
           alert('Not Question Found !!!'); 
        }else if(data.html=='session')
        {
            window.location.href="{{url('/')}}";
        }else
        {
             
            $('.hereresult').html(data.html);
            $('#demo').show();
            $('.section1').hide();  
            $(function() {
            $('.test').fSelect();
            });
             $('#stopper').val("0");
           
            
        
        
        
        }
        
        }
        },error: function(data){
        
        },
        });
    }
    
}

	</script>
	
	
	<script type="text/javascript">

var timeoutHandle;
function count() {
 //alert();
var startTime = document.getElementById('timer').innerHTML;
var pieces = startTime.split(":");
var time = new Date(); time.setHours(pieces[0]);
time.setMinutes(pieces[1]);
time.setSeconds(pieces[2]);
var timedif = new Date(time.valueOf() - 1000);
var newtime = timedif.toTimeString().split(" ")[0];
var stopper=$('#stopper').val();
document.getElementById('timer').innerHTML=newtime;
 $.ajax({
        type : 'POST',
        data: {'newtime':newtime,"_token":"{{ csrf_token() }}"},
        url: "{{url('user/update_hours')}}",
        success : function(data){
       
        },error: function(data){
        
        },
        });
        if(stopper =='0')
        {
         document.getElementById('timer').innerHTML=newtime;  
            
        }
    
else if(newtime!=='00:00:00'){
setTimeout(count, 1000);
}else
{
   
    $('#stopper').val("0");
    $( "#finish" ).trigger( "click" );
            $('.hereresult').html(data.html);
            $('#demo').show();
            $('.section1').hide();  
            $(function() {
            $('.test').fSelect();
            }); 
document.getElementById('finish').click();
document.getElementById('timer').innerHTML=newtime;
}

}

</script>
	
	
	