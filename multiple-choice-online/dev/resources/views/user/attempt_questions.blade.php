                            <input type="hidden" name="pre_que_id" value="{{$pre_que_id}}">
                            <ul class="step-steps" style="display:none">
                                            @if(!empty($answers))
                                            @foreach($answers as $key=> $answer)
                                            <?php $key+=1; ?>
                                            <li><a href="#tab{{$key}}"><span class="number">{{$key}}</span> </br>Step {{$key}}</a></li>
                                            @endforeach
                                            @endif
                                        </ul>
                                        <div class="step-content p-0">
                                             @if(!empty($answers))
                                             <?php $totals = count($answers); ?>
                                            @foreach($answers as $keys=> $answer)
                                            <?php $keys+=1; $upto = $keys;  ?>
                                            <div class="step-tab-panel @if($keys=='1') active @endif" data-count="{{$keys}}" id="tab{{$keys}}">
                                                <div class="row">
                                                    <div class="col-xs-1 widthauto"><h3>Q{{$keys}}.</h3></div>
                                                    <div class="col-xs-11 pl-0">
                                                        <h3><span>{{$answer->question}}</span></h3>
                                                    </div>
                                                </div>
                                                      <input type="hidden" name="id[{{$keys}}]" value="{{$answer->id}}">
                                                    <label class="container alltestwidth">{{$answer->optiona}}
                                                        <input type="radio"  value="1" name="answer[{{$keys}}]">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">{{$answer->optionb}}
                                                        <input type="radio" value="2" name="answer[{{$keys}}]">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">{{$answer->optionc}}
                                                        <input type="radio" value="3" name="answer[{{$keys}}]">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">{{$answer->optiond}}
                                                        <input type="radio" value="4"  name="answer[{{$keys}}]">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="">
                                            <button id="dis{{$keys}}" type="button" onclick="submitquestion('dis{{$keys}}','answer[{{$keys}}]','#submit{{$keys}}','nextbtnid{{$keys}}','{{$answer->id}}','{{$pre_que_id}}','clicksubmitsu{{$keys}}')" class="btn btn-info attempt-test-button ml-0" >Submit</button>																			
                                            <div class="">
                                            
                                            <div id="submit{{$keys}}" class="collapse">
                                            <div class="tab-inn detail-page p-0 ">
                                            
                                            <h3 class="mt-2"><span>Correct Answer</span></h3>
                                            <div class="row ans-options start-answer">
                                            <div class="col-md-6 relative">  
                                            <p class="@if($answer->answer=='1') correct @else line @endif">{{$answer->optiona}}@if($answer->answer=='1')  <i class="fa fa-check" aria-hidden="true"></i> @endif</p>
                                            </div>
                                            <div class="col-md-6 relative">
                                            <p class="@if($answer->answer=='2') correct @else line @endif">{{$answer->optionb}}@if($answer->answer=='2')  <i class="fa fa-check" aria-hidden="true"></i> @endif</p>
                                            </div>
                                           
                                            <div class="col-md-6 relative">
                                            <p class=" @if($answer->answer=='3') correct @else line @endif">{{$answer->optionc}}@if($answer->answer=='3')  <i class="fa fa-check" aria-hidden="true"></i> @endif</p>
                                            </div>
                                             <div class="col-md-6 relative">
                                            <p class=" @if($answer->answer=='4') correct @else line @endif">{{$answer->optiond}}@if($answer->answer=='4')  <i class="fa fa-check" aria-hidden="true"></i> @endif</p>
                                            </div>
                                            </div>
                                            </div>
                                            <button type="button" class="btn btn-default mt-1 myModals{{$keys}}"  data-toggle="modal" data-target="#myModals{{$keys}}">Suggest Your Answer</button>
                                            </div>
                                            </div>										
                                            </div>
                                            
                                            <div class="row">
                                                <div class="step-footer col-lg-12 mt-3">
                                                    <ul>
                                                    @if($keys!='1')
                                                      <button data-direction="prev" class="step-btn prevoius prevoius-tab btn-primary btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous</button>
                                                     @endif
                                                     @if($upto!=$totals)
                                                    <button data-direction="next" class="step-btn next  next-tab btn btn-primary nextbtnid{{$keys}}" disabled="disabled">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                                      @endif
                                                     @if($upto==$totals)
                                                    <button data-direction="finish" disabled="disabled"  id="finish" onclick="submittest('attemptest');" class="step-btn finish btn btn-success nextbtnid{{$keys}}"><i class="fa fa-check" aria-hidden="true"></i>  Finish</button>
                                                     @endif
                                                    </ul>	
                                                </div>
                                            </div>    

                                            </div>
                                            
                                            <div class="modal fade alltestsectiomodal" id="myModals{{$keys}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!--div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div-->
            <div class="modal-body">
                <h3>{{$keys}}.<span> {{$answer->question}}</span></h3>
                <div class="form-group">

                    <select class="test adnswers{{$keys}}" name="adnswers{{$keys}}" required>
                        <optgroup>
                            <option value="1">{{$answer->optiona}}</option>
                            <option value="2">{{$answer->optionb}}</option>
                            <option value="3">{{$answer->optionc}}</option>
                            <option value="4">{{$answer->optiond}}</option>

                        </optgroup>

                    </select>
                    <span class="slectbox{{$keys}}" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="comment{{$keys}}" rows="5" id="comment{{$keys}}" required></textarea>
                    <span class="commmentbox{{$keys}}" style="display:none;color:red;font-size: 12px;font-weight: 500;">This Field is required</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-Success clicksubmitsu clicksubmitsu{{$keys}}" data-count="{{$keys}}"  data-test_id="{{$pre_que_id}}" data-modal="myModals{{$keys}}" data-questionid="{{$answer->id}}" data-answer="{{$answer->answer}}" >Submit</button>
            </div>
        </div>

    </div>
