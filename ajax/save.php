<?php
include_once('../includes/config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "INSERT INTO `contactus`(`name`, `email`, `phone`, `message`) VALUES ('$name', '$email','$phone','$message')";

mysqli_query($con, $query);
