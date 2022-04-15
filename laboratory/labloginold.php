<?php
session_start();
include('../includes/config.php');

if (isset($_POST['login'])) {
    $labusername = $_POST['labusername'];
    // $Password = md5($_POST['inputpwd']);
    $Password = $_POST['inputpwd'];
    echo ($labusername);
    echo ($Password);
    $result  = mysqli_query($con, "select * from labmaster where labusername='$labusername' && labpassword='$Password' ");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    var_dump($row);
    echo ($row['labid']);

    if ($row > 0) {
        $_SESSION['labid'] = $row['labid'];
        header('location:labdashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";
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

    <title>Covid 19 Testing Management System | Lab Manager Login</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/bootstrapMinty.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h3 align="center" style="margin-top:4%;color:#fff">Laboratory login</h3>
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <form name="login" method="post">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="labusername" id="username" value="jpm" required="true">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="inputpwd" id="inputpwd" value="1234" placeholder="Password">
                                            </div>
                                            <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="login">
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="password-recovery.php" style="font-weight:bold">Forgot Password?</a>

                                        </div>

                                        <div class="text-center">
                                            <a class="small" href="../index.php" style="font-weight:bold;"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="labsignup.php" style="font-weight:bold;"><i class="fa fa-home" aria-hidden="true"></i> Laboratory Signup</a>
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
    <script src="..vendor/jquery/jquery.min.js"></script>
    <script src="..vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="..vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="..js/sb-admin-2.min.js"></script>

</body>

</html>