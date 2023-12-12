<?php 
include("config.php");


?>
<?php   include("config.php");  
$name = $_POST['name'];   
$phone = $_POST['phone'];
$email = $_POST['email'];   
$department = $_POST['department'];
$doctor= $_POST['doctor'];   
$date= $_POST['date'];  
$sql="SELECT * FROM appointment where app_date='$date'";

$sqlDoctor="SELECT * FROM staff where Staff_Id='$doctor'";
$doctor1q=mysqli_query($conn, $sqlDoctor);
$temp= mysqli_query($conn, $sql); 
$count=0; 
while($row = mysqli_fetch_assoc($temp)){
  $count++;
}
$doctor1="";
while($row = mysqli_fetch_assoc($doctor1q)){
  $doctor1=$row['Name'];
}
$count=$count+1;

echo $name." ".$doctor;
echo "    ".$count;
$sql1 = "INSERT INTO appointment (app_name,app_phone,app_email,app_department,app_doctor,app_date) VALUES ('$name','$phone','$email','$department','$doctor1','$date')"; 
mysqli_query($conn, $sql1);
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
$message1="your appointment number is".$count." .";

// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$header = "From: aungkhantmyat158@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";


//mail($to,$subject,$message1,$header);
header("location: specialist_dir.php"); 
?> 

