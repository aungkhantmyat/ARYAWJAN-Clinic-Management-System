<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include('connect.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	if($password==$cpassword)
	{
		$query="INSERT INTO admin(username,password) VALUES ('$username','$password') ";
		mysqli_query($conn,$query);
		echo " <script> alert('Account successfully created!')  </script> ";
		echo " <script> location='loginform.php'  </script> ";
	}

	else
	{
		echo " <script> alert('Mismatched passwords!')  </script> ";
		echo " <script> location='registerform.php'  </script> ";
	}	
 ?>
</body>
</html>