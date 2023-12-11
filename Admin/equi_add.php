<?php
include('connect.php');

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





$sql = "INSERT INTO equipment (
 Equi_Name,Date,Price,Qty,Supplier,Photo) VALUES (
 '$equiname','$date','$price','$qty','$supplier','$photo')";
mysqli_query($conn, $sql);

header("location: equipment.php");

?>