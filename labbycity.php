<?php
include_once('includes/config.php');
$city_name = $_POST["city_name"];
$sql = "select * from labmaster where labcity = '$city_name'";
$row = mysqli_query($con, $sql);
?>
<option value="">Select Lab</option>

<?php

while ($rows = mysqli_fetch_array($row)) {
?>
    <option value="<?php echo $rows["labname"]; ?>"><?php echo $rows["labname"]; ?></option>
<?php
}
?>