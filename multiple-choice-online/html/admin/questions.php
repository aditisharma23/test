<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="#">
    <title>Multiple Choice Online</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css"> 
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/dashboard1.css" rel="stylesheet">
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">

    <!-- datatable css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/media/css/dataTables.bootstrap4.css"> 

</head>

<body class="fix-header fix-sidebar card-no-border">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
           <p class="loader__label">Multiple Choice Online</p>
        </div>
    </div>

    <div id="main-wrapper">

        <?php include 'header.php'; ?>


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include 'sidebar.php' ; ?>
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
 
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Questions</li>
                        </ol>
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
                            
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											<th class="">S No.</th>
                                                <th class="">Question</th>
												<th class="">Added By</th>
                                                <th class="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											<td class="questionwidthequal">1</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">Where did the real Boston Tea Party take place?</p></td>
                                            <td class="questionwidthequal">John Doe</td>
                                                <td class="questionwidthequal"><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#viewquestionpop"><i class="mdi mdi-eye"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            <tr>
											<td class="questionwidthequal">2</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">You are participating in a race. You've just</p></td>
                                       <td class="questionwidthequal">Jaqueline McGregor</td>
                                                <td class="questionwidthequal"><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#viewquestionpop"><i class="mdi mdi-eye"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            <tr>
											<td class="questionwidthequal">3</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">John digs a hole that is 2 yards wide, 3 yards</p></td>
                                       <td class="questionwidthequal">Cheryl McDonald</td>
                                                <td class="questionwidthequal"><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#viewquestionpop"><i class="mdi mdi-eye"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            <tr>
											<td>4</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">What is the capital of Florida?</p></td>
                                       <td>Timothy Gell</td>
                                                <td class="questionwidthequal"><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#viewquestionpop"><i class="mdi mdi-eye"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            <tr>
											<td class="questionwidthequal">5</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">Is Sweet bow spelled like this?</p></td>
                                       <td class="questionwidthequal">Karen Clark</td>
                                                <td class="questionwidthequal"><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#viewquestionpop"><i class="mdi mdi-eye"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            <tr>
											<td class="questionwidthequal">6</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">Where did the real Boston</p></td>
                                       <td class="questionwidthequal">Richard Boyd</td>
                                                <td class="questionwidthequal"><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#viewquestionpop"><i class="mdi mdi-eye"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>
                                            <tr>
											<td class="questionwidthequal">7</td>
                                             <td class="questionwidthcontrol"><p class=" text-overflowd">You are participating in a race. You've just passed</p></td>
                                       <td class="questionwidthequal">David Smith</td>
                                                <td class=""><a href="javascript:avoid(0)" class="btn-info mr-1"><i class="mdi mdi-eye" data-toggle="modal" data-target="#viewquestionpop"></i></a><a href="javascript:avoid(0)" class="btn-info mr-1" data-toggle="modal" data-target="#edit"><i class="mdi mdi-pencil"></i></a><a href="#" class=" btn-danger mt-1"   data-toggle="modal" data-target="#delete"><i class="mdi mdi-delete-empty"></i></a></td>
                                            </tr>                                       

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
            <?php include 'footer.php'; ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


