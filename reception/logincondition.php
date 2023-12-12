<?php 
include('C:\xampp\htdocs\Patient\connect.php');

$email=$_POST['email'];
$password = $_POST['password'];
$res="SELECT count(*) as total FROM staff WHERE Email='$email' and Password='$password' ";

$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$alert1=$row['total'];

 $res2="SELECT count(*) as total FROM patient WHERE p_email='$email' and p_password='$password'";
$result2=mysqli_query($conn,$res2);
$row2=mysqli_fetch_assoc($result2);
$alert2=$row2['total'];

if($alert1==0 and $alert2==0){
	echo "Email or Password is wrong!";
}
elseif ($alert1==1 and $alert2==0) {
	$resa="SELECT * FROM staff WHERE Email='$email' and Password='$password' ";

$resulta=mysqli_query($conn,$resa);
$rowa=mysqli_fetch_assoc($resulta);
	echo $rowa['Type']. "-account ";
}elseif ($alert1==0 and $alert2==1) {
	echo "Patient-account ";
}

 ?>