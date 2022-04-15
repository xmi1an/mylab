<?php
session_start();
include('../includes/config.php');

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

    if ($result) {
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid 19 Testing Management System | Laboratory Signup</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/bootstrapMinty.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h3 align="center" style="margin-top:4%;color:#fff">Laboratory Signup</h3>
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <form name="labsignup" action="" method="post">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome </h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="labname" placeholder="Enter Lab Name" required="true">
                                            </div>

                                            <div class="form-group">
                                                <select name="city" class="form-select" aria-label="Default select example">
                                                    <option selected>Select City</option>
                                                    <option value="Idar">Idar</option>
                                                    <option value="Himmatnagar">Himmatnagar</option>
                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                    <option value="Vadodara">Vadodara</option>
                                                    <option value="Bhavnagar">Bhavnagar</option>
                                                    <option value="Jamnagar">Jamnagar</option>
                                                    <option value="Junagadh">Junagadh </option>
                                                    <option value="Gandhinagar">Gandhinagar </option>
                                                    <option value="Morbi">Morbi</option>
                                                    <option value="Mehsana">Mehsana</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="labaddress" placeholder="Enter Lab Address">
                                            </div>

                                            <div class="form-group">
                                                <input type="number" maxlength="10" class="form-control" name="labmobile" placeholder="Enter Lab Mobile Number">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="labemail" placeholder="Enter Lab Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="labusername" placeholder="Enter lab username">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="labpassword" placeholder="Enter Password">
                                            </div>

                                            <input type="submit" name="signup" class="btn btn-primary btn-user btn-block" value="Signup">
                                        </form>
                                        <hr>

                                        <div class="text-center">
                                            <a class="nav-link" style="font-weight:bold" href="password-recovery.php"><i class="fa-duotone fa-face-anguished me-2"></i>Forgot Password?</a>
                                        </div>

                                        <div class="text-center">
                                            <a class="nav-link" style="font-weight:bold" href="laboratory/lablogin.php"><i class="fa-duotone fa-user-doctor-message me-2"></i>Lab Manager Login</a>
                                        </div>

                                        <div class="text-center">
                                            <a class="nav-link" style="font-weight:bold" href="laboratory/labsignup.php"><i class="fa-duotone fa-house me-2"></i>Home Page</a>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>