<?php
session_start();
include("config.php");
$app_id = $_GET['id'];
echo $app_id;
$sql = "DELETE FROM appointment WHERE app_id= $app_id";
mysqli_query($conn, $sql);
header("location: searchbox_testing.php");
?>
