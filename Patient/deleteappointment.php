<?php 
include('C:\xampp\htdocs\Patient\connect.php'); 
$id=$_GET['id'];
echo $id;
$sql = "DELETE FROM appointment WHERE app_id = '$id'";
mysqli_query($conn, $sql);
header("location: pmakeappointment.php");
 ?>