<?php
$id = $_GET['var'];
$temp = [];
$temp = explode(",", $id);

$date = $temp[0];
$doctor = $temp[1];
echo ($date);
echo ($doctor);
$conn = mysqli_connect("localhost", "root", "", "testingaq");
$res = "SELECT * FROM appointment WHERE app_date='$date' and app_doctor='$doctor'";
$result = mysqli_query($conn, $res);
while($row = mysqli_fetch_assoc($result))
{
	$pp_email=$row['app_email'];
	$res1 = "SELECT * FROM patient WHERE p_email='$pp_email'";
$result1 = mysqli_query($conn, $res1);
$row1 = mysqli_fetch_assoc($result1);
$to = $row1['p_email'];
$subject = "HTML email";


$message1="Dear  ". $row1['p_name']. ",Your appointment on ".$date."is canceled due to unexpected conditons.";

// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$header = "From: aungkhantmyat158@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";


//mail($to,$subject,$message1,$header);
}
$sql="Delete from appointment where app_doctor='$doctor' and app_date='$date'";
mysqli_query($conn,$sql);
header("location:searchbox_testing.php");

?>