<?php
include_once('includes/config.php');
$labname = $_POST["labname"];

$sql = "select * from labmaster where labname = '$labname'";
$row = mysqli_query($con, $sql);
?>
<?php
while ($rows = mysqli_fetch_array($row)) {
    echo $rows['labid'];
}
?>