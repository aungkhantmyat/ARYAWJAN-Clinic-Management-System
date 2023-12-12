<?php 
include('C:\xampp\htdocs\Patient\connect.php');
// $name = $_POST['name'];
$p_id=$_POST['p_id'];
$name=$_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$age=intval(date("Y"))-intval(strtok($birthdate, '-'));
$b_type = $_POST['b_type'];
$drug_allergy = $_POST['drug_allergy'];
$cover = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "../covers/$cover");

}


$sql = "UPDATE `patient` SET p_name='$name',p_phone='$phone',p_email='$email',p_age='$age',p_blood='$b_type',p_drug_allergy='$drug_allergy',p_photo='$cover' WHERE p_id='$p_id'";
mysqli_query($conn, $sql);
header("location: ../patientprofile.php");
 ?>