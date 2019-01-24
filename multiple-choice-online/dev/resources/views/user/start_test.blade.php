@include('user/layouts.app2')

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#">Attempt Test</a>
                    </li>
                    <li class="active-bre"><a href="#">Start Test</a>
                    </li>					

                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="box-inn-sp questionsection">
                    <div class="row">
                        <div class="tab-inn ">

                            <div class="col-md-12 alltest">

                                <div id="demo">
                                    <div class="step-app">

                                        <ul class="step-steps" style="display:none">
                                            <li><a href="#tab1"><span class="number">1</span> </br>Step 1</a></li>
                                            <li><a href="#tab2"><span class="number">2</span></br> Step 2</a></li>
                                            <li><a href="#tab3"><span class="number">3</span></br> Step 3</a></li>
                                            <li><a href="#tab4"><span class="number">4</span></br> Step 4</a></li>
                                        </ul>
                                        <div class="step-content">
                                            <div class="step-tab-panel" id="tab1">
                                                <div class="row">
                                                    <div class="col-xs-1 widthauto"><h3>Q1.</h3></div>
                                                    <div class="col-xs-11 pl-0">
                                                        <h3><span>Where did the real Boston Tea Party take place?</span></h3>
                                                    </div>
                                                </div>
                                                <form>

                                                    <label class="container alltestwidth">New york
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Washington dc
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Boston
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container alltestwidth">Philadelphia
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </form>
                                            </div>
                                            <div class="step-tab-panel" id="tab2">
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
                                            </div>
                                        </div>


																			<div class="">
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
										</div>
                                        <div class="step-footer col-lg-12 mt-5">
									

										<ul>
                                            <button data-direction="prev" class="step-btn prevoius btn-primary btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous</button>
                                            <button data-direction="next" class="step-btn next btn btn-primary">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                            <button onclick="window.location.href='{{url('/test-summary')}}'" data-direction="finish" class="step-btn finish btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>  Finish</button>
										</ul>	
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>

<!-- tab1 -->
<div class="modal fade alltestsectiomodal" id="myModal1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!--div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div-->
            <div class="modal-body">
                <h3><span> Where did the real Boston Tea Party take place?</span></h3>
                <div class="form-group">

                    <select class="test " multiple="multiple">
                        <optgroup>
                            <option value="1">New york</option>
                            <option value="2">Washington dc</option>
                            <option value="3">Boston</option>
                            <option value="4">Philadelphia</option>
                        </optgroup>

                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-Success">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



    <!--======== SCRIPT FILES =========-->
    <script src="{{url('/')}}/resources/views/user/js/jquery.min.js"></script>
    <script src="{{url('/')}}/resources/views/user/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/resources/views/user/js/materialize.min.js"></script>
    <!-- <script src="js/custom.js"></script> -->
	<script src="{{url('/')}}/resources/views/user/js/fSelect.js"></script>
	
  <script src="{{url('/')}}/resources/views/user/js/jquery-steps.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>


 

	@include('user/layouts.footer')