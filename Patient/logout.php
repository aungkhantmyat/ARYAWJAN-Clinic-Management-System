<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
	session_destroy();
	echo "<script>alert('Logout Success.')</script>";
	header("location: ..\pharmacy\loginform.php");
 ?>
</body>
</html>