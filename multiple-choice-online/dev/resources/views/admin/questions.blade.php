
         @include('admin/layouts.app2')
         <div class="page-wrapper">
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
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
 
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Questions</li>
                        </ol>
                        <button type="button" class="btn btn-info btn-rounded float-left btn-sm m-0" style="float-left:5px;" onclick="window.location.replace('<?php echo url('admin/upload_csv'); ?>');"><i class="mdi mdi-plus"></i> Upload CSV </button>
                 <button type="button" class="btn btn-info btn-rounded float-right btn-sm m-0"  data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus"></i> Add Question</button>
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
                                        <h4 class="card-title"><span class="lstick"></span>Questions</h4>
                                    </div>
                                </div>
                                
                             <span id="success_msg"></span>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
										<th class="">S No.</th>
                                        <th class="">Question</th>
									    <th class="">Added By</th>
									    <th class="">Status</th>
                                        <th class="">Action</th>
                                        </tr>
                                        </thead>
                                        <?php ///echo '<pre>';print_r($questions);echo '</pre>';?>
                                        <tbody>
                                        <?php $i='1';?>
                                       @foreach($questions as $q)
                                        <tr id="remove-{{$q->id}}">
										<td class="questionwidthequal"><?=$i++;?></td>
                                        <td class="questionwidthcontrol"><p class=" text-overflowd"><?php echo $q->question;?></p></td>
                                        <td class="questionwidthequal">@if($q->is_admin == '1')
                                           {{Auth::user()->name}}
                                            @else
                                           {{App\User::getname($q->user_id)}}
                                            @endif
                                        </td>
                                        <td><label class="switch">
                                                              <input type="checkbox" data-id="<?=$q->id;?>" @if($q->is_admin == '1') data-uid="0" @else data-uid="{{$q->user_id}}" @endif class="checkb checkbbaction<?=$q->id;?>" @if(!empty($q->qstatus)) @if($q->qstatus=='1') checked  @endif @endif>
                                                              <span class="slider"></span>
                                                            </label></td>
                                        <td class="questionwidthequal padding-left-0">
                                        <a href="javascript:void(0)" data-id="<?=$q->id;?>"  data-testid="<?=$q->testid;?>" class="btn-info mr-1 viewquestion"  >
                                        <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn-info mr-1 editquestion"  data-id="<?=$q->id;?>" data-testid="<?=$q->testid;?>" >
                                        <i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mr-1 delete_request1"  data-url-param1="question_answers"
                data-url-param2="{{ $q->id }}" data-toggle="modal" data-target="#delete_que"><i class="mdi mdi-delete-empty"></i></a>
                                            </td>
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
  <div class="modal fade bs-example-modal-md question-modal-btn" tabindex="-1" role="dialog" id="myModal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Add Question</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <form method="POST" action="javascript:void(0);" name="addquestion" class=""> 
                <span id="success_msg"></span> <div class="modal-body">
                <div class="row">

                       <div class="tab-inn ">
					   
					     {{csrf_field()}}

					   
					   
					   
							<p class="fontsize-p">Choose Your Priorities</p>
								 
								
                                   
									<div class="col-md-12">
										<div id="demo">
										
										<div class="row"> 	
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control cat_country js-example-basic-single" id="Country" name="country">
											    <option value="">Country </option>
											    <?php foreach($country as $c){ ?>
												<option value="<?=$c->id;?>"><?=$c->name;?></option>
												<?php } ?>
											</select>
										</div>



									</div>
									<div class="col-md-6">


										<div class="form-group lgbtn">

											<select class="form-control state_country js-example-basic-single" id="State" name="state">
												<option value="">State/Province</option>
											
											</select>
										</div>



									</div>
									<div class="col-md-6">



										<div class="form-group lgbtn">

											<select class="form-control category js-example-basic-single" id="Course" name="course">
												<option value="">Course</option>
											 <?php foreach($course as $c){ ?>
												<option value="<?=$c->id;?>"><?=$c->name;?></option>
												<?php } ?>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control js-example-basic-single" id="Grade" name="grade">
												<option value="">Grade/Level</option>
											<?php foreach($grades as $g){ ?>
												<option value="<?=$g->id;?>"><?=$g->name;?></option>
												<?php } ?>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control js-example-basic-single" id="Year" name="year">
												<option value="">Year</option>
												<?php foreach($years as $g){ ?>
												<option value="<?=$g->id;?>"><?=$g->name;?></option>
												<?php } ?>
											</select>
										</div>


									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control subcat js-example-basic-single" id="Subject" name="subject">
												<option value="">Subject</option>
											
											</select>
										</div>


									</div>
									<div class="col-md-6">
										<div class="form-group lgbtn">
											<select class="form-control subchapter js-example-basic-single" id="Chapter" name="chapter">
												<option value="">Chapter</option>
											
											</select>
										</div>
									</div>											
										</div>	
											
												<div class="row">
												<p class="fontsize-p">Question</p>

													<div class="form-group col-md-12">
														<textarea class="form-control" rows="3" name="question" placeholder="Question"></textarea>
													</div>
												</div>	
												<div class="row">
													<div class="form-group col-lg-6">
														<label for="Optiona">Option A</label>
														<input class="form-control" id="Optiona" name="optiona" type="text">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optionb">Option B</label>
														<input class="form-control" id="Optionb" name="optionb" type="text">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optionc">Option C</label>
														<input class="form-control" id="Optionc" name="optionc" type="text">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optiond">Option D</label>
														<input class="form-control" id="Optiond" name="optiond" type="text">
													</div>

													<div class="form-group col-lg-12 questioninput-size">
												<p class="fontsize-p pl-0">Correct Answer</p>
										
																						
												<!-- Material unchecked -->
																<div class="form-check-inline ">
																  <input type="radio" class="form-check-input" value="1" id="Option1" name="answer">
																  <label class="form-check-label" for="Option1">Option A</label>
																</div>

																<!-- Material checked -->
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" value="2"id="Option2" name="answer">
																  <label class="form-check-label" for="Option2">Option B</label>
																</div>
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" value="3" id="Option3" name="answer">
																  <label class="form-check-label" for="Option3">Option C</label>
																</div>

																<!-- Material checked -->
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" value="4" id="Option4" name="answer" >
																  <label class="form-check-label" for="Option4">Option D</label>
																</div>												
													</div>												

													
													
												
													

														  
										</div>



									</div>					
						</div>		    					
							
						</div>
											
                                       	   </div>
											
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect text-left" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success waves-effect text-left sbtconatct">Add</button>                                               
                                            </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                                
                                <div class="modal fade bs-example-modal-md question-modal-btn" tabindex="-1" role="dialog" id="viewquestionpop" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">View Question</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                
