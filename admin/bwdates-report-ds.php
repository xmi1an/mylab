<?php session_start();
//DB conncetion
include_once('../includes/config.php');
error_reporting(0);

//validating Session
if (!isset($_SESSION['aid'])) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {
        //getting post values
        $mnumber = $_POST['mobilenumber'];
        $testtype = $_POST['testtype'];
        $timeslot = $_POST['birthdaytime'];
        $orderno = mt_rand(100000000, 999999999);
        $query = "insert into tbltestrecord(PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$mnumber','$testtype','$timeslot','$orderno');";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script>alert("Your test request submitted successfully. Order number is "+"' . $orderno . '")</script>';
            echo "<script>window.location.href='registered-user-testing.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
            echo "<script>window.location.href='registered-user-testing.php'</script>";
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Covid-19 TMS | B/w Dates Report Date Selection</title>

        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.css" rel="stylesheet">
        <link href="../css/bootstrapMinty.min.css" rel="stylesheet">
        <style type="text/css">
            label {
                font-size: 16px;
                font-weight: bold;
                color: #000;
            }
        </style>
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php include_once('../includes/sidebar.php'); ?>

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
                        <h1 class="h3 mb-4 text-gray-800">B/w Dates Report Date Selection</h1>

                        <form method="post" action="bwdates-report-result.php">
                            <div class="row">

                                <div class="col-lg-6">

                                    <!-- Basic Card Example -->
                                    <div class="card shadow mb-4">

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>From Date</label>
                                                <input type="date" class="form-control" id="fromdate" name="fromdate" required="true">
                                            </div>

                                            <div class="form-group">
                                                <label>To Date</label>
                                                <input type="date" class="form-control" id="todate" name="todate" required="true">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Submit">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include_once('../includes/footer.php'); ?>

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

    </body>

    </html>
<?php } ?>