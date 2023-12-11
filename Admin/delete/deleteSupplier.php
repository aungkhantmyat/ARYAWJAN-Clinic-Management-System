<?php 
include('C:\xampp\htdocs\pharmacy2\config.php');
$id= $_GET['id'];
$sql = "DELETE FROM supplier WHERE sup_id = '$id'";
mysqli_query($conn, $sql);
header("location: ../supplier.php");

 ?>