</div>
<!--div class="modal-footer border-0">
    <button type="button" class="btn btn-secondary waves-effect text-left" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-success waves-effect text-left">Add</button>
</div-->
</div>
</div>
<!-- /view question pop end -->
</div>

      <!-- Edit modal -->
    <div class="modal fade bs-example-modal-md question-modal-btn" tabindex="-1" role="dialog" id="edit" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Question</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                 <form method="POST" action="javascript:void(0);" name="addquestion1" class="">
                   <span id="success_msg"></span>   {{csrf_field()}}
                     <div class="modal-body">
                    </div>
                 </form>
            </div>
        </div>
    </div> 
    <!-- /Add Question -->
 
@include('admin/layouts.footer')
<script>
 $(document).ready(function() {
     
    $('select.js-example-basic-single').each(function () {
                $(this).select2({
                    dropdownParent: $(this).parent(),
                     width: '100%',
                });
            });
    });
    jQuery(".checkb").click(function(event){
         event.preventDefault();
       //event.stopPropagation();
        if(this.checked == true)
        {
            var value = '1';
            var vl ='approve';
        }else
        {
             var value ='0';
              var vl ='reject';
        }
       $(".changetextss").text("Do you need to "+vl+" before adding question submitted by the user to our question list");
        
        
         var id = $(this).attr('data-id');
         var uid = $(this).attr('data-uid');
        $('#dataids2').val(id);
        $('#datastatus2').val(uid);
        
        $('#vals').val(value);
        $('#approve_question').modal({
        backdrop: 'static',
        keyboard: false
        });
     $('#approve_question').modal('show');
    
});

$('.requestactionsscancel').click(function()
{
    var id = $('#dataids2').val();
    var uid =  $('#datastatus2').val();
    var value = $('#vals').val();
   
});

$('.requestactionss').click(function()
{
     var value = $('#vals').val();
      var id = $('#dataids2').val();
    
    
        
           var uid =  $('#datastatus2').val();
           
   var table='question_answers';
        var column= 'qstatus';
      var url = "{{ url('check-exists-update2') }}"+"/"+table+"/"+id+"/"+column+"/"+value+"/"+uid;

      $.ajax({
        url: url,
        async: false,
        success: function(data){
          //if(data.trim()) exists = true;
          if(data=='1')
          {
            if(value == '1')
            {
           
            $(".checkbbaction"+id).prop("checked", true);   
            }else
            {  
            $(".checkbbaction"+id).prop("checked", false);     
            }
              if(value=='1')
              {
                $(".as1").html('Question Approved Successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }else
              {
                $(".as1").html('Question Disapproved Successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }
              $('#approve_question').modal('hide');
          }else
          {
            $(".dg1").html('Error to update question status!');
             $(".dg1").show();  
             setTimeout(function(){  $(".dg1").hide();; }, 3000);
          }
             
        }
      }); 
})
</script>
 
   
