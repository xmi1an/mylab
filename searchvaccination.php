<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);


if (isset($_POST['SearchCenter'])) {
    $txtPin = $_POST['txtPin'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=' . $txtPin . '&date=03-12-2021',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
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

    <title> Search Your Nearest Vaccination Center</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once('includes/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('includes/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"> Search Your Nearest Vaccination Center</h1>
                    <!-- ------------------------------------------------------------------------------------------------ -->
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="district-tab" data-bs-toggle="tab" data-bs-target="#district" type="button" role="tab" aria-controls="home" aria-selected="true">By District</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pin-tab" data-bs-toggle="tab" data-bs-target="#pin" type="button" role="tab" aria-controls="profile" aria-selected="false">By Pin</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!-- By District content -->
                                <div class="tab-pane fade show active" id="district" role="tabpanel" aria-labelledby="district-tab">
                                    <form action="" method="post">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Andhra Pradesh</option>
                                            <option value="2">Arunachal Pradesh</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </form>
                                    <!-- <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select District
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Andaman And Nicobar Islands</a></li>
                                            <li><a class="dropdown-item" href="#">Andhra Pradesh</a></li>
                                            <li><a class="dropdown-item" href="#">Arunachal Pradesh</a></li>
                                            <li><a class="dropdown-item" href="#">Bihar</a></li>
                                            <li><a class="dropdown-item" href="#">Chandigarh</a></li>
                                            <li><a class="dropdown-item" href="#">Chhattisgarh</a></li>
                                            <li><a class="dropdown-item" href="#">Dadra And Nagar Haveli</a></li>
                                            <li><a class="dropdown-item" href="#">Goa</a></li>
                                            <li><a class="dropdown-item" href="#">Gujarat</a></li>
                                            <li><a class="dropdown-item" href="#">Haryana</a></li>
                                            <li><a class="dropdown-item" href="#">Himachal Pradesh</a></li>
                                            <li><a class="dropdown-item" href="#">Jammu And Kashmir</a></li>
                                            <li><a class="dropdown-item" href="#">Jharkhand</a></li>
                                            <li><a class="dropdown-item" href="#">Karnataka</a></li>
                                            <li><a class="dropdown-item" href="#">Kerala</a></li>
                                            <li><a class="dropdown-item" href="#">Ladakh</a></li>
                                            <li><a class="dropdown-item" href="#">Lakshadweep</a></li>
                                            <li><a class="dropdown-item" href="#">Madhya Pradesh</a></li>
                                            <li><a class="dropdown-item" href="#">Maharashtra</a></li>
                                            <li><a class="dropdown-item" href="#">Manipur</a></li>
                                            <li><a class="dropdown-item" href="#">Meghalaya</a></li>
                                            <li><a class="dropdown-item" href="#">Mizoram</a></li>
                                            <li><a class="dropdown-item" href="#">Nagaland</a></li>
                                            <li><a class="dropdown-item" href="#">Odisha</a></li>
                                            <li><a class="dropdown-item" href="#">Puducherry</a></li>
                                            <li><a class="dropdown-item" href="#">Punjab</a></li>
                                            <li><a class="dropdown-item" href="#">Rajasthan</a></li>
                                            <li><a class="dropdown-item" href="#">Sikkim</a></li>
                                            <li><a class="dropdown-item" href="#">Tamil Nadu</a></li>
                                            <li><a class="dropdown-item" href="#">Telangana</a></li>
                                            <li><a class="dropdown-item" href="#">Tripura</a></li>
                                            <li><a class="dropdown-item" href="#">Uttar Pradesh</a></li>
                                            <li><a class="dropdown-item" href="#">Uttarakhand</a></li>
                                            <li><a class="dropdown-item" href="#">West Bengal</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <!-- By Pin content -->
                                <div class="tab-pane fade" id="pin" role="tabpanel" aria-labelledby="pin-tab">
                                    <form>
                                        <div class="mb-3">
                                            <label for="bypin" class="form-label">Enter Pincode</label>
                                            <input type="number" name="txtPin" class="form-control" id="bypin" aria-describedby="bypin">
                                            <br> <button type="submit" name="SearchCenter" class="btn btn-primary">Search Center</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--- 2rdcol --->
                    <div class="col"></div>
                    <!--- 3rdcol --->
                </div>


                <!-- ------------------------------------------------------------------------------------------------ -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php include_once('includes/footer.php'); ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>