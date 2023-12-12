<?php 
include('C:\xampp\htdocs\Patient\connect.php');
// $name = $_POST['name'];
$p_id=$_POST['p_id'];
$current_password=$_POST['current_password'];
$change_password=$_POST['change_password'];
$confirm_password=$_POST['confirm_password'];
echo $current_password.",".$change_password.','.$confirm_password;
$res="SELECT * FROM patient WHERE p_id='$p_id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);

if($row['p_password']==$current_password)
{
	if($change_password==$confirm_password){
		$sql = "UPDATE patient SET p_password='$confirm_password' WHERE p_id='$p_id';";
		mysqli_query($conn, $sql);
		echo "<script>alert('Updated Successfully')</script>";
		header("location: ../patientprofile.php");
	}
	else{
		echo "<script>alert('Mismatch Passwords')</script>";
		header("location: ../patientprofile.php");
	}
}
else{
	echo "<script>alert('Wrong Password')</script>";
		header("location: ../patientprofile.php");
}

?>