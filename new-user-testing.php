<?php
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

if (isset($_POST['submit'])) {
    //getting post values
    $labcity = $_POST['city'];
    $selected_lab = $_POST['selected_lab'];
    $selected_lab_id = $_POST['selected_lab_id'];
    $fname = $_POST['fullname'];
    $mnumber = $_POST['mobilenumber'];
    $dob = $_POST['dob'];
    $govtid = $_POST['govtissuedid'];
    $govtidnumber = $_POST['govtidnumber'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $testtype = $_POST['testtype'];
    $timeslot = $_POST['birthdaytime'];
    $orderno = mt_rand(100000000, 999999999);

    $query = "insert into tblpatients(city,selected_lab,selected_lab_id,FullName,MobileNumber,DateOfBirth,GovtIssuedId,GovtIssuedIdNo,FullAddress,State) values('$labcity','$selected_lab','$selected_lab_id','$fname','$mnumber','$dob','$govtid','$govtidnumber','$address','$state');";

    $query .= "insert into tbltestrecord(selected_lab_id,PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$selected_lab_id','$mnumber','$testtype','$timeslot','$orderno');";

    $result = mysqli_multi_query($con, $query);
    if ($result) {
        echo '<script>alert("Your test request submitted successfully. Order number is "+"' . $orderno . '")</script>';
        echo "<script>window.location.href='new-user-testing.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
        echo "<script>window.location.href='new-user-testing.php'</script>";
    }

    // Send SMS Code for New Registration Test.
    $smsbody =  "
Hey {$fname}! This SMS From My Lab 💉.

We see that you made an appointment for your {$testtype} Test on {$timeslot}.

Phebotomist will come to your home to perform the test.

Till Keep yourself safe by staying at home 😷.
  
Check Your Test Status Here
https://cowinlabs.in/patient-search-report.php
    ";
    // $msgbody =
    //     // Your Account SID and Auth Token from twilio.com/console
    //     $sid = 'ACc495d0b8f0577c4253f409cb805ac88b';
    // $token = '7cbed27097ba7514fc579a46a349aea2';
    // $client = new Client($sid, $token);

    // // Use the client to do fun stuff like send text messages!
    // $client->messages->create(
    //     // the number you'd like to send the message to
    //     '+919016353443',
    //     [
    //         // A Twilio phone number you purchased at twilio.com/console
    //         'from' => '+12316245678',
    //         // the body of the text message you'd like to send
    //         'body' => "$smsbody"
    //     ]
    // );
    // End of Send SMS Code for New Registration Test.
}
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
                                            var city_name = $("#city-dropdown option:selected").text();
                                            $.ajax({
                                                url: "labbycity.php",
                                                type: "POST",
                                                data: {
                                                    city_name: city_name
                                                },
                                                cache: false,
                                                success: function(result) {
                                                    $("#lab-dropdown").html(result);
                                                }
                                            });
                                        }

                                        function getLabid() {
                                            var labname = $("#lab-dropdown option:selected").text();
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
                                                    <select onchange="findlab()" id="city-dropdown" name="city" class="form-select" aria-label="Default select example">
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
                                                        <select name="selected_lab" onchange="getLabid()" id="lab-dropdown" class="form-select" aria-label="Default select example">
                                                            <option selected>Select Lab</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="hdnlabid" name="selected_lab_id" value="" />

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-user"></i></span>
                                                    <input type="text" class="form-control" name="fullname" id="basic-icon-default-fullname" placeholder="Jignesh Pravasi" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                                </div>
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                    <input type="text" id="basic-icon-default-email" class="form-control" placeholder="jignesh.pravasi" aria-describedby="basic-icon-default-email2">
                                                    <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
                                                </div>
                                                <div class="form-text">You can use letters, numbers &amp; periods</div>
                                            </div> -->
                                            <!-- Phone No -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-phone2" class="input-group-text"><i class="fa-duotone fa-phone"></i></span>
                                                    <input type="text" id="basic-icon-default-phone" name="mobilenumber" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                                                </div>
                                            </div>
                                            <!-- DOB -->
                                            <div class="mb-3">
                                                <label for="html5-date-input" class="col-md-2 col-form-label">DOB</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-cake-candles"></i></span>
                                                    <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="dob">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">Any Govt Issued ID</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-id-card"></i></span>
                                                        <input type="text" class="form-control" id="govtissuedid" name="govtissuedid" placeholder="Pancard / Driving License / Voter id / any other" required="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">Govt Issued ID Number</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-duotone fa-id-card-clip"></i></span>
                                                        <input type="text" class="form-control" id="govtidnumber" name="govtidnumber" placeholder="Enter Goevernment Issued ID Number" required="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-message">Address</label>
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-message2" class="input-group-text"><i class="fa-duotone fa-location-dot"></i></span>
                                                    <textarea name="address" id="basic-icon-default-message" class="form-control" placeholder="21, Andhri Nagri, Bhoot Mahel ke Pi6e.." aria-describedby="basic-icon-default-message2"></textarea>
                                                </div>
                                            </div>
                                            <!-- State -->
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-message2" class="input-group-text"><i class="fa-duotone fa-location-dot"></i></span>
                                                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter your State Here" required="true">
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Send</button>

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
                                            <label for="defaultSelect" class="form-label">Test Type</label>
                                            <select name="testtype" id="defaultSelect" class="form-select form-select">
                                                <option value="">Select</option>
                                                <option value="Antigen">Antigen</option>
                                                <option value="RT-PCR">RT-PCR</option>
                                                <option value="CB-NAAT">CB-NAAT</option>
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
                                        <button type="submit" name="submit" class="btn btn-primary">Take Appointment</button>
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