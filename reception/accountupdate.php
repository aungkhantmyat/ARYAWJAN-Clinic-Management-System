<?php 
$link = mysqli_connect("localhost", "root", "", "testingaq");
 include("config.php");




// $name = $_POST['name'];
 $a_id=$_POST['a_id'];
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_phone = $_POST['a_phone'];
$a_doctor = $_POST['a_doctor'];
$a_age= $_POST['a_age'];
$blood=$_POST['blood'];
$allergy=$_POST['allergy'];
//echo $a_name.$a_email;


$sql33 = "INSERT INTO `patient`( `p_name`, `p_phone`, `p_email`,'p_age', `p_blood`, `p_drug_allergy`, `doctor_id`) VALUES ('$a_name','$a_phone','$a_email','$a_age','$blood','$allergy','$a_doctor')";
if(mysqli_query($link, $sql33)){
	//echo "success";
}

$result=mysqli_query($conn,"SELECT * from patient ");
$patientid="";
while ($row = mysqli_fetch_assoc($result)){
		$patientid=$row['p_id'];
}

// echo $patientid ;
// echo $a_id;
$sql44 = "UPDATE `appointment` SET `p_id`='$patientid' WHERE `app_id`='$a_id'" ;




if(mysqli_query($link, $sql44)){
	//echo "success";
}


 ?>
 