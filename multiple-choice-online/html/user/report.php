<!DOCTYPE html>
<html lang="en">



<head>
    <title>Manage Transaction</title>
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

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Reports</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Report</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover reporttable">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Question</th>
                                                    <th>Submitted Answer</th>
                                                    <th>Suggested Answer</th>
                                                     <th>View</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
											
                                                <tr>
                                                    <td><span class="badge">10/6/2018</span></td>
                                                    <td>5</td>
													<td>11</td>
													<td>17</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                                 </tr>
												
                                                <tr>
                                                    <td><span class="badge">29/7/2018</span></td>
                                                    <td>3</td>
                                                    <td>51</td>
                                                    <td>22</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="badge">19/5/2018</span></td>
                                                    <td>2</td>
                                                    <td>35</td>
                                                    <td>15</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                               </tr>
												
                                                <tr>
                                                    <td><span class="badge">12/6/2018</span></td>
                                                    <td>30</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                               </tr>
												
                                                <tr>
                                                    <td><span class="badge">20/7/2018</span></td>
                                                    <td>11</td>
                                                    <td>7</td>
                                                    <td>1</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                               </tr>
												
                                                <tr>
                                                    <td><span class="badge">25/6/2018</span></td>
                                                    <td>2</td>
                                                    <td>5</td>
                                                    <td>21</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
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

    <!--== BOTTOM FLOAT ICON ==-->


    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>



</html>