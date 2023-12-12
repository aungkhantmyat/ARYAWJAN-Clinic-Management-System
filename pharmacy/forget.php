<?php 
include('..\Patient\connect.php');

$email=$_POST['email'];

$res="SELECT count(*) as total FROM staff WHERE Email='$email'  ";

$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$alert1=$row['total'];

 $res2="SELECT count(*) as total FROM patient WHERE p_email='$email'";
$result2=mysqli_query($conn,$res2);
$row2=mysqli_fetch_assoc($result2);
$alert2=$row2['total'];
$password='';

if($alert1==0 and $alert2==0){
	echo "Email or Password is wrong!";
}
elseif ($alert1==1 and $alert2==0) {
	$resa="SELECT * FROM staff WHERE Email='$email'  ";

$resulta=mysqli_query($conn,$resa);
$rowa=mysqli_fetch_assoc($resulta);
$password=$rowa['Password'];
	
}elseif ($alert1==0 and $alert2==1) {
	
	$resb="SELECT * FROM patient WHERE p_email='$email' ";

$resultb=mysqli_query($conn,$resb);
$rowb=mysqli_fetch_assoc($resultb);
$password=$rowb['p_password'];
}
$to = $email;
$subject = "HTML email";


$message1="Your password is".$password.".";

// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$header = "From: aungkhantmyat158@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";


//mail($to,$subject,$message1,$header);
header("location: loginform.php"); 

 ?>