<?php  
session_start();
 session_start();
	session_destroy();
	echo "<script>alert('Logout Success.')</script>";
	header("location:loginform.php");
     ?>
