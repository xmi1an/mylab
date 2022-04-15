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
            <?php include('includes/sidebar.php')
            ?>
            <!-- sidebar -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- header -->
                <?php include('includes/header.php') ?>
                <!-- / header -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Make an appointment for a home test.</h4>
                        <!-- /Heading -->


                        <div class="row">
                            <!-- Personal Information -->
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Personal Information</h5>
                                        <small class="text-muted float-end">Merged input group</small>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mt-2 mb-3">
                                                <label for="defaultSelect" class="form-label">Select your City</label>
                                                <select id="defaultSelect" class="form-select form-select">
                                                    <option>Select City</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <!--? Select Lab -->
                                            <div class="mt-2 mb-3">
                                                <label for="defaultSelect" class="form-label">Select Lab</label>
                                                <select id="defaultSelect" class="form-select form-select">
                                                    <option>Select Lab</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Jignesh Pravasi" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                                </div>
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company">Aadhar Number</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                    <input type="text" id="basic-icon-default-company" class="form-control" placeholder="1234 1234 1234 1212" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
                                                </div>
                                            </div> -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                    <input type="text" id="basic-icon-default-email" class="form-control" placeholder="jignesh.pravasi" aria-describedby="basic-icon-default-email2">
                                                    <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
                                                </div>
                                                <div class="form-text">You can use letters, numbers &amp; periods</div>
                                            </div>
                                            <!-- Phone No -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                                                </div>
                                            </div>
                                            <!-- DOB -->
                                            <div class="mb-3">
                                                <label for="html5-date-input" class="col-md-2 col-form-label">DOB</label>
                                                <div class="input-group input-group-merge">
                                                    <input class="form-control" type="date" value="2021-06-18" id="html5-date-input">
                                                </div>
                                            </div>
                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-message">Address</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                                                    <textarea id="basic-icon-default-message" class="form-control" placeholder="21, Andhri Nagri, Bhoot Mahel ke Pi6e.." aria-describedby="basic-icon-default-message2"></textarea>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Testing Information -->
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Testing Information</h5>
                                        <small class="text-muted float-end">Default label</small>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST">


                                            <!--? Select Lab -->
                                            <div class="mt-2 mb-3">
                                                <label for="defaultSelect" class="form-label">Test Type</label>
                                                <select id="defaultSelect" class="form-select form-select">
                                                    <option>Select Lab</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="mt-2 mb-3">
                                                <label for="html5-datetime-local-input" class="form-label">Time Slot for Test</label>
                                                <!-- <div class="col-md-10"> -->
                                                <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                                                <!-- </div> -->
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Message</label>
                                                <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Take Appointment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="." target="_blank" class="footer-link fw-bolder">MyLabs</a>
                        </div>

                    </div>
                </footer>
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
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

</body>

</html>