<?php
// $curl = curl_init();

// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://data.covid19india.org/v4/min/data.min.json',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'GET',
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);
// $data = json_decode($response, true);

// // Convert to Javascript Object
// $data_json = json_encode($data);

// curl_close($curl);
// echo $response;

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
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- sidebar -->
            <?php include('includes/sidebar.php') ?>
            <!-- sidebar -->
            <!-- Layout Container -->
            <div class="layout-page">
                <!-- header -->
                <?php include('includes/header.php') ?>
                <!-- / header -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">COVID-19 Cases in Gujarat</h4>
                        <!-- /Heading -->
                        <div class="row">
                            <div class="col">
                                <div class="card shadow-none bg-transparent border border-primary mb-3" style="width: 13rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Delta Case</h5>
                                        <p class="card-text">
                                            <span class="text-muted fw-light">Confirmed:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['delta']['confirmed']; ?>
                                            </span><br>
                                            <span class="text-muted fw-light">Recovered:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['delta']['recovered']; ?>
                                            </span><br>
                                            <span class="text-muted fw-light">Tested:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['delta']['tested']; ?>
                                            </span><br>
                                            <span class="text-muted fw-light">Vaccinated1:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['delta']['vaccinated1']; ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col">
                                <div class="card shadow-none bg-transparent border border-primary mb-3" style="width: 13rem;">

                                    <div class="card-body">
                                        <h5 class="card-title">Total Case</h5>
                                        <p class="card-text">
                                            <span class="text-muted fw-light">Confirmed:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['total']['confirmed']; ?>
                                            </span><br>
                                            <span class="text-muted fw-light">Recovered:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['total']['recovered']; ?>
                                            </span><br>
                                            <span class="text-muted fw-light">Tested:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['total']['tested']; ?>
                                            </span><br>
                                            <span class="text-muted fw-light">Vaccinated1:</span> <span class="text-primary fw-bold">
                                                <?php echo $data['GJ']['total']['vaccinated1']; ?>
                                            </span>

                                        </p>
                                    </div>

                                </div>
                            </div> <!-- /col-lg-6 -->
                        </div> <!-- /row -->
                        <div class="row">
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>confirmed</th>
                                                <th>deceased</th>
                                                <th>other</th>
                                                <th>recovered</th>
                                                <th>tested</th>
                                                <th>vaccinated1</th>
                                                <th>vaccinated2</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php include('includes/footer.php') ?>
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
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>
</body>

</html>