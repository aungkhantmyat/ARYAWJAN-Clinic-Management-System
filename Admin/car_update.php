<?php
include('connect.php');

$id=$_POST['id'];
$carname = $_POST['carname'];


$sql = "UPDATE car SET Car_Name='$carname' WHERE Car_Id = $id";

mysqli_query($conn, $sql);
	header("location: car.php");
?>