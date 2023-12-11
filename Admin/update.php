<?php
include('connect.php');


$id=$_POST['id'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$nrc = $_POST['nrc'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$education = $_POST['education'];
$certification = $_POST['certification'];
$rank = $_POST['rank'];
$type=$_POST['type'];
$department = $_POST['department'];
$salary=$_POST['salary'];
$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
if($photo){
	move_uploaded_file($tmp, 'Photos/$photo');
}



$sql = "UPDATE staff SET Name='$name', Birthdate='$birthdate',
NRC='$nrc', Gender='$gender', Address='$address',
Phone='$phone',Email='$email',Education='$education',Certification='$certification',Rank='$rank',Department='$department',Salary='$salary',Photo='$photo' WHERE Staff_Id = '$id' ";

mysqli_query($conn, $sql);
if($type=='admin')
{
	header("location: admin.php");
}
else if($type=='doctor')
{
	header("location: doctor.php");
}
else if($type=='hr')
{
	header("location: hr.php");
}
else if($type=='nurse')
{
	header("location: nurse.php");
}
else if($type=='driver')
{
	header("location: driver.php");
}
else if($type=='pharmacist')
{
	header("location: pharmacist.php");
}
else
{

}
?>

