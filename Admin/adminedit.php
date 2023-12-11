<?php 
include('connect.php');


$adminid=$_POST['adminid'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
if($photo){
	move_uploaded_file($tmp, 'Photos/$photo');
}



$sql = "UPDATE staff SET Name='$name', Birthdate='$age',Address='$address',
Phone='$phone',Email='$email',Photo='$photo' WHERE Staff_Id = '$adminid' ";

mysqli_query($conn, $sql);
header("location: index.php");
 ?>