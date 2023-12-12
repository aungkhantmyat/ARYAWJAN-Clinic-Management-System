<?php 

include('connect.php');
// $name = $_POST['name'];
$invoice_id=$_POST['invoiceid'];
$TotalAmount = $_POST['TotalAmount'];
$getexchange =  $_POST['getexchange'];
$now=date("Y-m-d");
echo $invoice_id.$TotalAmount.$getexchange.$now;

$sql = "INSERT INTO `invoice`(`invoice_id`, `date`, `amount`, `purchase`) VALUES ('$invoice_id','$now','$TotalAmount','$getexchange')";
mysqli_query($conn, $sql);
header("location: testing4.php");
 ?>

 