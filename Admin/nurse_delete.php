<?php 
	include("connect.php");
$staffId = $_GET['staffId'];
$sql = "DELETE FROM nurse WHERE Staff_Id = $staffId";
mysqli_query($conn, $sql);
header("location:nurse.php");
 ?>