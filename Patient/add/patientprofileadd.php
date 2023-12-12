<?php
include('C:\xampp\htdocs\Patient\connect.php'); 
include('C:\xampp\htdocs\Patient\auth.php');
$p_id=$_SESSION['p_id'];
$id=$_GET['id'];
$tmp=[];
$tmp=explode(",", $id);
$res="SELECT * FROM d_follower WHERE p_id='$p_id' AND doctor_id='$tmp[0]'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$str=$row['df_id'];
if($str==""){
	$str=$tmp[1].",";
}
else{
	$str.=$tmp[1].",";
}
$sql = "UPDATE d_follower SET df_id='$str' WHERE p_id='$p_id' AND doctor_id='$tmp[0]'";
mysqli_query($conn, $sql);
?>

	

