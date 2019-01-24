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
                            <li class="breadcrumb-item active">Total Test</li>
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
                            
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
											    <th>S No.</th>
                                                <th>Date</th>
                                                <th>Total Questions</th>
                                                <th>Correct Answers</th>
                                                <th>Scores</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											    <td>1</td>
                                                <td><span class="badge badge-secondary">10 Oct 2018</span></td>
                                                <td>61</td>
                                                <td>59</td>
                                                <td><span class="badge badge-info">99%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
											<td>2</td>
                                                <td><span class="badge badge-secondary">15 Sep 2018</span></td>
                                                <td>63</td>
                                                <td>55</td>
                                                <td><span class="badge badge-info">92%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
											<td>3</td>
                                                <td><span class="badge badge-secondary">31 Sep 2018</span></td>
                                                <td>70</td>
                                                <td>62</td>
                                                <td><span class="badge badge-info">92%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
											<td>4</td>
                                                <td><span class="badge badge-secondary">20 Aug 2018</span></td>
                                                <td>58</td>
                                                <td>26</td>
                                                <td><span class="badge badge-danger">50%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
											<td>5</td>
                                                <td><span class="badge badge-secondary">05 Aug 2018</span></td>
                                                <td>62</td>
                                                <td>42</td>
                                                <td><span class="badge badge-primary">62%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
											<td>6</td>
                                                <td><span class="badge badge-secondary">03 Aug 2018</span></td>
                                                <td>56</td>
                                                <td>26</td>
                                                <td><span class="badge badge-danger">50%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
											<td>7</td>
                                                <td><span class="badge badge-secondary">10 Oct 2018</span></td>
                                                <td>60</td>
                                                <td>52</td>
                                                <td><span class="badge badge-success">80%</span></td>
                                                <td>
                                                    <a href="user-test-details.php" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
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