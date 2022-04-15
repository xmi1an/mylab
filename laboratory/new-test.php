<?php session_start();
//DB conncetion
include_once('../includes/config.php');
error_reporting(0);
// validating Session
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
        <title>New Test Request</title>
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
                            <!-- Heading -->
                            <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">New Test Request</h4> -->
                            <!-- Main Row -->
                            <div class="row">
                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">New Test Requests</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form name="assignto" method="post">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sno.</th>
                                                            <th>Order No.</th>
                                                            <th>Patient Name</th>
                                                            <th>Mobile No.</th>
                                                            <th>Test Type</th>
                                                            <th>Time Slot</th>
                                                            <th>Reg. Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Sno.</th>
                                                            <th>Order No.</th>
                                                            <th>Patient Name</th>
                                                            <th>Mobile No.</th>
                                                            <th>Test Type</th>
                                                            <th>Time Slot</th>
                                                            <th>Reg. Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <?php
                                                        $labid = $_SESSION['labid'];
                                                        $query = mysqli_query($con, "select tbltestrecord.OrderNumber,tblpatients.FullName,tblpatients.MobileNumber,tbltestrecord.TestType,tbltestrecord.TestTimeSlot,tbltestrecord.RegistrationDate,tbltestrecord.id as testid from tbltestrecord
join tblpatients on tblpatients.MobileNumber=tbltestrecord.PatientMobileNumber
where tblpatients.selected_lab_id='$labid' && ReportStatus is null
    ");
                                                        $cnt = 1;
                                                        while ($row = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $cnt; ?></td>
                                                                <td><?php echo $row['OrderNumber']; ?></td>
                                                                <td><?php echo $row['FullName']; ?></td>
                                                                <td><?php echo $row['MobileNumber']; ?></td>
                                                                <td><?php echo $row['TestType']; ?></td>
                                                                <td><?php echo $row['TestTimeSlot']; ?></td>
                                                                <td><?php echo $row['RegistrationDate']; ?></td>
                                                                <td>
                                                                    <a href="test-details.php?tid=<?php echo $row['testid']; ?>&&oid=<?php echo $row['OrderNumber']; ?>" class="btn btn-info btn-sm">View Details</a>

                                                                </td>
                                                            </tr>
                                                        <?php $cnt++;
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Main Row -->
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