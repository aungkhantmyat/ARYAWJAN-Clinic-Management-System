<?php 
	session_start();
	$auth=isset($_SESSION['auth']);
	$_SESSION['Admin_Id']='151';


	if(!$auth)
	{
		echo "<script> alert ('Please log in to continue')</script>";
		echo "<script> location='loginform.php'</script>";
	}
	else
	{

	}
 ?>