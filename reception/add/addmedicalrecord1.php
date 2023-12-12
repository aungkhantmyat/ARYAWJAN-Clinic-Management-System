<?php 
include('C:\xampp\htdocs\Doctor\connect.php'); 

$treatment = $_POST['treatment'];
$drug = $_POST['drug'];
$p_id= $_POST['p_id'];
$doctor_id = $_POST['doctor_id'];
$date=date("d.m.Y");

echo $treatment.$drug.$p_id.$doctor_id.$date;
$sql = "INSERT INTO patientrecord(record,drug_list) VALUES ('$treatment','$drug') WHERE id=6";
if(mysqli_query($conn, $sql)){
	echo "Success";
}
else{
	echo "Fail";
}
// header("location: ../treatment.php");
 ?>