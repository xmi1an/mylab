<?php
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');
// error_reporting(0);

if (isset($_POST['sendotp'])) {
    $curl = curl_init();
    $mobileNumber = $_POST['inputMobilenumber'];
    curl_setopt_array(
        $curl,
        array(
            CURLOPT_URL => 'https://cdn-api.co-vin.in/api/v2/auth/public/generateOTP',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"mobile": "' . $mobileNumber . '"}',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'Content-Type: application/json'
            ),
        )
    );

    $response = curl_exec($curl);
    $data = json_decode($response, true);
    $_SESSION['txnId'] = $data['txnId'];

    curl_close($curl);
}
echo "SESSIONtxnId :" . $_SESSION['txnId'] . "<br>";
echo "SESSIONtoken : " . $_SESSION['token'] . "<br>";




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COVID Testing & Vaccination System | Statewise Testing Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('includes/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <!-- Page Heading -->
                <h1 class="h3 mb-3 px-3 text-gray-800"> Download vaccination certificate in PDF format by beneficiary reference id.</h1>

                <div class="container-fluid">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">An OTP will be sent to your mobile number for verification </h5>
                            <!-- Mobile Number -->
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="inputMobilenumber" class="form-label">Enter Mobile Number 9016353443</label>
                                    <input type="number" name="inputMobilenumber" class="form-control" id="inputMobilenumber">

                                </div>
                                <button type="submit" name="sendotp" class="btn btn-primary">Send OTP</button>
                            </form>

                            <!-- Confirm OTP Form-->
                            <form method="POST" action="./otp/confirmotp.php">
                                <div class="mb-3">
                                    <label for="inputotp" class="form-label">Enter OTP</label>
                                    <input type="number" name="inputotp" class="form-control" id="inputotp">
                                </div>
                                <button type="submit" name="submitotp" class="btn btn-primary">Submit OTP</button>
                            </form>
                            <!--  dlcertificate -->
                            <form method="POST" action="./otp/fetchcertificate.php">
                                <a class="btn btn-primary" download="certificate" href="downloads/certificate.pdf">
                                    <button type="submit" name="dlcertificate">Download Certificate</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div> <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include_once('includes/footer.php'); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script type="text/javascript">
        $(document).get(function() {
            $("#load").on("click", function(e) {
                $.ajax({
                    url: "",
                    type: "POST",
                    success: function(data) {
                        $("table-data").html(data);
                    }
                });
            });
        });
    </script> -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>