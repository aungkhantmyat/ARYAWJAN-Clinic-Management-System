<?php
include('connect.php');

$pharmacistList=$_POST['pharmacistList'];
$staffId=$_POST['staffId'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$nrc = $_POST['nrc'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$joinedDate= $_POST['joinedDate'];
$education = $_POST['education'];
$certification= $_POST['certification'];
$department = $_POST['department'];
$salary= $_POST['salary'];
$password = $_POST['password'];
$rank = $_POST['rank'];

$sql = "UPDATE pharmacist SET Pharmacist_List='$pharmacistList', Staff_Id='$staffId',
Name='$name', Birthdate='$birthdate', NRC='$nrc',Gender='$gender',
Address='$address',Phone='$phone',Email='$email',Joined_Date='$joinedDate',Education='$education',Certification='$certification',Department='$department'  WHERE Staff_Id = $staffId";

mysqli_query($conn, $sql);
	header("location: pharmacist.php");
?>