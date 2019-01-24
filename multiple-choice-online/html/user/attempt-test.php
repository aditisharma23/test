<!DOCTYPE html>
<html lang="en">



<head>
    <title>Attempt Test</title>
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
		 
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/jquery-steps.css">
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
                    <li class="active-bre"><a href="#">Attempt Test</a>
                    </li>

                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="box-inn-sp questionsection attemptsection">
                    <div class="row">
                        <div class="tab-inn ">
						<p  class="fontsize-p">Please Fill The Required Details In Order To Proceed</p>
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

                                    <a href="start-test.php" class="btn btn-primary" data-toggle="collapse" data-target="#demo" aria-expanded="false">Proceed</a>
                                </div>

                                <div class="col-md-12 alltest">

                                    <div id="demo" class="collapse">
                                        <div class="step-app">

                                            <ul class="step-steps" style="display:none">
                                                <li><a href="#tab1"><span class="number">1</span> </br>Step 1</a></li>
                                                <li><a href="#tab2"><span class="number">2</span></br> Step 2</a></li>
                                                <li><a href="#tab3"><span class="number">3</span></br> Step 3</a></li>
                                                <li><a href="#tab4"><span class="number">4</span></br> Step 4</a></li>
                                            </ul>
                                            <div class="step-content">
                                                <div class="step-tab-panel" id="tab1">
                                                    <h3>1. <span> Where did the real Boston Tea Party take place?</span></h3>
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
                                                    <h3>2.<span>You are participating in a race. You've just passed the second person. What position are you now in?</span></h3>
                                                    <form name="frmLogin" id="frmInfo">

                                                        <label class="container alltestwidth">1st
                                                            <input type="radio" checked="checked" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container alltestwidth">2nd
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container alltestwidth">3rd
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container alltestwidth">4th
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                    </form>
                                                </div>
                                                <div class="step-tab-panel" id="tab3">
                                                    <h3>3.<span>John digs a hole that is 2 yards wide, 3 yards long, and 1 yard deep. How many cubic feet of dirt are in it?</span></h3>
                                                    <form>
                                                        <label class="container alltestwidth">0
                                                            <input type="radio" checked="checked" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container alltestwidth">2
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container alltestwidth">3
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container alltestwidth">5
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                    </form>
                                                </div>
                                                <div class="step-tab-panel" id="tab4">
                                                    <h3>4.<span>What is the capital of Florida?</span></h3>
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

                                            <div class="step-footer">
                                                <button type="button" class="btn btn-info btn-lg submitqust" data-toggle="modal" data-target="#myModal1">Suggest Your Answer</button>
                                                <button data-direction="prev" class="step-btn prevoius">Previous</button>
                                                <button data-direction="next" class="step-btn next">Next</button>
                                                <button data-direction="finish" class="step-btn finish">Finish</button>
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
                <h3>1.<span> Where did the real Boston Tea Party take place?</span></h3>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-Success">Submit</button>
            </div>
        </div>

    </div>
</div>


    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <!-- <script src="js/custom.js"></script> -->
	<script src="js/fSelect.js"></script>
	
  <script src="js/jquery-steps.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>


 <script>
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 3) {
          if (stepDirection === 'forward') {
            var valid = frmLogin.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmLoginValidator.resetForm();
          }
        }

        // tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmInfo.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmInfoValidator.resetForm();
          }
        }

        // tab3
        if (currentIndex === 4) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>
	
<script>
(function($) {
    $(function() {
        $('.test').fSelect();
    });
})(jQuery);
</script>


</body>


</html>