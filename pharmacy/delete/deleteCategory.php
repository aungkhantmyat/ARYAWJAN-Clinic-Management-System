<?php 
include('C:\xampp\htdocs\pharmacy2\config.php');
$num = $_GET['num'];
$sql = "DELETE FROM category WHERE cat_number = '$num'";
mysqli_query($conn, $sql);
header("location: ../category.php");

 ?>