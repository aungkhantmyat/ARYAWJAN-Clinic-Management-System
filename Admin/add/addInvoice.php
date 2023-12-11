<?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$invoiceId= $_POST['invoiceId'];
$medicineId = $_POST['medicine'];
$qty = $_POST['qty'];
echo $invoiceId.",".$qty.",".$medicineId;


$sql1 = "INSERT INTO invoice_item ('invoice_id', 'medicine_id', 'quantity') VALUES('$invoiceId','$medicineId','$qty')";

if(mysqli_query($conn, $sql1)){
	echo "success";
}
//header("location: newsell.php");
?>