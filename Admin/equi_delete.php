<?php 
	include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM equipment WHERE Equi_Id = $id";
mysqli_query($conn, $sql);
header("location:equipment.php");
 ?>