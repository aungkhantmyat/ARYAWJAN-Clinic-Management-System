<?php 
include('connect.php');
$adminid=$_POST['adminid'];
$current_password=$_POST['current_password'];
$change_password=$_POST['change_password'];
$confirm_password=$_POST['confirm_password'];
$res="SELECT * FROM staff WHERE Staff_Id='$adminid'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);


if($row['Password']==$current_password)
{
	if($change_password==$confirm_password){
		$sql = "UPDATE staff SET Password='$confirm_password' WHERE Staff_Id='$adminid'";
		mysqli_query($conn, $sql);
		echo "<script>alert('Updated Successfully')</script>";
		header("location:editprofile.php");
	}
	else{
		echo "<script>alert('Mismatch Passwords')</script>";
		header("location:editprofile.php");
	}
}
else{
	echo "<script>alert('Wrong Password')</script>";
		header("location:editprofile.php");
}
 ?>