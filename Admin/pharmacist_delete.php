<?php 
	include("connect.php");
$staffId = $_GET['staffId'];
$sql = "DELETE FROM pharmacist WHERE staffId = $staffId";
mysqli_query($conn, $sql);
header("location:pharmacist.php");
 ?>