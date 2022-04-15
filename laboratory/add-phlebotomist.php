<?php session_start();
//DB conncetion
include_once('../includes/config.php');
//validating Session
if (!isset($_SESSION['labid'])) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {
        //getting post values
        $labid = $_SESSION['labid'];
        $empid = $_POST['empid'];
        $fname = $_POST['fullname'];
        $mnumber = $_POST['mobilenumber'];
        $query = "insert into tblphlebotomist(EmpID,FullName,MobileNumber,labid) values('$empid','$fname','$mnumber','$labid')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo ('<script>alert("Phlebotomist Added Successfully")</script>');
        } else {
            echo ("<script>alert('Not Added!')</script>");
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Phlebotomist</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
        <script>
            function myModel() {
                $('#phlebotomistaddedModal').modal('show');
            }
        </script>

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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add Phlebotomist</h4>
                            <!-- Main Row -->
                            <div class="row">
                                <form id="myForm" name="addphlebotomist" method="post">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- Basic Card Example -->
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Employee Id</label>
                                                        <input type="text" class="form-control mb-3" id="empid" name="empid" placeholder="Enter Emp Id..." required="true" onBlur="empidAvailability()">
                                                        <span id="empid-availability-status" style="font-size:12px;"></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                        <input type="text" class="form-control mb-3" id="fullname" name="fullname" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input type="text" class="form-control mb-3" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true">

                                                    </div>
                                                    <!-- data-bs-toggle="modal" data-bs-target="#phlebotomistaddedModal" -->
                                                    <div class="form-group">
                                                        <input type="submit" data-bs-toggle="modal" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </form>
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

        <!-- Modal -->
        <div class="modal fade" id="phlebotomistaddedModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Notice</h5>
                    </div>
                    <div class="modal-body">
                        <p>Phlebotomist created successfully.</p>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Okay
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <!-- Core JS -->
        <!-- <script src="../assets/vendor/libs/jquery/jquery.js"></script> -->
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