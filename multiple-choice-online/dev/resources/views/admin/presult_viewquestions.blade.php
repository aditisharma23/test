  @if(!empty($answers))
                            <?php
                            
                                   
                        if(isset($_GET['page']))
                        {
                             $i=$_GET['page']; 
                        }else
                        {
                             $i=1; 
                        }
                       
                   
                            
                            $id=''; ?>
							@foreach($answers as $key=>$answer)
							<?php 
							if($id!=$answer->id)
							{
							   $id=$answer->id;
							
							?> <?php } ?>
                            <div class="tab-inn ">
                                <div class="table-desi">
                                    <div class="row setcion1">
                                         
    								
    									
    									
    									<div class="clearfix"></div>
								
									</div>
									
								      <?php $key+=1; ?>
								      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-inn detail-page px-0 py-3">

                                 @if(!empty($answer->question)) <h3>Q{{$i++}}. <span>{{$answer->question}}</span></h3> @endif
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
                        @endif
                            @if(!empty($answers))
                            {!! $answers->render() !!}
                            @endif
                                </div>
                            </div>
                            @if(empty($answers) && Count($answers)=='0')
                            No Result Found!!!
                            @endif