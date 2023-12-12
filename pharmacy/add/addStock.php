<?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$id = $_POST['id'];
$batchno = $_POST['batchno'];
$expiredDate = $_POST['expiredDate'];
$inwardDate = $_POST['inwardDate'];
$originalPrice = $_POST['originalPrice'];
$sellingPrice = $_POST['sellingPrice'];
$qty= $_POST['qty'];
echo $id."ee";

$sql = "INSERT INTO stock(`id`, `batch_no`, `expiry_date`, `inward_date`, `quantity`, `selling_price`, `original_price`) VALUES ('$id','$batchno','$expiredDate','$inwardDate','$originalPrice','$sellingPrice','$qty')";
mysqli_query($conn, $sql);
header("location: ../medicine.php");
?>