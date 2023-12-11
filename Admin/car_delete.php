<?php 
	include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM car WHERE Car_Id = $id";
mysqli_query($conn, $sql);
header("location:car.php");
 ?>