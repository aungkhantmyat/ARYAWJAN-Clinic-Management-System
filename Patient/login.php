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
		$query="SELECT * FROM patient WHERE p_name='$username' AND p_password='$password' ";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		$arr=mysqli_fetch_array($result);

		if($count==0)
		{
			echo " <script> alert ('Username or Password Incorrect!') </script> ";
			header("location: ..\pharmacy2\loginform.php");}

		else
		{
			$_SESSION['p_id']=$arr[0];
			$_SESSION['p_name']=$arr[1];
			$_SESSION['auth']=1;
			echo "<script>alert('Logged in Successfully!')</script>";
			header("location:book_view.php");
		}

	 ?>
</body>
</html>