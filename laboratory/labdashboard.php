<?php
session_start();
include_once('../includes/config.php');
if (!isset($_SESSION['labid'])) {
    header('location:logout.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

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
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
        <!-- Icons. Uncomment required icon fonts -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../assets/css/demo.css" />
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="../vendor\fontawesome-free\css\all.css" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <!-- Helpers -->
        <script src="../assets/vendor/js/helpers.js"></script>
        <script src="../assets/js/config.js"></script>
        <style>
            .card {
                border-radius: 4px;
                background: #fff;
                box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);

                cursor: pointer;
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
            }
        </style>
    </head>

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- sidebar -->
                <?php include('../includes/sidebar.php')
                ?>

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

                                <div class="row justify-content-center">
                                    <!-- Total Tests -->
                                    <div class="col-lg-3 mb-4">
                                        <a href="all-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <span><i class="fa-duotone fa-rectangle-history fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="badge bg-label-warning rounded-pill card-title mb-2">Total Test</h5>
                                                    <h3 class="text-link fw-semibold d-block mb-1 "><?php echo $totaltest; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Total Assigned -->
                                    <div class="col-lg-3 mb-4 ">
                                        <a href="assigned-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <span><i class="fa-duotone fa-equals fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2">Total Assigned</h5>
                                                    <h3 class="fw-semibold d-block mb-1"><?php echo $totalassigned; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- On the way for sample collection-->
                                    <div class="col-lg-3 mb-4">
                                        <a href="ontheway-samplecollection-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4 ">
                                                        <span><i class="fa-duotone fa-road fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2 ">On the way for sample collection</h4>
                                                        <h5 class="fw-semibold d-block mb-1"><?php echo $totalontheway; ?></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Sample Collected -->
                                    <div class="col-lg-3 mb-4 ">
                                        <a href="sample-collected-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <i class="fa-duotone fa-box-archive fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2">Sample Collected</h5>
                                                    <h3 class="fw-semibold d-block mb-1"><?php echo $totalsamplecollected; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Sent to Lab -->
                                    <div class="col-lg-3 mb-4 ">
                                        <a href="samplesent-lab-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <span><i class="fa-duotone fa-envelope-circle-check fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2">Sent to Lab</h5>
                                                    <h3 class="fw-semibold d-block mb-1"><?php echo $totalsenttolab; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Report Delivered -->
                                    <div class="col-lg-3 mb-4 ">
                                        <a href="reportdelivered-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <span><i class="fa-duotone fa-person-carry-box fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2">Report Delivered</h5>
                                                    <h3 class="fw-semibold d-block mb-1"><?php echo $totaldelivered; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Total Registered Patients -->
                                    <div class="col-lg-3 mb-4 ">
                                        <a href="all-test.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <span><i class="fa-duotone fa-users-medical fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2">Total Registered Patients</h5>
                                                    <h3 class="fw-semibold d-block mb-1"><?php echo $totalpatients; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Total Registered Phlebotomist -->
                                    <div class="col-lg-3 mb-4 ">
                                        <a href="manage-phlebotomist.php">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <div class="card-title mb-4">
                                                        <span><i class="fa-duotone fa-user-nurse fa-3x"></i></span>
                                                    </div>

                                                    <h5 class="card-title mb-2">Total Registered Phlebotomist</h5>
                                                    <h3 class="fw-semibold d-block mb-1"><?php echo $totalphlebotomist; ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Generate Report Card Row-->
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 mb-4 ">
                                            <a href="bwdates-report-ds.php">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <div class="card-title mb-4">
                                                            <span><i class="fa-duotone fa-gears fa-3x"></i></span>
                                                        </div>
                                                        <h5 class="card-title mb-2">Generate Report</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /Generate Report Row End -->

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
        <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    </body>

    </html>
<?php } ?>