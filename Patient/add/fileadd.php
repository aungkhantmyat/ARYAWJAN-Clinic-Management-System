<?php 
include('C:\xampp\htdocs\Patient\connect.php');
// $name = $_POST['name'];
$p_id=$_POST['p_id'];
$doctor_id = $_POST['doctor'];
$note = $_POST['note'];
$cover = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$now=date('Y-m-d');
echo $cover.$doctor_id.$note.$p_id;
if($cover) {
move_uploaded_file($tmp, "../covers/$cover");

}

$sql = "INSERT INTO patientfile(file_name, p_id, doctor_id, date,file_note) VALUES ('$cover','$p_id','$doctor_id','$now','$note')";
if(mysqli_query($conn, $sql)){
	echo "success";
}
header("location: ../patientfile.php");
 ?>