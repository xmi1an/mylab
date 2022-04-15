<?php
session_start();
include_once('../includes/config.php');
if (!isset($_SESSION['aid'])) {
    header('location: logout.php');
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Covid-Tms | Dashboard</title>

        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- Custom styles for this template-->
        <link href="../css/bootstrapMinty.min.css" rel="stylesheet">
        <link href="../css/sb-admin-2.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php include_once('../includes/sidebar.php'); ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php include_once('../includes/topbar.php'); ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="bwdates-report-ds.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <?php
                            //Total Laboratory
                            $query = mysqli_query($con, "select * from labmaster");
                            $totallab = mysqli_num_rows($query);
                            //Assigned tests
                            $query1 = mysqli_query($con, "select id from tbltestrecord where ReportStatus='Assigned'");
                            $totalassigned = mysqli_num_rows($query1);
                            //On the way for sample collection
                            $query2 = mysqli_query($con, "select id from tbltestrecord where ReportStatus='On the Way for Collection'");
                            $totalontheway = mysqli_num_rows($query2);
                            //Sample Collected
                            $query3 = mysqli_query($con, "select id from tbltestrecord where ReportStatus='Sample Collected'");
                            $totalsamplecollected = mysqli_num_rows($query3);
                            //Sent for lab
                            $query4 = mysqli_query($con, "select id from tbltestrecord where ReportStatus='Sent to Lab'");
                            $totalsenttolab = mysqli_num_rows($query4);

                            //Report Delivered
                            $query5 = mysqli_query($con, "select id from tbltestrecord where ReportStatus='Delivered'");
                            $totaldelivered = mysqli_num_rows($query5);

                            //Totall Registered Patients 
                            $query6 = mysqli_query($con, "select id from tblpatients");
                            $totalpatients = mysqli_num_rows($query6);

                            //Total Registered Phlebotomist 
                            $query7 = mysqli_query($con, "select id from tblphlebotomist");
                            $totalphlebotomist = mysqli_num_rows($query7);
                            ?>

                            <!-- Total Laboratory-->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <a href="managelabs.php">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Total Laboratory</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totallab; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa-solid fa-flask-vial"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Assigned test-->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <a href="assigned-test.php">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Total Assigned</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalassigned; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <!-- Content Row -->





                        <!-- Footer -->
                        <?php include_once('../includes/footer.php'); ?>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <?php include_once('../includes/footer2.php'); ?>
                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="../js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="../vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="../js/demo/chart-area-demo.js"></script>
                <script src="../js/demo/chart-pie-demo.js"></script>

    </body>

    </html>
<?php } ?>