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
 
                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Reports</li>
                            <li class="breadcrumb-item active">Report Details</li>
                        </ol>
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
                            
                                <div class="box-inn-sp">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q1. <span>Where did the real Boston Tea Party take place?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Washington dc</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Boston</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Philadelphia</p>
                                    </div>
                                </div>
                                <div class="suggestion">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="A. New york" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="5" id="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q2. <span>You are participating in a race. You've just passed the second person. What position are you now in?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p>1st</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>2nd</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="correct">3rd <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>4th</p>
                                    </div>
                                </div>
                                <!--div class="suggestion">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="C. 3rd" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div-->

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q3. <span>John digs a hole that is 2 yards wide, 3 yards long, and 1 yard deep. How many cubic feet of dirt are in it?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p>0</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="wrong">2
                                            <span class="ansreport">
                                                <i class="fa fa-times" aria-hidden="true"></i> Wrong Answer
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="correct">3 <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>5</p>
                                    </div>
                                </div>
                                <!--div class="suggestion">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="C. 3" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div-->

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q4. <span>Where did the real Boston Tea Party take place?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Washington dc</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Boston</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Philadelphia</p>
                                    </div>
                                </div>
                                <div class="suggestion">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="A. New york" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="5" id="comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q5. <span>John digs a hole that is 2 yards wide, 3 yards long, and 1 yard deep. How many cubic feet of dirt are in it?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p>0</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="correct">2 
                                            <span class="ansreport">
                                                <i class="fa fa-check" aria-hidden="true"></i> Correct Answer
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class="wrong">3
                                            <span class="ansreport">
                                                <i class="fa fa-times" aria-hidden="true"></i> Wrong Answer
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>5</p>
                                    </div>
                                </div>
                                <!--div class="suggestion">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="B.2" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div-->

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q6. <span>Where did the real Boston Tea Party take place?</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p class="correct">New york <i class="fa fa-check" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Washington dc</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Boston</p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p>Philadelphia</p>
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