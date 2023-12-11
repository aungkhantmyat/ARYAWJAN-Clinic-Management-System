<?php
include('C:\xampp\htdocs\Doctor\connect.php'); 
$treatment = $_POST['treatment'];
$drug = $_POST['drug'];
$p_id= $_POST['p_id'];
$doctor_id = $_POST['doctor_id'];
$date=date("d.m.Y");
echo $treatment.$drug.$doctor_id.$p_id;
$date1='1.1.2002';
$res="SELECT * FROM patientrecord WHERE p_id=$p_id and doctor_id=$doctor_id and date='2019-08-01' ";
	$result=mysqli_query($conn,$res);
	$row=mysqli_fetch_assoc($result);
	print_r($row);
	$id= $row['id'];
	mysqli_query($conn,"UPDATE `patientrecord` SET `record`='$treatment',`drug_list`='$drug'  WHERE id='$id'");
	header("location: ../atreatment.php");
?>
