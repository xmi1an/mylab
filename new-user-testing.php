<?php
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');

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
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">
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
            <?php include('includes/sidebar.php');
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
                                    </div>
                                    <script type="text/javascript">
                                        function findlab() {
                                            var city_name = $("#city_dropdown option:selected").text();
                                            $.ajax({
                                                url: "labbycity.php",
                                                type: "POST",
                                                data: {
                                                    city_name: city_name
                                                },
                                                cache: false,
                                                success: function(result) {
                                                    $("#lab_dropdown").html(result);
                                                }
                                            });
                                        }

                                        function getLabid() {
                                            var labname = $("#lab_dropdown option:selected").text();
                                            $.ajax({
                                                url: "getlabid.php",
                                                type: "POST",
                                                data: {
                                                    labname: labname
                                                },
                                                cache: false,
                                                success: function(result) {
                                                    $("#hdnlabid").val(result);
                                                }
                                            });
                                        }
                                    </script>
                                    <div class="card-body">
                                        <form method="POST" action="">
                                            <div class="form-group">
                                                <label>Select your City</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-city"></i></span>
                                                    <!-- Select City -->
                                                    <select onchange="findlab()" id="city_dropdown" name="city" class="form-select" aria-label="Default select example">
                                                        <option value="">Select City</option>
                                                        <?php
                                                        $result = mysqli_query($con, "select labcity from labmaster");
                                                        while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <option value="<?php echo $row["labcity"]; ?>"><?php echo $row["labcity"]; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!--? Select Lab -->
                                            <div class="mt-2 mb-3">
                                                <!-- Select Lab -->
                                                <div class="form-group">
                                                    <label>Select Lab</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-flask"></i></span>
                                                        <select name="selected_lab" onchange="getLabid()" id="lab_dropdown" class="form-select" aria-label="Default select example">
                                                            <option selected>Select Lab</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="hdnlabid" name="selected_lab_id" value="" />

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="fa-duotone fa-user"></i></span>
                                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Jignesh Pravasi" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">IN (+91) </span>
                                                    <input type="text" name="mobilenumber" id="mobilenumber" class="form-control phone-number-mask" placeholder="9016353333">
                                                </div>
                                            </div>
                                            <!-- DOB -->
                                            <div class="mb-3">
                                                <label for="dob" class="col-md-2 col-form-label">DOB</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-cake-candles"></i></span>
                                                    <input class="form-control" type="date" value="2021-06-18" id="dob" name="dob">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">Aadhar Card Number</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="fa-duotone fa-id-card"></i></span>
                                                        <input type="text" class="form-control" id="aadharid" name="aadharid" placeholder="1234567891234564" required="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-message">Address</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="fa-duotone fa-location-dot"></i></span>

                                                    <textarea id="address" name="address" rows="3" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 85px;"></textarea>
                                                </div>
                                            </div>
                                            <!-- State -->
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="fa-duotone fa-location-dot"></i></span>
                                                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter your State Here" required="true">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testing Information -->
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Testing Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <!--? Select Lab -->
                                        <div class="mt-2 mb-3">
                                            <label for="testtype" class="form-label">Test Type</label>
                                            <select name="testtype" id="testtype" class="form-select form-select">
                                                <option value="">Select</option>
                                                <option value="Antigen">Antigen</option>
                                                <option value="RT-PCR">RT-PCR</option>
                                                <option value="CB-NAAT">CB-NAAT</option>
                                            </select>
                                        </div>
                                        <div class="mt-2 mb-3">
                                            <label for="html5-datetime-local-input" class="form-label">Time Slot for Test</label>
                                            <!-- <div class="col-md-10"> -->
                                            <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="timeslot">
                                            <!-- </div> -->
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="message">Message</label>
                                            <textarea id="message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                                        </div>
                                        <button type="submit" name="submit" id="submitdata" class="btn btn-primary">Take Appointment</button>
                                        </form>
                                    </div>
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
    <script src="assets/vendor/libs/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/libs/pickr.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


    <script>
        $(document).ready(function() {
            $('#submitdata').on('click', function(e) {
                e.preventDefault();
                var spinner = `<div class="spinner-border spinner-border-sm text-white" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>`;
                var city_dropdown = $('#city_dropdown').val();
                var lab_dropdown = $('#lab_dropdown').val();
                var hdnlabid = $('#hdnlabid').val();
                var fullname = $('#fullname').val();
                var mobilenumber = $('#mobilenumber').val();
                var dob = $('#dob').val();
                var aadharid = $('#aadharid').val();
                var address = $('#address').val();
                var state = $('#state').val();
                var testtype = $('#testtype').val();
                var timeslot = $('#timeslot').val();
                var message = $('#message').val();
                console.log(hdnlabid);

                // Validation form
                if (city_dropdown == '') {
                    Swal.fire({
                        title: "Oops...",
                        text: "Please select your city",
                        icon: "error"
                    });
                    return false;
                } else if (lab_dropdown == '') {
                    swal.fire("Oops...", "Please select your lab", "error");
                    return false;
                } else if (fullname == '') {
                    swal.fire("Oops...", "Please enter your Full Name", "error");
                    return false;
                } else if (mobilenumber == '') {
                    swal.fire("Oops...", "Please enter your Mobile Number", "error");
                    return false;
                } else if (dob == '') {
                    swal.fire("Oops...", "Please enter your date of birth", "error");
                    return false;
                } else if (aadharid == '') {
                    swal.fire("Oops...", "Please enter your aadhar id", "error");
                    return false;
                } else if (address == '') {
                    swal.fire("Oops...", "Please enter your address", "error");
                    return false;
                } else if (state == '') {
                    swal.fire("Oops...", "Please enter your state", "error");
                    return false;
                } else if (testtype == '') {
                    swal.fire("Oops...", "Please select your test type", "error");
                    return false;
                } else if (timeslot == '') {
                    swal.fire("Oops...", "Please select your time slot", "error");
                    return false;
                } else {
                    $.ajax({
                        url: 'ajax/appointment.php',
                        type: 'POST',
                        data: {
                            city_dropdown: city_dropdown,
                            lab_dropdown: lab_dropdown,
                            hdnlabid: hdnlabid,
                            fullname: fullname,
                            mobilenumber: mobilenumber,
                            dob: dob,
                            aadharid: aadharid,
                            address: address,
                            state: state,
                            testtype: testtype,
                            timeslot: timeslot,
                            message: message
                        },
                        beforeSend: function() {
                            $('#submitdata').html(spinner);
                        },
                        cache: false,
                        success: function() {
                            setTimeout(function() {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Your appointment has been successfully booked.',
                                    icon: 'success',
                                    button: 'OK'
                                });
                                $('#submitdata').html('Take Appointment');
                            }, 1000);
                        }
                    });
                }
            });
        });
    </script>
</body>


</html>