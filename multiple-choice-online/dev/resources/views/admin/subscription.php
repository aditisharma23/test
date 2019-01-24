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
                            <li class="breadcrumb-item active">Subscription</li>
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
                                    <div class="row mt-5">
                    <div class="col-lg-4 offset-2">
                        <div class="mt-3 pricing_plan_box bg-white pos-w-delt">
							<a href="#" class="cross-s"> <i class="fa fa-times"></i> </a>
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-uppercase mb-0">Free Starter</h4>
                                    <div class="pricing_devider mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold mb-0"><sup>$</sup>0/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features mb-0">
                                <p><i class="mdi mdi-check icon_success_color"></i> Additional Features</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Maximum Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>24/7 Pve Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Custom Domain</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Free Email Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Single User</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn_custom">Edit Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-3 pricing_plan_box active pos-w-delt">
							<a href="#" class="cross-s"> <i class="fa fa-times"></i> </a>
                            <div class="lable">
                                <h6 class="best mb-0 text-uppercase">Popular &nbsp;Plan</h6>
                            </div>
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-white text-uppercase mb-0">Pro</h4>
                                    <div class="pricing_devider bg-white mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold text-white mb-0"><sup>$</sup>5/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features text-white mb-0">
                                <p><i class="mdi mdi-check icon_success_color"></i>Additional Features</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Maximum Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>24/7 Pve Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Custom Domain</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Free Email Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Single User</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn  btn-white">Edit Plan</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4">
                        <div class="mt-3 pricing_plan_box bg-white">
                            <div class="pricing_header text-center">
                                <div class="price-name">
                                    <h4 class="font-weight-bold text-uppercase mb-0">Ultra</h4>
                                    <div class="pricing_devider mx-auto mt-2"></div>
                                </div>
                                <div class="price_tag_heading mt-4">
                                    <h3 class="font-weight-bold mb-0"><sub>$</sub>99/<span>month</span></h3>
                                </div>
                            </div>
                            <div class="list_price_features mb-0">
                                <p><i class="mdi mdi-check icon_success_color"></i> Additional Features</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Maximum Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>24/7 Pve Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Custom Domain</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Free Email Support</p>
                                <p><i class="mdi mdi-check icon_success_color"></i>Single User</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn_custom">Choose Plan</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'footer.php'; ?>

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