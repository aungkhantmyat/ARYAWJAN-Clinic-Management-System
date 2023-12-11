<?php
include('connect.php');

$id=$_POST['id'];
$equiname = $_POST['equiname'];
$date = $_POST['date'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$supplier = $_POST['supplier'];
$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
if($photo){
	move_uploaded_file($tmp, 'Photos/$photo');
}

$sql = "UPDATE equipment SET Equi_Name='$equiname', Date='$date',
Price='$price', Qty='$qty', Supplier='$supplier',Photo='$photo' WHERE Equi_Id = $id";

mysqli_query($conn, $sql);
	header("location: equipment.php");
?>