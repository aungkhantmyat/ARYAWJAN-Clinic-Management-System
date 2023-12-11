<?php 
include('C:\xampp\htdocs\Doctor\connect.php'); 

$treatment = $_POST['treatment'];
$drug = $_POST['drug'];
$p_id= $_POST['p_id'];
$doctor_id = $_POST['doctor_id'];
$date=date("d.m.Y");
echo $treatment.$drug.$doctor_id.$p_id;
$date1='1.1.2001';
if(mysqli_query($conn,"UPDATE `patientrecord` SET `record`='$treatment',`drug_list`='$drug'  WHERE p_id='$p_id' and doctor_id='$doctor_id' and date='$date1'")){
	echo "success";
}else{
	echo "fail";
}
// header("location: ../treatment.php");
 ?>