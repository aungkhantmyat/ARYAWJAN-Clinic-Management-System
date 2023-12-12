<?php 
include('..\Patient\connect.php'); 
$inc_from='2019-07-23';
$inc_to='2019-07-23';
$resultc = mysqli_query($conn, "SELECT * FROM invoice WHERE date BETWEEN '$inc_from' AND '$inc_to'  ORDER BY date ASC");
 
  while ( $rowb = mysqli_fetch_assoc($resultc)) {
  	echo $rowb['amount'].'<br>';
  }

 ?>
 