<!-- Add Question -->
                                <div class="modal fade bs-example-modal-md question-modal-btn" tabindex="-1" role="dialog" id="myModal" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h2 class="modal-title" id="myLargeModalLabel">Add Question</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">

                       <div class="tab-inn ">
					   
					   
					   
					   
					   
							<p class="fontsize-p">Choose Your Priorities</p>
								<form>
								
                                   
									<div class="col-md-12">
										<div id="demo">
											<form>
										<div class="row"> 	
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Country">
												<option>Country</option>
												<option>India</option>
												<option>Australia</option>
												<option>Canada</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="State">
												<option>State/Province</option>
												<option>Delhi</option>
												<option>Punjab</option>
												<option>Haryana</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">



										<div class="form-group lgbtn">

											<select class="form-control" id="Course">
												<option>Course</option>
												<option>Course 2</option>
												<option>Course 3</option>
												<option>Course 4</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Grade">
												<option>Grade/Level</option>
												<option>Level 2</option>
												<option>Level 3</option>
												<option>Level 4</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Year">
												<option>Year</option>
												<option>2016</option>
												<option>2017</option>
												<option>2018</option>
											</select>
										</div>


									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Subject">
												<option>Subject</option>
												<option>Subject 2</option>
												<option>Subject 3</option>
												<option>Subject 4</option>
											</select>
										</div>


									</div>
									<div class="col-md-6">
										<div class="form-group lgbtn">
											<select class="form-control" id="Chapter">
												<option>Chapter</option>
												<option>Chapter 2</option>
												<option>Chapter 3</option>
												<option>Chapter 4</option>
											</select>
										</div>
									</div>											
										</div>	
											
												<div class="row">
												<p class="fontsize-p">Question</p>

													<div class="form-group col-md-12">
														<textarea class="form-control" rows="3" placeholder="Question"></textarea>
													</div>
												</div>	
												<div class="row">
													<div class="form-group col-lg-6">
														<label for="Optiona">Option A</label>
														<input class="form-control" id="Optiona" type="text">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optionb">Option B</label>
														<input class="form-control" id="Optionb" type="text">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optionc">Option C</label>
														<input class="form-control" id="Optionc" type="text">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optiond">Option D</label>
														<input class="form-control" id="Optiond" type="text">
													</div>

													<div class="form-group col-lg-12 questioninput-size">
												<p class="fontsize-p pl-0">Correct Answer</p>
										
																						
												<!-- Material unchecked -->
																<div class="form-check-inline ">
																  <input type="radio" class="form-check-input" id="Option1" name="materialExampleRadios">
																  <label class="form-check-label" for="Option1">Option A</label>
																</div>

																<!-- Material checked -->
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" id="Option2" name="materialExampleRadios">
																  <label class="form-check-label" for="Option2">Option B</label>
																</div>
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" id="Option3" name="materialExampleRadios">
																  <label class="form-check-label" for="Option3">Option C</label>
																</div>

																<!-- Material checked -->
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" id="Option4" name="materialExampleRadios" >
																  <label class="form-check-label" for="Option4">Option D</label>
																</div>												
													</div>												

													
													
												
													

														  
										</div>



									</div>					
								</form>    					
							</div>
						</div>
											
                                            </div>
											
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="btn btn-secondary waves-effect text-left" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success waves-effect text-left">Add</button>                                               
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /Add Question -->
                                
                                
                                 <!-- Edit modal -->
                                <div class="modal fade bs-example-modal-md question-modal-btn" tabindex="-1" role="dialog" id="edit" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h4 class="modal-title" id="myLargeModalLabel">Edit Question</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
 <div class="modal-body">
                                            <div class="row">

                       <div class="tab-inn ">
					   
					   
					   
					   
					   
							<p class="fontsize-p">Choose Your Priorities</p>
								<form>
								
                                   
									<div class="col-md-12">
										<div id="demo">
											<form>
										<div class="row"> 	
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Country">
												<option>Country</option>
												<option>India</option>
												<option>Australia</option>
												<option>Canada</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="State">
												<option>State/Province</option>
												<option>Delhi</option>
												<option>Punjab</option>
												<option>Haryana</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">



										<div class="form-group lgbtn">

											<select class="form-control" id="Course">
												<option>Course</option>
												<option>Course 2</option>
												<option>Course 3</option>
												<option>Course 4</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Grade">
												<option>Grade/Level</option>
												<option>Level 2</option>
												<option>Level 3</option>
												<option>Level 4</option>
											</select>
										</div>



									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Year">
												<option>Year</option>
												<option>2016</option>
												<option>2017</option>
												<option>2018</option>
											</select>
										</div>


									</div>
									<div class="col-md-6">




										<div class="form-group lgbtn">

											<select class="form-control" id="Subject">
												<option>Subject</option>
												<option>Subject 2</option>
												<option>Subject 3</option>
												<option>Subject 4</option>
											</select>
										</div>


									</div>
									<div class="col-md-6">
										<div class="form-group lgbtn">
											<select class="form-control" id="Chapter">
												<option>Chapter</option>
												<option>Chapter 2</option>
												<option>Chapter 3</option>
												<option>Chapter 4</option>
											</select>
										</div>
									</div>											
										</div>	
											
												<div class="row">
												<p class="fontsize-p">Question</p>

													<div class="form-group col-md-12">
														<textarea class="form-control" rows="3" placeholder=" Where did the real Boston Tea Party take place?"></textarea>
													</div>
												</div>	
												<div class="row">
													<div class="form-group col-lg-6">
														<label for="Optiona">Option A</label>
														<input class="form-control" id="Optiona" type="text" value="New york ">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optionb">Option B</label>
														<input class="form-control" id="Optionb" type="text" value="
Washington dc">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optionc">Option C</label>
														<input class="form-control" id="Optionc" type="text" value="Boston">
													</div>
													<div class="form-group col-lg-6">
														<label for="Optiond">Option D</label>
														<input class="form-control correctans" id="Optiond" type="text" value="
Philadelphia">
													</div>

													<div class="form-group col-lg-12 questioninput-size">
												<p class="fontsize-p pl-0">Correct Answer</p>
										
																						
												<!-- Material unchecked -->
																<div class="form-check-inline ">
																  <input type="radio" class="form-check-input" id="Option5" name="materialExampleRadios">
																  <label class="form-check-label" for="Option5">Option A</label>
																</div>

																<!-- Material checked -->
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" id="Option6" name="materialExampleRadios">
																  <label class="form-check-label" for="Option6">Option B</label>
																</div>
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" id="Option7" name="materialExampleRadios">
																  <label class="form-check-label" for="Option7" >Option C</label>
																</div>

																<!-- Material checked -->
																<div class="form-check-inline padding">
																  <input type="radio" class="form-check-input" id="Option8" name="materialExampleRadios" checked >
																  <label class="form-check-label" for="Option8">Option D</label>
																</div>												
													</div>												

													
													
												
													

														  
										</div>



									</div>					
								</form>    					
							</div>
						</div>
											
                                            </div>
											
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="btn btn-secondary waves-effect text-left" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success waves-effect text-left">Save Change</button>                                               
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /Edit modal -->   

