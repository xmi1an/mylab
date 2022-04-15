<?php
session_start();
include_once('../includes/config.php');
if (!isset($_SESSION['labid'])) {
    header('location:logout.php');
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Make an appointment</title>
        <!-- BS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- /BS -->
        <meta name="description" content="" />
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
        <!-- Icons. Uncomment required icon fonts -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="../assets/css/demo.css" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <!-- Helpers -->
        <script src="../assets/vendor/js/helpers.js"></script>
        <script src="../assets/js/config.js"></script>
    </head>

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- sidebar -->
                <?php include('../includes/sidebar.php') ?>
                <!-- sidebar -->
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- header -->
                    <?php include('../includes/header.php') ?>
                    <!-- / header -->
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard</h4> -->
                            <!-- /Heading -->
                            <div class="row">
                                <?php
                                //Total tests
                                $query = mysqli_query($con, "select id from tbltestrecord");
                                $totaltest = mysqli_num_rows($query);
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

                                //Totall Registered Phlebotomist 
                                $query7 = mysqli_query($con, "select id from tblphlebotomist");
                                $totalphlebotomist = mysqli_num_rows($query7);
                                ?>

                                <div class="row">
                                    <!-- Generate Report Card -->

                                    <!-- /Generate Report -->


                                    <!-- Total Tests -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="all-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Total Tests</span>
                                                    <h3 class="card-title mb-2"><?php echo $totaltest; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Total Assigned -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="assigned-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Total Assigned</span>
                                                    <h3 class="card-title mb-2"><?php echo $totalassigned;; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- On the way for sample collection-->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="ontheway-samplecollection-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">On the way for sample collection</span>
                                                    <h3 class="card-title mb-2"><?php echo $totalontheway;; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Sample Collected -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="sample-collected-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Sample Collected</span>
                                                    <h3 class="card-title mb-2"><?php echo $totalsamplecollected;; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Sent to Lab -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="samplesent-lab-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Sample Sent to Lab</span>
                                                    <h3 class="card-title mb-2"><?php echo $totalsenttolab;; ?></h3>
                                                </div>
                                            </div>'
                                        </a>
                                    </div>
                                    <!-- Report Delivered -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="reportdelivered-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Report Delivered</span>
                                                    <h3 class="card-title mb-2"><?php echo $totaldelivered;; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Total Registered Patients -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="reportdelivered-test.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Total Registered Patients</span>
                                                    <h3 class="card-title mb-2"><?php echo $totalpatients;; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Total Registered Phlebotomist -->
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <a href="manage-phlebotomist.php">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                        </div>
                                                    </div>

                                                    <span class="fw-semibold d-block mb-1">Total Phlebotomist</span>
                                                    <h3 class="card-title mb-2"><?php echo $totalphlebotomist;; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include('../includes/footer.php') ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        </div>


        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>

    </body>

    </html>
<?php }
?>