<?php
include('connect.php');

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
$department = $_POST['department'];
$type=$_POST['type'];
$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
if($cover){
	move_uploaded_file($tmp, 'Photos/$photo');
}



$count="SELECT * FROM staff WHERE Type='$type'";
$res=mysqli_query($conn, $count);
$count1=0;
while($row = mysqli_fetch_assoc($res)){
$count1++;

}


if($type=='doctor')
	{$id='11'.$count1;
}
else if($type=='pharmacist')
{
	$id='12'.$count1;
}
else if($type=='driver')
{
	$id='13'.$count1;
}
else if($type=='hr')
{
	$id='14'.$count1;
}
else if($type=='admin'){
	$id='15'.$count1;
}
else if($type=='nurse'){
	$id='16'.$count1;
}
else{
	$id='17'.$count1;
}




$sql = "INSERT INTO staff (
 Staff_Id,Name,Birthdate,NRC,Gender,Address,Phone,Email,Education,Certification,Rank,Department,Type,Joined_Date,Photo) VALUES (
 '$id','$name','$birthdate','$nrc','$gender','$address','$phone','$email','$education','$certification','$rank','$department','$type',now(),'$photo')";
mysqli_query($conn, $sql);
if($type=='doctor')
	{header("location: doctor.php");;
}
else if($type=='pharmacist')
{
	header("location: pharmacist.php");;
}
else if($type=='driver')
{
	header("location: driver.php");;
}
else if($type=='hr')
{
	header("location: hr.php");;
}
else if($type=='admin'){
	header("location: admin.php");;
}
else if($type=='nurse'){
	header("location: nurse.php");;
}
else{
	header("location: IUD.php");;
}


?>