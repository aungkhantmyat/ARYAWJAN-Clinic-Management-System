<?php 
	session_start();
	$auth=isset($_SESSION['auth']);

	if(!$auth)
	{
		echo "<script> alert ('Please log in to continue')</script>";
		echo "<script> location='loginform.php'</script>";
	}
	else
	{

	}
 ?>