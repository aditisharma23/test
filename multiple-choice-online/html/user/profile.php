<!DOCTYPE html>
<html lang="en">



<head>
    <title>My Profile</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->

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
                        <li class="active-bre"><a href="#"> Question</a>
                        </li>
                        
                    </ul>
                </div>		


                <main class="pt-0 pb-0">
                    <div class="main-section trip-details">
                        <section class="companies-info tabs-friend userdetail-topspace">
                            <div class="container-fluid p-0">
                                <div class="row">
                                  <div class="col-lg-3">
                                      <div class="userdetailleftimg">
                                          <div class="icn-edit">
                                           <img src="images/user1.jpg" class="circle" width="100">
                                           <label class="icn-profl" for="profl">
                                            <i class="material-icons dp48">edit</i>
                                            <input type="file" id="profl">
                                        </label>
                                    </div>
                                    <h4>John Smith</h4>
                                    <p>admin@gmail.com</p>
                                    <p>+919811100000</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul class="nav nav-tabs " id="myTab" role="tablist">
                                    <li class="nav-item active">
                                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#my-friend" role="tab" aria-controls="my-friend" aria-selected="true" aria-expanded="true"><i class="fa fa-file-text"></i>Personal Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#friend-request" role="tab" aria-controls="friend-request" aria-selected="false" aria-expanded="true"><i class="fa fa-check-square"></i>Subscription Plan</a>
                                    </li>


                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active in" id="my-friend" role="tabpanel" aria-labelledby="home-tab" aria-expanded="false">
                                        <div class="companies-list userdetail-topspacetab">

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="main-ws-sec profiledetail">

                                                      <form>

                                                          <div class="form-group col-lg-6">
                                                            <label for="fstname">First Name</label>
                                                            <input class="form-control" id="fstname" type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="lstname">Last Name</label>
                                                            <input class="form-control" id="lstname" type="text">
                                                        </div>	

                                                        <div class="form-group col-lg-6">
                                                            <label for="phone">Phone No</label>
                                                            <input class="form-control" id="phone" type="text">
                                                        </div>	

                                                        <div class="form-group col-lg-6">
                                                            <label for="email">Email Address</label>
                                                            <input class="form-control" id="email" type="email">
                                                        </div>		
                                                        <div class="form-group col-lg-12">
                                                            <label for="address">Address</label>
                                                            <input class="form-control" id="address" type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="newpassword">New Password</label>
                                                            <input class="form-control" id="newpassword" type="text">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label for="conpassword">Confirm Password</label>
                                                            <input class="form-control" id="conpassword" type="text">
                                                        </div>
                                                        <div class="form-group col-lg-12 mt-3">
                                                            <input class="btn btn-primary" type="submit" value="Submit">
                                                        </div>	
                                                    </form>





                                                </div>

                                            </div>
                                        </div>
                                        <div class="process-comm">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                        <!--process-comm end-->
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="friend-request" role="tabpanel" aria-labelledby="home-tab" aria-expanded="false">
                                    <div class="companies-list userdetail-topspacetab">

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="main-ws-sec">

                                                 <div class="sb2-2-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="box-inn-sp">

                                                                <div class="tab-inn table-responsive ">
                                                                    <div class="table-desi">
                                                                        <table class="table table-hover" id="discount1" >
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Plan Name</th>
                                                                                    <th>Price</th>
                                                                                    <th>Payment Method</th>
                                                                                    <th>Expiry Date</th>



                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td>#W1234566</td>
                                                                                    <td>Gold</td>
                                                                                    <td>$150</td>
                                                                                    <td>Card</td>
                                                                                    <td>24/6/2018</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>#A1034566</td>
                                                                                    <td>platinum</td>
                                                                                    <td>$250</td>
                                                                                    <td>Card</td>
                                                                                    <td>20/6/2018</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>#D1234506</td>
                                                                                    <td>Gold</td>
                                                                                    <td>$200</td>
                                                                                    <td>Card</td>
                                                                                    <td>12/6/2018</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>#E1254266</td>
                                                                                    <td>platinum</td>
                                                                                    <td>$350</td>
                                                                                    <td>Card</td>
                                                                                    <td>24/7/2018</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>#F1233036</td>
                                                                                    <td>Gold</td>
                                                                                    <td>$250</td>
                                                                                    <td>Card</td>
                                                                                    <td>12/7/2018</td>
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

                                            <div class="process-comm">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                            <!--process-comm end-->
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--companies-info end-->

    </div>
</main>

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
    $('#example').DataTable();
} );
</script>
</body>



</html>