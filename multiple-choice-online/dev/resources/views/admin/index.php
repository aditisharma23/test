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
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">

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
        <!-- End Topbar header -->
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
 
                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                    <!-- </div> -->
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card  indexicon bg-success">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><!-- <span class="lstick m-r-20"></span> --><i class="mdi mdi-account-multiple text-white "></i></div>
                                    <div class="align-self-center">
                                    
                                        <h6 class="text-white m-t-10 m-b-0">Total Users</h6>
                                        <h2 class="text-white  m-t-0">300</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card indexicon bg-warning">
                            <div class="card-body">
                                <div class="d-flex no-block text-white ">
                                    <div class="m-r-20 align-self-center"><!-- <span class="lstick m-r-20"></span> --><i class="fas fa-question"></i></div>
                                    <div class="align-self-center">
                                    
                                        <h6 class="text-white  m-t-10 m-b-0">Total Questions</h6>
                                        <h2 class="text-white  m-t-0">700</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card indexicon bg-primary">
                            <div class="card-body">
                                <div class="d-flex no-block text-white ">
                                    <div class="m-r-20 align-self-center"><!-- <span class="lstick m-r-20"></span> --><i class="
 far fa-file-excel"></i></div>
                                    <div class="align-self-center">
                                        <h6 class="text-white m-t-10 m-b-0">Attempted Test</h6>
                                        <h2 class="text-white  m-t-0">22</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Recent Users</h4></div>

                                </div>
                                <div class="table-responsive m-t-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
												<th>Country</th>
												<th>DOB</th>
												<th>Age</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round"><img src="images/1.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Sunil Joshi</h6></td>
												<td>America</td>
	                                            <td>24/10/1990</td>
                                                <td>28</td> 												
                                                <td>admin@gmail.com</td>
                                                <td>+013498765670</td>
                                                <td>9712,Lorem Ipsum</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="images/2.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Andrew</h6></td>
												<td>Canada</td>
	                                            <td>24/7/1995</td>
                                                <td>23</td>  												
                                                <td>lorem@gmail.com</td>
                                                <td>+016598712345</td>
                                                <td>9712,Lorem Ipsum</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success"><img src="images/3.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Bhavesh patel</h6></td>
												<td>Australia</td>
	                                            <td>14/10/1988</td>
                                                <td>30</td> 												
                                                <td>user@gmail.com</td>
                                                <td>+019498765578</td>
                                                <td>9712,Lorem Ipsum</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary"><img src="images/4.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Nirav Joshi</h6></td>
												<td>India</td>
	                                            <td>20/11/1993</td>
                                                <td>25</td> 												
                                                <td>admin@gmail.com</td>
                                                <td>+019754876567</td>
                                                <td>9712,Lorem Ipsum</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning"><img src="images/5.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Micheal Doe</h6></td>
												<td>Italy</td>
	                                            <td>12/12/1991</td>
                                                <td>26</td> 												
                                                <td>lorem@gmail.com</td>
                                                <td>+018498760987</td>
                                                <td>9712,Lorem Ipsum</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-danger"><img src="images/6.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Johnathan</h6></td>
												<td>Japan</td>
	                                            <td>26/8/1994</td>
                                                <td>24</td> 												
                                                <td>user@gmail.com</td>
                                                <td>+013498765667</td>
                                                <td>9712,Lorem Ipsum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Recent Users</h3>
                                        <h6 class="card-subtitle">Year 2018</h6></div>
                                    <div class="ml-auto">
                                        <ul class="list-inline">
                                            <li>
                                                <div class="d-flex">
                                                    <i class="fa fa-circle font-10 m-r-10 text-primary m-t-10"></i>
                                                    <div>
                                                        <h2 class="m-b-0">10368</h2>
                                                        <h6 class="text-muted">Earning</h6></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <i class="fa fa-circle font-10 m-r-10 text-info m-t-10"></i>
                                                    <div>
                                                        <h2 class="m-b-0">12659</h2>
                                                        <h6 class="text-muted">Expense</h6></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <i class="fa fa-circle font-10 m-r-10 text-muted m-t-10"></i>
                                                    <div>
                                                        <h2 class="m-b-0">15478</h2>
                                                        <h6 class="text-muted">Sales</h6></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="sales-overview" class="p-relative" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div-->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <?php include 'footer.php'; ?>

        </div>
 
    </div>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!-- <script src="../assets/plugins/toast-master/js/jquery.toast.js"></script> -->
    <script src="js/dashboard1.js"></script>
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>



</html>