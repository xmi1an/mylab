<?php
include_once('../includes/config.php');

require '../vendor/autoload.php';

use Twilio\Rest\Client;
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

$smsbody =  "
Hey {$fname}! This SMS From MyLab 💉.

We Saw that you made an appointment for your {$testtype} Test on {$timeslot}.

Phebotomist will come to your home to perform the test.

Till Keep yourself safe by staying at home 😷.
  
Check Your Test Status Here
https://mylab.in/patient-search-report.php
    ";

if ($result) {
    // Send SMS Code for New Registration Test.
    $msgbody =
        // Your Account SID and Auth Token from twilio.com/console
        $sid = 'AC5c83bebd48fbf749d4012704ec891a8b';
    $token = '694dbd4c6b01eaeb6dc1999351def3c7';
    $client = new Client($sid, $token);

    // Use the client to do fun stuff like send text messages!
    $client->messages->create(
        // the number you'd like to send the message to
        '+919016353443',
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+19704699052',
            // the body of the text message you'd like to send
            'body' => "$smsbody"
        ]
    );
    // End of Send SMS Code for New Registration Test.
} else {
    echo "Error: " . mysqli_error($con);
}
