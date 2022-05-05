<?php
session_start();
include('../includes/config.php');

require '../vendor/autoload.php';

use Twilio\Rest\Client;

if (isset($_POST['signup'])) {
    $labname = $_POST['labname'];
    $labcity = $_POST['city'];
    $labaddress = $_POST['labaddress'];
    $labmobile = $_POST['labmobile'];
    $labemail = $_POST['labemail'];
    $labusername = $_POST['labusername'];
    $labpassword = $_POST['labpassword'];
    $query = "insert into labmaster(labname, labcity, labaddress,labmobile, labemail, labusername, labpassword) values('$labname','$labcity','$labaddress','$labmobile', '$labemail','$labusername', '$labpassword')";
    $result = mysqli_query($con, $query);
    
    $smsbody =  "
Hey {$labname}! . Thank You For Registering With MyLab 💉.

Your Username Is {$labusername} And Password Is {$labpassword}
    
Login Here : https://mylab.in/login.php
        ";

    if ($result) {
        $msgbody =
            $sid = 'AC5c83bebd48fbf749d4012704ec891a8b';
        $token = '694dbd4c6b01eaeb6dc1999351def3c7';
        $client = new Client($sid, $token);
        $client->messages->create(
            '+919016353443',
            [
                'from' => '+19704699052',
                'body' => "$smsbody"
            ]
        );
        // End of Send SMS Code for New Registration Test.
        header('location:lablogin.php');
    } else {
        // echo "<script>alert('Invalid Details.');</script>";
        echo mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lab Signup</title>
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
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
</head>

<body>

    <div class="container-xxl">
        <!-- <div class="row">
            <div class="col-md-4 offset-md-4"> -->
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="../" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">

                                </span>
                                <!-- <span class="app-brand-text demo text-body fw-bolder">MyLab</span> -->
                                <img src="../img\mainlogo2.png">

                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-4 user-select-none ">Laboratory Registration</h4>
                        <!-- <p class="mb-4">Make your app management easy and fun!</p> -->

                        <form id="formAuthentication" class="mb-3" action="" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label user-select-none">Enter Lab Name</label>
                                <input type="text" class="form-control" id="username" name="labname" placeholder="Enter Lab Name" autofocus="">
                            </div>

                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label user-select-none">Select Lab City</label>
                                <select id="defaultSelect" name="city" class="form-select">
                                    <option value="Idar">Idar</option>
                                    <option value="Himmatnagar">Himmatnagar</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Bhavnagar">Bhavnagar</option>
                                    <option value="Gandhinagar">Gandhinagar</option>
                                    <option value="Morbi">Morbi</option>
                                    <option value="Jamnagar">Jamnagar</option>
                                    <option value="Junagadh">Junagadh</option>
                                    <option value="Vadodara">Vadodara</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label user-select-none">Enter Lab Address</label>
                                <textarea name="labaddress" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="labmobile" class="form-label user-select-none">Enter Lab Mobile Number</label>
                                <input style="-webkit-appearance: none; margin: 0;" type="number" maxlength="10" class="form-control" id="labmobile" name="labmobile" placeholder="Enter Lab Mobile Number">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label user-select-none">Enter Lab Email</label>
                                <input type="text" class="form-control" id="email" name="labemail" placeholder="Enter Lab Email">
                            </div>

                            <div class="mb-3">
                                <label for="Enter lab username" class="form-label user-select-none">Enter Lab username</label>
                                <input type="text" class="form-control" id="username" name="labusername" placeholder="Enter Lab username" autofocus="">
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label user-select-none" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="labpassword" id="password" class="form-control" name="password" placeholder="*********" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy &amp; terms</a>
                                    </label>
                                </div>
                            </div>
                            <button name="signup" class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="lablogin.php">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../vendor/fontawesome-free/js/all.min.js"></script>
</body>

</html>