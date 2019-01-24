<!DOCTYPE html>
<html lang="en">



<head>
    <title>Dashboard</title>
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

<body>
    <!--== MAIN CONTRAINER ==-->
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
                    <li class="active-bre"><a href="#"> Dashboard</a>
                    </li>

                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->
            <div class="ad-v2-hom-info">
                <div class="ad-v2-hom-info-inn">
                    <ul>
                        <li>
                            <div class="ad-hom-box ad-hom-box-1">
                                <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-question-circle-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Question</p>
                                    <h3>700</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-2">
                                <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-file-text-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Test</p>
                                    <h3>50</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-3">
                                <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Total Score</p>
                                    <h3>50/100</h3>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Recent Test</h4>

                            </div>
                            <div class="tab-inn table-responsive ">
                                <div class="table-desi">
                                    <table class="table table-hover" id="discount1">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Course</th>
                                                <th>Chapter</th>
                                                <th>Subject</th>
                                                <th>Score</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>24/6/2018</td>
                                                <td>Course 1</td>
                                                <td>Chapter 1</td>
                                                <td>Subject 1</td>
                                                <td>50</td>
                                            </tr>

                                            <tr>
                                                <td>24/6/2018</td>
                                                <td>Course 2</td>
                                                <td>Chapter 2</td>
                                                <td>Subject 2</td>
                                                <td>60</td>
                                            </tr>

                                            <tr>
                                                <td>26/6/2018</td>
                                                <td>Course 3</td>
                                                <td>Chapter 3</td>
                                                <td>Subject 3</td>
                                                <td>45</td>
                                            </tr>

                                            <tr>
                                                <td>20/6/2018</td>
                                                <td>Course 4</td>
                                                <td>Chapter 4</td>
                                                <td>Subject 4</td>
                                                <td>65</td>
                                            </tr>

                                            <tr>
                                                <td>28/6/2018</td>
                                                <td>Course 5</td>
                                                <td>Chapter 5</td>
                                                <td>Subject 5</td>
                                                <td>55</td>
                                            </tr>

                                        </tbody>
                                    </table>
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

    <!--== BOTTOM FLOAT ICON ==-->
  

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
		  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
<script> 
 $(document).ready(function() {
    $('#discount1').DataTable();
} );
</script>
</body>



</html>