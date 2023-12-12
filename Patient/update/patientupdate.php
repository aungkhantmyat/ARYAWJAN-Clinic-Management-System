<?php 
include('C:\xampp\htdocs\Patient\connect.php');
// $name = $_POST['name'];
$p_id=$_POST['p_id'];
$file_id=$_POST['file_id'];
$doctor_id = $_POST['doctor'];
$note=$_POST['note'];
$now=date('Y-m-d');
$cover = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "../covers/$cover");

}

$sql = "UPDATE patientfile SET file_name='$cover',p_id='$p_id',doctor_id='$doctor_id',date='$now',file_note='$note' WHERE file_id='$file_id';";
mysqli_query($conn, $sql);
header("location: ../patientfile.php");
 ?>