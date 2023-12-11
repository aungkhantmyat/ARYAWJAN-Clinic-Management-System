<?php 
include('connect.php');
$adminid=$_POST['adminid'];
$fg_email = $_POST['fg_email'];
$res="SELECT * FROM staff WHERE Staff_Id='$adminid'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$password=$row['Password'];
$ename=$row['Name'];
$to = $fg_email;
$subject = "HTML email";

$message = "
<html>
<head>
<title></title>
</head>
<body>
<h1>Hello<?php echo $ename ; ?>,</h1>
<p>
Your current password  is <strong><?php echo $password; ?></strong>
</p>
</body>
</html>
";
$message1="Your current password is".$password.".";

// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $header = "From: aungkhantmyat158@gmail.com" . "\r\n" .
// "CC: somebodyelse@example.com";


// mail($to,$subject,$message1,$header);
//header("location: ../patientprofile.php");

 ?>