<!-- delete modal -->
                                <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delete" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header p-0 border-0">
                                         
                                                <!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
                                            </div>
                                            <div class="modal-body text-center">
                                          
                                               <i class="mdi mdi-close"></i>
                                              <h1>Are you sure</h1>
											  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="#" class="btn btn-danger">Delete</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

	<!--add view modal-->							
 <div class="modal fade bs-example-modal-md question-modal-btn" tabindex="-1" role="dialog" id="viewquestionpop" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h2 class="modal-title" id="myLargeModalLabel">View Question</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="tab-inn ">
                       <p class="fontsize-p">Your Priorities</p>
                       <form>
                         <div class="col-md-12">
                          <div id="demo">
                           <form>
                              <div class="row">     
                                 <div class="col-md-6">
                                  <div class="form-group lgbtn">
                                   <select disabled="" class="form-control" id="Country">
                                    <option>Country</option>
                                    <option>India</option>
                                    <option>Australia</option>
                                    <option selected="">Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group lgbtn">
                           <select disabled="" class="form-control" id="State">
                            <option>State/Province</option>
                            <option selected="">Manitoba</option>
                            <option>Punjab</option>
                            <option>Haryana</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group lgbtn">

                   <select disabled="" class="form-control" id="Course">
                    <option>Course</option>
                    <option selected="">Course 2</option>
                    <option>Course 3</option>
                    <option>Course 4</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group lgbtn">
           <select disabled="" class="form-control" id="Grade">
            <option>Grade/Level</option>
            <option selected="">Level 2</option>
            <option>Level 3</option>
            <option>Level 4</option>
        </select>
    </div>
</div>
<div class="col-md-6">
  <div class="form-group lgbtn">

   <select disabled="" class="form-control" id="Year">
    <option>Year</option>
    <option>2016</option>
    <option>2017</option>
    <option selected="">2018</option>
</select>
</div>
</div>
<div class="col-md-6">
  <div class="form-group lgbtn">

   <select disabled="" class="form-control" id="Subject">
    <option>Subject</option>
    <option>Subject 2</option>
    <option>Subject 3</option>
    <option selected="">Subject 4</option>
</select>
</div>
</div>
<div class="col-md-6">
  <div class="form-group lgbtn">
   <select disabled="" class="form-control" id="Chapter">
    <option>Chapter</option>
    <option selected="">Chapter 2</option>
    <option>Chapter 3</option>
    <option>Chapter 4</option>
</select>
</div>
</div>                                          
</div>


<div class="row">
    <p class="fontsize-p mt-3">Your Question</p>
 <div class="form-group col-md-12">
  <textarea disabled="" class="form-control" rows="3" placeholder="Add Question">Where did the real Boston Tea Party take place?
</textarea>
</div>
</div>  
<div class="row">
 <div class="form-group col-lg-6">
  <label for="Optiona">Option A</label>
  <input class="form-control" id="Optiona" value="New york" type="text" disabled="">
</div>
<div class="form-group col-lg-6">
  <label for="Optionb">Option B</label>
  <input class="form-control" id="Optionb" value="Washington dc" type="text" disabled="">
</div>
<div class="form-group col-lg-6">
  <label for="Optionc">Option C</label>
  <input class="form-control" id="Optionc" value="Boston" type="text" disabled="">
</div>
<div class="form-group col-lg-6">
  <label for="Optiond">Option D</label>
  <input class="form-control correctans" id="Optiond" value="Philadelphia" type="text" disabled="">
</div>                                            
</div>

<div class="row">
<div class="form-group col-lg-12 questioninput-size">
<p class="fontsize-p pl-0 ml-0">Correct Answer</p>


<!-- Material unchecked -->
<div class="form-check-inline ">
 <input disabled="" type="radio" class="form-check-input disabled" id="Option11" name="materialExampleRadios">
 <label class="form-check-label" for="Option11">Option A</label>
</div>

<!-- Material checked -->
<div class="form-check-inline padding">
 <input disabled="" type="radio" class="form-check-input disabled" id="Option22" name="materialExampleRadios">
 <label class="form-check-label" for="Option22">Option B</label>
</div>
<div class="form-check-inline padding">
 <input disabled="" type="radio" class="form-check-input disabled" id="Option33" name="materialExampleRadios">
 <label class="form-check-label" for="Option33">Option C</label>
</div>

<!-- Material checked -->
<div class="form-check-inline padding">
 <input checked="" type="radio" class="form-check-input" id="Option44" name="materialExampleRadios">
 <label class="form-check-label" for="Option44">Option D</label>
</div>  
</div>
</div>


</div>                  
</form>                     
</div>
</div>
</div>
</div>
<!--div class="modal-footer border-0">
    <button type="button" class="btn btn-secondary waves-effect text-left" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-success waves-effect text-left">Add</button>
</div-->
</div>
</div>
<!-- /view question pop end -->
</div>
</div>								
								
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>


    <script>
    $(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>   
</body>

</html>