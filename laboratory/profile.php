<?php session_start();
//DB conncetion
include_once('../includes/config.php');
//validating Session
if (!$_SESSION['labid']) {
  header('location:logout.php');
} else {


  if (isset($_POST['update'])) {
    $labid = $_SESSION['labid'];
    $labname = $_POST['labname'];
    $labaddress = $_POST['labaddress'];
    $labmobile = $_POST['labmobile'];
    $labusername = $_POST['labusername'];
    $labpassword = $_POST['labpassword'];
    $labemail = $_POST['labemail'];
    $query = mysqli_query($con, "update labmaster set labname='$labname', labaddress ='$labaddress', labmobile= '$labmobile',labusername= '$labusername',labpassword = '$labpassword', labemail = '$labemail' where labid='$labid'");
    echo (mysqli_error($con));
    if ($query) {

      echo '<script>alert("Profile has been updated")</script>';
    } else {
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
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

    <title>Covid-19 Testing Management System | Admin Profile</title>

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
            <h1 class="h3 mb-4 text-gray-800">Admin Profile</h1>
            <form method="post" name="adminprofile">
              <div class="row">

                <div class="col-lg-8">

                  <!-- Basic Card Example -->
                  <div class="card shadow mb-4">

                    <?php
                    $labid = $_SESSION['labid'];
                    $ret = mysqli_query($con, "select * from labmaster where labid='$labid'");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($ret)) {

                    ?>

                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Registration Date: <?php echo $row['Regdate']; ?></h6>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Lab name</label>
                          <input type="text" class="form-control" name="labname" value="<?php echo $row['labname']; ?>" required='true'>
                        </div>

                        <div class="form-group">
                          <label>Lab Address</label>
                          <input type="text" class="form-control" name="labaddress" value="<?php echo $row['labaddress']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Lab Mobile</label>
                          <input type="number" class="form-control" name="labmobile" value="<?php echo $row['labmobile']; ?>" required='true'>
                        </div>
                        <div class="form-group">
                          <label>Lab username</label>
                          <input type="text" class="form-control" name="labusername" value="<?php echo $row['labusername']; ?>" required='true'>
                        </div>
                        <div class="form-group">
                          <label>Lab password</label>
                          <input type="text" class="form-control" name="labpassword" value="<?php echo $row['labpassword']; ?>" required='true'>
                        </div>
                        <div class="form-group">
                          <label>Lab email</label>
                          <input type="email" class="form-control" name="labemail" value="<?php echo $row['labemail']; ?>" required='true'>
                        </div>


                      <?php } ?>
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" value="Update">
                      </div>

                      </div>
                  </div>

                </div>



              </div>
            </form>

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