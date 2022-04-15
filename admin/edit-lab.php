<?php session_start();
//DB conncetion
include_once('../includes/config.php');
//validating Session
if (!isset($_SESSION['aid'])) {
    header('location:logout.php');
} else {

    //Code for updation
    if (isset($_POST['update'])) {
        $labid = intval($_GET['labid']);
        //getting post values
        $labname = $_POST['labname'];
        $labcity = $_POST['labcity'];
        $labaddress = $_POST['labaddress'];
        $labmobile = $_POST['labmobile'];
        $labusername = $_POST['labusername'];
        $labpassword = $_POST['labpassword'];
        $labemail = $_POST['labemail'];

        $query = "update labmaster set labname='$labname',labcity='$labcity',labaddress='$labaddress',labmobile='$labmobile',labusername='$labusername',labpassword='$labpassword',labemail='$labemail' where labid='$labid'";

        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script>alert("Laboratory record updated successfully.")</script>';
            echo "<script>window.location.href='managelabs.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
            echo "<script>window.location.href='managelabs.php'</script>";
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

        <title>Covid-19 Testing Management System | Edit Phlebotomist</title>

        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.css" rel="stylesheet">
        <link href="../css/bootstrapMinty.min.css" rel="stylesheet">
        <style type="text/css">
            label {
                font-size: 16px;
                font-weight: bold;
                color: #000;
            }
        </style>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php include_once('../includes/sidebar.php'); ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php include_once('../includes/topbar.php'); ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <?php
                        $labid = intval($_GET['labid']);
                        $query = mysqli_query($con, "select * from labmaster where labid='$labid'");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h1 class="h3 mb-4 text-gray-800"><?php echo $row['labname']; ?> Laboratory Information</h1>
                            <form name="editphlebotomist" method="post">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Basic Card Example -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Laboratory Information</h6>
                                            </div>
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Registration Date: </label>
                                                    <?php echo $row['Regdate']; ?>
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab ID</label>
                                                    <input type="text" class="form-control" name="empid" value="<?php echo $row['labid']; ?>" readonly="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab Name</label>
                                                    <input type="text" class="form-control" name="labname" pattern="[A-Za-z ]+" title="letters only" value="<?php echo $row['labname']; ?>" required="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab City</label>
                                                    <input type="text" class="form-control" name="labcity" pattern="[A-Za-z ]+" title="letters only" value="<?php echo $row['labcity']; ?>" required="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab Address</label>
                                                    <input type="text" class="form-control" name="labaddress" pattern="[A-Za-z , 0-9 ]+" title="Letters, Numbers and Comma only" value="<?php echo $row['labaddress']; ?>" required="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" class="form-control" name="labmobile" pattern="[0-9]{10}" title="10 numeric characters only" value="<?php echo $row['labmobile']; ?>" required="true">
                                                </div>
                                                <div class="form-group">
                                                    <label>Lab Username</label>
                                                    <input type="text" class="form-control" name="labusername" pattern="[A-Za-z 0-9]+" title="Letters and Numbers Only" value="<?php echo $row['labusername']; ?>" required="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab Password</label>
                                                    <input type="text" class="form-control" name="labpassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,12}$" title="letters only" value="<?php echo $row['labpassword']; ?>" required="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab Email</label>
                                                    <input type="email" class="form-control" name="labemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter a Valid Email!" value="<?php echo $row['labemail']; ?>" required="true">
                                                </div>

                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" value="Update">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        <?php } ?>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include_once('../includes/footer.php'); ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <?php include_once('../includes/footer2.php'); ?>


        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

    </body>

    </html>
<?php } ?>