<?php
include('connect.php');

$carname = $_POST['carname'];





$sql = "INSERT INTO car (
 Car_Name) VALUES (
 '$carname')";
mysqli_query($conn, $sql);

header("location: car.php");

?>