</div>
                                            
                                              @endforeach
                                            @endif
                                            <!--div class="step-tab-panel" id="tab2">
                                                <div class="row">
                                                    <div class="col-xs-1 widthauto"><h3>Q2.</h3></div>
                                                    <div class="col-xs-11 pl-0">
                                                        <h3><span>You are participating in a race. You've just passed the second person. What position are you now in?</span></h3>
                                                    </div>
                                                </div>
                                                <form name="frmLogin" id="frmInfo">

                                                    <label class="container alltestwidth">Second Position
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Third Position


                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Forth Position


                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">It depends on which direction you’re running.
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </form>
                                            </div>
                                            <div class="step-tab-panel" id="tab3">
                                                <div class="row">
                                                    <div class="col-xs-1 widthauto"><h3>Q3.</h3></div>
                                                    <div class="col-xs-11 pl-0">
                                                        <h3><span>John digs a hole that is 2 yards wide, 3 yards long, and 1 yard deep. How many cubic feet of dirt are in it?</span></h3>
                                                    </div>
                                                </div>
                                                <form>
                                                    <label class="container alltestwidth">The hole is 6 cubic yards

                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">There is no dirt in the hole
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">0 cubic feet
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">The hole is 8 cubic yards
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </form>
                                            </div>
                                            <div class="step-tab-panel" id="tab4">
                                                <div class="row">
                                                    <div class="col-xs-1 widthauto"><h3>Q4.</h3></div>
                                                    <div class="col-xs-11 pl-0">
                                                        <h3><span>What is the capital of Florida?</span></h3>
                                                    </div>
                                                </div>
                                                <form>

                                                    <label class="container alltestwidth">Tallahassee
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Miami
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Orlando
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Tampa Bay
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </form>
                                            </div-->
                                        </div>


                                            <!--<div class="">
                                            <button id="dis" type="button" class="btn btn-info attempt-test-button ml-2" data-toggle="collapse" data-target="#submit">Submit</button>																			
                                            <div class="col-lg-12">
                                            
                                            <div id="submit" class="collapse">
                                            <div class="tab-inn detail-page p-0 ">
                                            
                                            <h3 class="mt-2"><span>Correct Answer</span></h3>
                                            <div class="row ans-options start-answer">
                                            <div class="col-md-6 relative">
                                            <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-md-6 relative">
                                            <p class="line">Washington dc</p>
                                            </div>
                                            <div class="col-md-6 relative">
                                            <p class="line">Boston</p>
                                            </div>
                                            <div class="col-md-6 relative">
                                            <p class="line">Philadelphia</p>
                                            </div>
                                            </div>
                                            
                                            
                                            </div>
                                            <button type="button" class="btn btn-default mt-1" data-toggle="modal" data-target="#myModal1">Suggest Your Answer</button>
                                            </div>
                                            
                                            
                                            </div>										
                                            </div>-->
                                        <!--<div class="step-footer col-lg-12 mt-5">
									

										<ul>
                                            <button data-direction="prev" class="step-btn prevoius btn-primary btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous</button>
                                            <button data-direction="next" class="step-btn next btn btn-primary">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                            <button onclick="window.location.href='{{url('/test-summary')}}'" data-direction="finish" class="step-btn finish btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>  Finish</button>
										</ul>	
                                        </div>-->