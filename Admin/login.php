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
		$query="SELECT * FROM admin WHERE username='$username' AND password='$password' ";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		$arr=mysqli_fetch_array($result);

		if($count==0)
		{
			echo " <script> alert ('Username or Password Incorrect!') </script> ";
			echo " <script>location='loginform.php'</script> ";
		}

		else
		{
			$_SESSION['admin_id']=$arr[0];
			$_SESSION['username']=$arr[1];
			$_SESSION['auth']=1;
			echo "<script>alert('Logged in Successfully!')</script>";
			echo "<script>location='IUD.php'</script>";
		}

	 ?>
</body>
</html>