<?php 
include('C:\xampp\htdocs\Patient\connect.php');
// $name = $_POST['name'];
$p_id=$_POST['p_id'];
$fg_email = $_POST['fg_email'];
echo $fg_email.$p_id;
$res="SELECT * FROM patient WHERE p_id='$p_id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$password=$row['p_password'];
$ename=$row['p_name'];
echo "///".$password."////";

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
$header = "From: aungkhantmyat158@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";


mail($to,$subject,$message1,$header);
//header("location: ../patientprofile.php");

 ?>