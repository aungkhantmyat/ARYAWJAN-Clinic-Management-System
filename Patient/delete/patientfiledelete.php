<?php
include('C:\xampp\htdocs\Patient\connect.php');
$str = $_GET['id'];
$sql = "DELETE FROM patientfile WHERE file_id = $str";
mysqli_query($conn, $sql);
header("location: ../patientfile.php");
?>