<?php 
include('C:\xampp\htdocs\Patient\connect.php'); 
 $pid = $_POST['pid'];   


$doctor_id= $_POST['doctor'];   
$date= $_POST['date'];  
$sql="SELECT * FROM appointment where app_date='$date' AND app_doctor='$doctor_id'";
$sql1="SELECT * FROM patient where p_id='$pid'";

$temp= mysqli_query($conn, $sql); 
$result=mysqli_query($conn, $sql1);
$count=1; 
while($row = mysqli_fetch_assoc($temp)){
  $count++;
}
$row1 = mysqli_fetch_assoc($result);
$name=$row1['p_name'];
$email=$row1['p_email'];
$phone=$row1['p_phone'];
$age=$row1['p_age'];





echo $name.$phone;
echo "    ".$count;
$sqla = "INSERT INTO `appointment`( `app_name`, `app_age`, `app_phone`, `app_email`, `app_doctor`, `app_date`,p_id) VALUES ('$name','$age','$phone','$email','$doctor_id','$date','$pid')"; 

if(mysqli_query($conn, $sqla)){
	echo "suceess";
}else{
	echo "fial";
}
 $to = $email;
 $subject = "HTML email";

 $message = "
 <html>
 <head>
 <title></title>
 </head>
 <body>
 <h1>Hello<?php echo $name; ?>,</h1>
 <p>
 Your appointment number is '$count'
 </p>
 </body>
 </html>
 ";
 $message1="your appointment number is".$count.".";

 // Always set content-type when sending HTML email
 //$headers = "MIME-Version: 1.0" . "\r\n";
 //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

 // More headers
 $header = "From: aungkhantmyat158@gmail.com" . "\r\n" .
 "CC: somebodyelse@example.com";


 //mail($to,$subject,$message1,$header);
header("location: pmakeappointment.php"); 
?> 

