<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include('connect.php');
		session_start();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="SELECT * FROM staff WHERE Name='$username' AND Password='$password' AND Type='doctor'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		$arr=mysqli_fetch_array($result);

		if($count==0)
		{
			echo " <script> alert ('Username or Password Incorrect!') </script> ";
			header("location: ..\pharmacy\loginform.php");
		}

		else
		{
			$_SESSION['doctor_id']=$arr[1];
			$_SESSION['doctor_name']=$arr[2];
			$_SESSION['auth']=1;
			echo "<script>alert('Logged in Successfully!')</script>";
			header("location:treatment.php");
		}
		

	 ?>
</body>
</html>