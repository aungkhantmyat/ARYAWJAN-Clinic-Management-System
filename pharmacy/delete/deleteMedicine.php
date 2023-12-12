<?php 
include('C:\xampp\htdocs\pharmacy2\config.php');
$id= $_GET['id'];
$sql = "DELETE FROM medicine WHERE id = '$id'";
mysqli_query($conn, $sql);
$sql1 = "DELETE FROM stock WHERE id = '$id'";
mysqli_query($conn, $sql1);

header("location: ../medicine.php");

 ?>