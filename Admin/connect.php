<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='testingaq';

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	mysqli_select_db($conn,$dbname);

 ?>
</body>
</html>