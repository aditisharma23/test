<!DOCTYPE html>
<html lang="en">



<head>
	<title>Question</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--== FAV ICON ==-->
	<link rel="shortcut icon" href="images/fav.ico">

	<!-- FONT-AWESOME ICON CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!--== ALL CSS FILES ==-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mob.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/materialize.css" />
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css"/>
	<link href="css/bootstrap-glyphicons.css" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900&amp;subset=latin-ext" rel="stylesheet">

</head>

<body class="questionpagebgcolor">      

	<!-- header -->
	<?php include 'header.php'; ?>
	<!-- // header -->

	<!--== BODY CONTNAINER ==-->
	<div class="container-fluid sb2">
		<div class="row">


			<!-- sidemenu -->
			<?php include 'sidenav.php'; ?>
			<!-- // sidemenu -->

			<!--== BODY INNER CONTAINER ==-->
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
						</li>
						<li class="active-bre"><a href="#"> Question</a>
						</li>

					</ul>
				</div>
				<!--== DASHBOARD INFO ==-->


				<!--== User Details ==-->
				<div class="sb2-2-3">
					<div class="box-inn-sp questionsection">
						<div class="row">
							<div class="tab-inn ">
								<p class="fontsize-p">Choose Your Priorities</p>
								<form>
									<div class="col-md-4">




										<div class="form-group lgbtn">

											<select class="form-control" id="Country">
												<option>Country</option>
												<option>India</option>
												<option>Australia</option>
												<option>Canada</option>
											</select>
										</div>



									</div>
									<div class="col-md-4">




										<div class="form-group lgbtn">

											<select class="form-control" id="State">
												<option>State/Province</option>
												<option>Delhi</option>
												<option>Punjab</option>
												<option>Haryana</option>
											</select>
										</div>



									</div>
									<div class="col-md-4">



										<div class="form-group lgbtn">

											<select class="form-control" id="Course">
												<option>Course</option>
												<option>Course 2</option>
												<option>Course 3</option>
												<option>Course 4</option>
											</select>
										</div>



									</div>
									<div class="col-md-4">




										<div class="form-group lgbtn">

											<select class="form-control" id="Grade">
												<option>Grade/Level</option>
												<option>Level 2</option>
												<option>Level 3</option>
												<option>Level 4</option>
											</select>
										</div>



									</div>
									<div class="col-md-4">




										<div class="form-group lgbtn">

											<select class="form-control" id="Year">
												<option>Year</option>
												<option>2016</option>
												<option>2017</option>
												<option>2018</option>
											</select>
										</div>


									</div>
									<div class="col-md-4">




										<div class="form-group lgbtn">

											<select class="form-control" id="Subject">
												<option>Subject</option>
												<option>Subject 2</option>
												<option>Subject 3</option>
												<option>Subject 4</option>
											</select>
										</div>


									</div>
									<div class="col-md-4">
										<div class="form-group lgbtn">
											<select class="form-control" id="Chapter">
												<option>Chapter</option>
												<option>Chapter 2</option>
												<option>Chapter 3</option>
												<option>Chapter 4</option>
											</select>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group col-sm-12 mt-1 mb-4">
										<a href="question-detail.php" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Proceed</a>
									</div>
									<div class="col-md-12">
										<div id="demo" class="collapse">
											<form>
												<div class="row">
													<div class="form-group col-md-12">
														<input class="form-control" id="" type="text" value="" placeholder="Add Question">
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


													<div class="clearfix"></div>
													<h3 class="mt-5">Correct Answer</h3>
													<div class="form-group col-lg-12">
														<select class="test" multiple="multiple">
															<optgroup>
																<option value="1">Option A</option>
																<option value="2" >Option B</option>
																<option value="3">Option C</option>
																<option value="4" >Option D</option>
															</optgroup>

														</select>
													</div>													

													<div class="form-group col-lg-12 mb-5 mt-3">
													  <button type="button" class="btn btn-info pull-left" data-toggle="collapse" data-target="#demo1">Add More</button>
														<button class="btn btn-primary pull-right question-btn" type="button">Submit</button>
														<button class="btn btn-default pull-right question-btn" type="button">Cancel</button>
														
													
														
														
													</div>	
													
														  <div id="demo1" class="collapse col-lg-12">
	

									
												<div class="row">
													<div class="form-group col-md-12">
														<input class="form-control" id="" type="text" value="" placeholder="Add Question">
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


													<div class="clearfix"></div>
													<h3 class="mt-5">Correct Answer</h3>
													<div class="form-group col-lg-12">
														<select class="test" multiple="multiple">
															<optgroup>
																<option value="1">Option A</option>
																<option value="2" >Option B</option>
																<option value="3">Option C</option>
																<option value="4" >Option D</option>
															</optgroup>

														</select>
													</div>		
												

												</div>
											</div>
										</div>



									</div>					
								</form>    					
							</div>
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


		<!--======== SCRIPT FILES =========-->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<!-- <script src="js/custom.js"></script> -->
		<script src="js/fSelect.js"></script>
		<script>
			(function($) {
				$(function() {
					$('.test').fSelect();
				});
			})(jQuery);
		</script>
	</body>



	</html>