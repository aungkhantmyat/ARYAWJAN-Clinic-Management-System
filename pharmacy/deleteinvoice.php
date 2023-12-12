<?php 
include('..\pharmacy2\config.php');
$id = $_GET['id'];
$tmp=[];
$tmp=explode(',', $id);

 $sql = "DELETE FROM  invoice_item WHERE invoice_id='$tmp[0]' and medicine_id='$tmp[1]'";
 mysqli_query($conn, $sql);
header("location: newsell.php");

 ?>