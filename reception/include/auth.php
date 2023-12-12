<?php
  session_start();  
  if(!isset($_SESSION['auth'])) 
  	{    header("location: loginform.php");   
  	 exit();  } 
  	 ?>