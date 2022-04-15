<?php session_start();
//DB conncetion
include_once('../includes/config.php');
error_reporting(0);
//validating Session
if (!isset($_SESSION['aid'])) {
    header('location:logout.php');
} else {
    //Code for record deletion
    if ($_GET['action'] == 'delete') {
        $labid = intval($_GET['labid']);
        $query = mysqli_query($con, "delete from labmaster where labid='$labid'");
        if ($query) {
            echo '<script>alert("Record deleted")</script>';
            echo "<script>window.location.href='managelabs.php'</script>";
        } else {
            echo mysqli_error($con);
            // echo '<script>alert("Record not deleted")</script>';
            // echo "<script>window.location.href='managelabs.php'</script>";
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

        <title>My Lab | Manage laboratories</title>

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- Custom styles for this template -->
        <link href="../css/sb-admin-2.css" rel="stylesheet">
        <link href="../css/bootstrapMinty.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <?php include_once('../includes/sidebar.php'); ?>
            <!-- End of Sidebar -->
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
                        <h1 class="h3 mb-2 text-gray-800">Manage laboratories</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">laboratories Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Lab Name</th>
                                                <th>Lab City</th>
                                                <th>Lab address</th>
                                                <th>Lab Mobile</th>
                                                <th>Lab Username</th>
                                                <th>Lab Password</th>
                                                <th>Lab Email</th>
                                                <th>Reg Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Lab Name</th>
                                                <th>Lab City</th>
                                                <th>Lab address</th>
                                                <th>Lab Mobile</th>
                                                <th>Lab Username</th>
                                                <th>Lab Password</th>
                                                <th>Lab Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $sql = "select * from labmaster";
                                            $query = mysqli_query($con, $sql);
                                            $cnt = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['labname']; ?></td>
                                                    <td><?php echo $row['labcity']; ?></td>
                                                    <td><?php echo $row['labaddress']; ?></td>
                                                    <td><?php echo $row['labmobile']; ?></td>
                                                    <td><?php echo $row['labusername']; ?></td>
                                                    <td><?php echo $row['labpassword']; ?></td>
                                                    <td><?php echo $row['labemail']; ?></td>
                                                    <td><?php echo $row['Regdate']; ?></td>
                                                    <td>
                                                        <a href="edit-lab.php?labid=<?php echo $row['labid']; ?>"><i class="fas fa-edit" style="color:blue"></i></a> |
                                                        <a href="managelabs.php?labid=<?php echo $row['labid']; ?>&&action=delete" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $cnt = $cnt + 1;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php include_once('../includes/footer.php'); ?>
                <!-- End of Footer -->

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

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
    </body>

    </html>
<?php } ?>