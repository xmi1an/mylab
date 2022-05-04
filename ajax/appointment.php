<?php
include_once('../includes/config.php');
// $labcity = $_POST['city'];
// $selected_lab = $_POST['selected_lab'];
// $selected_lab_id = $_POST['selected_lab_id'];
// $fname = $_POST['fullname'];
// $mnumber = $_POST['mobilenumber'];
// $dob = $_POST['dob'];
// $govtid = $_POST['govtissuedid'];
// $govtidnumber = $_POST['govtidnumber'];
// $address = $_POST['address'];
// $state = $_POST['state'];
// $testtype = $_POST['testtype'];
// $timeslot = $_POST['timeslot'];
// $orderno = mt_rand(100000000, 999999999);

//  For AJax Request

$labcity = $_POST['city_dropdown'];
$selected_lab = $_POST['lab_dropdown'];
$selected_lab_id = $_POST['hdnlabid'];
$fname = $_POST['fullname'];
$mnumber = $_POST['mobilenumber'];
$dob = $_POST['dob'];
$aadharid = $_POST['aadharid'];
$address = $_POST['address'];
$state = $_POST['state'];
$testtype = $_POST['testtype'];
$timeslot = $_POST['timeslot'];
$orderno = mt_rand(100000000, 999999999);

$query = "insert into tblpatients(city,selected_lab,selected_lab_id,FullName,MobileNumber,DateOfBirth,aadharid,FullAddress,State) values('$labcity','$selected_lab','$selected_lab_id','$fname','$mnumber','$dob','$aadharid','$address','$state');";

$query .= "insert into tbltestrecord(selected_lab_id,PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$selected_lab_id','$mnumber','$testtype','$timeslot','$orderno');";

$result = mysqli_multi_query($con, $query);


// if ($result) {
//     echo '<script>alert("Your test request submitted successfully. Order number is "+"' . $orderno . '")</script>';
//     echo "<script>window.location.href='new-user-testing.php'</script>";
// } else {
//     echo "<script>alert('Something went wrong. Please try again.');</script>";
//     echo "<script>window.location.href='new-user-testing.php'</script>";
// }
