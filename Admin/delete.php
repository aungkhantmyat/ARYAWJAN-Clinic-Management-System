<?php
include("connect.php");
$str = $_GET['id'];
$loc=strpos($str,"/");
$id=substr($str,0,$loc);
$name=substr($str,$loc+1,strlen($str)-1);
$sql = "DELETE FROM staff WHERE Staff_Id = $id";
mysqli_query($conn, $sql);
if($name=='driver')
{
	header("location: driver.php");
}
else if($name=='doctor')
{
	header("location:doctor.php");
}
else if($name=='admin')
{
	header("location:admin.php");
}
else if($name=='hr')
{
	header("location:hr.php");
}
else if($name=='nurse')
{
	header("location:nurse.php");
}
else if($name=='pharmacist')
{
	header("location:pharmacist.php");
}
else
{

}
?>