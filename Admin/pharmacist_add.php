<?php
include('connect.php');


$pharmacistList= $_POST['pharmacistList'];
$staffId= $_POST['staffId'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$nrc = $_POST['nrc'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$joinedDate = $_POST['joinedDate'];
$education = $_POST['certification'];
$department = $_POST['department'];
$salary = $_POST['salary'];
$password = $_POST['password'];
$rank= $_POST['rank'];

$sql = "INSERT INTO pharmacist (
 Pharmacist_List,Staff_Id,Name,Birthdate,NRC,Gender,Address,Phone,Email,
 Joined_Date,Education,Certification,Department,Salary,Password,Rank) 
 VALUES ('$pharmacistList','$staffId',$name','$birthdate','$nrc','$gender','$address','$phone','$email',
 '$joinedDate','$education','$certification','$department','$salary',
 '$password','$rank')";
mysqli_query($conn, $sql);

header("location: equipment.php");

?>