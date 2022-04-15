<?php
session_start();
include('../includes/config.php');

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $Password = $_POST['inputpwd'];
    $query = mysqli_query($con, "select ID from tbladmin where  AdminuserName='$uname' && Password='$Password' ");
    $ret = mysqli_fetch_array($query);
    print_r($ret);
    if ($ret > 0) {
        $_SESSION['aid'] = $ret['ID'];
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyLabs | Admin Login</title>

    <!--    Stylesheets-->
    <link href="../css/theme.min.css" rel="stylesheet" id="style-default">

</head>


<body>

    <!--    Main Content-->
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-4 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../img/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../img/spot-illustrations/shape-1.png" alt="" width="150">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <!-- <div class="col-md-7 d-flex flex-center"> -->
                                <div class="col-md-5  p-4 p-md-5 flex-grow-1">
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <h3>Admin Login</h3>
                                        </div>
                                    </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label" for="card-email">Username</label>
                                            <input name="username" class="form-control" id="card-email" type="text" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="card-password">Password</label>
                                            </div>
                                            <input name="inputpwd" class="form-control" id="card-password" type="password" />
                                        </div>
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" />
                                                    <label class="form-check-label mb-0" for="card-checkbox">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto"><a class="fs--1" href="password-recovery.php">Forgot Password?</a></div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="login">Log in</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p class="text-white mt-4"><a class=" link-primary" href="../index.php"><i class="fa-duotone fa-house me-2"></i> </i> Home Page</a>
                                        </p>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--    End of Main Content-->

    <!--    JavaScripts-->
    <script src="../vendor/fontawesome-free/js/all.min.js"></script>

</body>

</html>