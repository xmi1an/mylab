<?php session_start();
//DB conncetion
include_once('../includes/config.php');
// error_reporting(0);
// require __DIR__ . '../vendor/autoload.php';

use Twilio\Rest\Client;

//validating Session
if (!isset($_SESSION['labid'])) {
  header('location:logout.php');
} else {
  //Code for Assign to
  if (isset($_POST['submit'])) {
    $testid = intval($_GET['tid']);
    $ato = $_POST['assignto'];
    $assignto = explode("-", $ato);
    $aname = $assignto[0];
    $pid = $assignto[1];
    $status = 'Assigned';
    $assigntime = date('d-m-Y h:i:s A', time());
    $query = mysqli_query($con, "update tbltestrecord set ReportStatus='$status',AssigntoName='$aname',AssignedtoEmpId='$pid',AssignedTime='$assigntime' where id='$testid'");
    echo '<script>alert("Assigned to Phlebotomist successfully.")</script>';
    echo "<script>window.location.href='assigned-test.php'</script>";
    // Send SMS Code for Assigned to Phlebotomist.
    $smsbody =  "
Hey {$fname}! This SMS From My Lab 💉.

We have assigned your test to $aname.

Your test sample will be taken at your given address by him/her.
He/She will come to your house to take your test.

We will provide the next update shortly after collecting the sample.

Till Keep yourself safe by staying at home 😷.

For More Information Visit
https://www.cowinlabs.in
        ";
    // $msgbody =
    //   // Your Account SID and Auth Token from twilio.com/console
    //   $sid = 'ACc495d0b8f0577c4253f409cb805ac88b';
    // $token = '7cbed27097ba7514fc579a46a349aea2';
    // $client = new Client($sid, $token);

    // // Use the client to do fun stuff like send text messages!
    // $client->messages->create(
    //   // the number you'd like to send the message to
    //   '+919016353443',
    //   [
    //     // A Twilio phone number you purchased at twilio.com/console
    //     'from' => '+12316245678',
    //     // the body of the text message you'd like to send
    //     'body' => "$smsbody"
    //   ]
    // );
    // END Send SMS Code for Assigned to Phlebotomist.
  }

  //Code for Take Action
  if (isset($_POST['takeaction'])) {
    $orderid = intval($_GET['oid']);
    $status = $_POST['status'];
    $remark = $_POST['remark'];
    $rby = $_SESSION['aid'];

    //For delivered Status
    if ($status == 'Delivered') :
      $uploadtime = date('d-m-Y h:i:s A', time());
      //For checking the image type
      $reportfile = $_FILES["report"]["name"];
      // get the image extension
      $extension = substr($reportfile, strlen($reportfile) - 4, strlen($reportfile));
      // allowed extensions
      $allowed_extensions = array(".doc", ".pdf", ".PDF");
      // Validation for allowed extensions .in_array() function searches an array for a specific value.
      if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only doc / pdf format allowed');</script>";
      } else {
        //rename the image file
        $newreportfile = md5($reportfile) . time() . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["report"]["tmp_name"], "reportfiles/" . $newreportfile);
        $query = mysqli_query($con, "insert into tblreporttracking(OrderNumber,Status,Remark,RemarkBy) values('$orderid','$status','$remark','$rby')");
        $query2 = mysqli_query($con, "update tbltestrecord set ReportStatus='$status',FinalReport='$newreportfile',ReportUploadTime='$uploadtime' where OrderNumber='$orderid'");
        echo '<script>alert("Status updated successfully")</script>';
        echo "<script>window.location.href='all-test.php'</script>";

        // Get Report File of Patient.
        $query = mysqli_query($con, "SELECT * FROM `tbltestrecord` WHERE `id` = $testid");
        while ($row = mysqli_fetch_array($query)) {
          $row['FinalReport'];
          // echo ($row['FinalReport']);
          $dlreport = "https:cowinlabs.in/reportfiles/" . $row['FinalReport'];
        }

        // Send SMS Code for Delivered to Patient.
        // SMS Code after Take Action
        $smsbody =  "
Hey {$fname}! This SMS From My Lab 💉.

Action Taken to your Test:
Status : $status
Remark : $remark

Download your Report :
$dlreport

Stay Safe Stay Home 😷

For More Information Visit
https://www.cowinlabs.in
";
        $msgbody =
          // Your Account SID and Auth Token from twilio.com/console
          $sid = 'ACc495d0b8f0577c4253f409cb805ac88b';
        $token = '7cbed27097ba7514fc579a46a349aea2';
        $client = new Client($sid, $token);

        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
          // the number you'd like to send the message to
          '+919016353443',
          [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+12316245678',
            // the body of the text message you'd like to send
            'body' => "$smsbody"
          ]
        );
        //ENDS SMS Code after Take Action

      }


    // For other status
    else :
      $query = mysqli_query($con, "insert into tblreporttracking(OrderNumber,Status,Remark,RemarkBy) values('$orderid','$status','$remark','$rby')");
      $query2 = mysqli_query($con, "update tbltestrecord set ReportStatus='$status' where OrderNumber='$orderid'");
      echo '<script>alert("Status updated successfully")</script>';
      echo "<script>window.location.href='all-test.php'</script>";
    endif;
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

    <title>Covid-19 Testing Management System | Test Details</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
            <h1 class="h3 mb-4 text-gray-800">Test Details# <?php echo intval($_GET['oid']); ?></h1>
            <div class="row">
              <?php
              $testid = intval($_GET['tid']);
              $query = mysqli_query($con, "SELECT * FROM tbltestrecord JOIN tblpatients ON tblpatients.MobileNumber = tbltestrecord.PatientMobileNumber WHERE tblpatients.selected_lab_id LIKE '$labid';");

              if ($query) {
                echo ("Working!");
              } else {
                echo ("Error description: " . mysqli_error($con));
              }
              while ($row = mysqli_fetch_array($query)) {
              ?>
                <!-- personal information --->
                <div class="col-lg-6">

                  <!-- Basic Card Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                          <th>Full Name</th>
                          <td><?php echo $row['FullName']; ?></td>
                        </tr>

                        <tr>
                          <th>Mobile Number</th>
                          <td><?php echo $row['MobileNumber']; ?></td>
                        </tr>

                        <tr>
                          <th>DOB (Date of Birth)</th>
                          <td><?php echo $row['DateOfBirth']; ?></td>
                        </tr>


                        <tr>
                          <th>Govt Issued Id</th>
                          <td><?php echo $row['GovtIssuedId']; ?></td>
                        </tr>


                        <tr>
                          <th>Govt Issued Id No</th>
                          <td><?php echo $row['GovtIssuedIdNo']; ?></td>
                        </tr>


                        <tr>
                          <th>Full Address</th>
                          <td><?php echo $row['FullAddress']; ?></td>
                        </tr>

                        <tr>
                          <th>State</th>
                          <td><?php echo $row['State']; ?></td>
                        </tr>

                        <tr>
                          <th>Profile Reg Date</th>
                          <td><?php echo $row['RegistrationDate']; ?></td>
                        </tr>
                      </table>



                    </div>
                  </div>
                </div>

                <!-- Test Information --->
                <div class="col-lg-6">

                  <!-- Basic Card Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Test Information</h6>
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                          <th>Order Number</th>
                          <td><?php echo $row['OrderNumber']; ?></td>
                        </tr>

                        <tr>
                          <th>Test Type</th>
                          <td><?php echo $row['TestType']; ?></td>
                        </tr>


                        <tr>
                          <th>Time Slot</th>
                          <td><?php echo $row['TestTimeSlot']; ?></td>
                        </tr>

                        <tr>
                          <th>Report Status</th>
                          <td><?php if ($row['ReportStatus'] == '') :
                                echo "Not Processed yet";
                              else :
                                echo $row['ReportStatus'];
                              endif;

                              ?></td>
                        </tr>


                        <?php if ($row['AssignedtoEmpId'] != '') : ?>
                          <tr>
                            <th>Assign To</th>
                            <td><?php echo $row['AssigntoName']; ?>-(<?php echo $row['AssignedtoEmpId']; ?>)</td>
                          </tr>

                          <tr>
                            <th>Assigned Date</th>
                            <td><?php echo $row['AssignedTime']; ?></td>
                          </tr>
                        <?php endif; ?>
                        <?php if ($row['FinalReport'] != '') : ?>
                          <tr>
                            <th>Report</th>
                            <td><a href="reportfiles/<?php echo $row['FinalReport']; ?>" target="_blank">Download</a></td>
                          </tr>

                          <tr>
                            <th>Report Delivered Time</th>
                            <td><?php echo $row['ReportUploadTime']; ?></td>
                          </tr>
                        <?php endif; ?>

                      </table>


                      <?php if ($row['AssignedtoEmpId'] == '') :
                      ?>
                        <div class="form-group">
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#assignto">Assign To</button>
                        </div>
                        <?php else :
                        $rstatus = $row['ReportStatus'];
                        if ($rstatus == 'Assigned' || $rstatus == 'On the Way for Collection' || $rstatus == 'Sample Collected' || $rstatus == 'Sent to Lab') : ?>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#takeaction">Take Action</button>
                      <?php
                        endif;
                      endif; ?>
                    </div>
                  </div>

                </div>
            </div>
          <?php } ?>


          <!-- Test Tracking History --->
          <?php
          $orderid = intval($_GET['oid']);
          $ret = mysqli_query($con, "select * from tblreporttracking
join tbladmin on tbladmin.ID=tblreporttracking.RemarkBy
where tblreporttracking.OrderNumber='$orderid'");
          $num = mysqli_num_rows($ret);
          ?>

          <div class="row">
            <div class="col-lg-12">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" align="center">Test Tracking History</h6>
                </div>
                <div class="card-body">
                  <?php if ($num > 0) {
                  ?>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <tr>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>Remark Date</th>
                        <th>Remark By</th>
                        <?php while ($result = mysqli_fetch_array($ret)) { ?>
                      </tr>
                      <tr>
                        <td><?php echo $result['Remark']; ?></td>
                        <td><?php echo $result['Status']; ?></td>
                        <td><?php echo $result['PostingTime']; ?></td>
                        <td><?php echo $result['AdminName']; ?></td>
                      </tr>

                    <?php } // End while loop
                    ?>

                    </table>
                  <?php
                    //end if   
                  } else { ?>
                    <h4 align="center" style="color:red"> No Tracking history found </h4>
                  <?php } ?>


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
    <?php include_once('../includes/footer2.php'); ?>


    <!-- Assign Modal -->
    <div id="assignto" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 align="left">Assign to</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

            <form method="post">
              <p> <select class="form-control" name="assignto" required="true">
                  <option value="">Select Phlebotomist</option>
                  <?php $sql = mysqli_query($con, "select FullName,EmpID from tblphlebotomist");
                  while ($result = mysqli_fetch_array($sql)) {
                  ?>
                    <option value="<?php echo $result['FullName'] . "-" . $result['EmpID']; ?>"><?php echo $result['FullName']; ?> - (<?php echo $result['EmpID']; ?>) </option>
                  <?php } ?>
                </select></p>
              <p>
                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
              </p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>

      </div>
    </div>



    <!-- Take Action Modal -->
    <div id="takeaction" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 align="left">Take Action</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form method="post" enctype="multipart/form-data">
              <p> <select class="form-control" name="status" id="status" required="true">
                  <option value="">Select Action</option>
                  <?php

                  $query1 = mysqli_query($con, "select ReportStatus from tbltestrecord where OrderNumber='$orderid'");
                  while ($result = mysqli_fetch_array($query1)) :
                    $reportstatus = $result['ReportStatus'];
                  endwhile;
                  ?>

                  <?php if ($reportstatus == 'Assigned') : ?>
                    <option value="On the Way for Collection">On the Way for Collection</option>
                    <option value="Sample Collected">Sample Collected</option>
                    <option value="Sent to Lab">Sent to Lab</option>
                    <option value="Delivered">Delivered</option>
                  <?php elseif ($reportstatus == 'On the Way for Collection') : ?>
                    <option value="Sample Collected">Sample Collected</option>
                    <option value="Sent to Lab">Sent to Lab</option>
                    <option value="Delivered">Delivered</option>
                  <?php elseif ($reportstatus == 'Sample Collected') : ?>
                    <option value="Sent to Lab">Sent to Lab</option>
                    <option value="Delivered">Delivered</option>
                  <?php elseif ($reportstatus == 'Sent to Lab') : ?>
                    <option value="Delivered">Delivered</option>
                  <?php endif; ?>

                </select></p>
              <p id='reportfile'> Report <span style="color:red; font-size:12px;">(Doc and PDF formate allowed)</span> <input type="file" name="report" id="report"></p>
              <p>
                <textarea name="remark" class="form-control" required="true" placeholder="Remark (Max 500 Characters)" maxlength="500" rows="5"></textarea>
              </p>
              <p>
                <input type="submit" class="btn btn-primary btn-user btn-block" name="takeaction" id="submit">
              </p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>

      </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
      //For report file
      $('#reportfile').hide();
      $(document).ready(function() {
        $('#status').change(function() {
          if ($('#status').val() == 'Delivered') {
            $('#reportfile').show();
            jQuery("#report").prop('required', true);
          } else {
            $('#reportfile').hide();
          }
        })
      })
    </script>
  </body>

  </html>
<?php } ?>