

 <?php
 include("config.php");
 $app_id = $_POST['app_id'];
 $doctor_id = $_POST['app_doctor'];
 $weight = $_POST['weight'];
 $b_pressure = $_POST['b_pressure'];

$res = "SELECT * FROM appointment WHERE app_id='$app_id'";
$result = mysqli_query($conn, $res);
$row11 = mysqli_fetch_assoc($result);
$patientid=$row11['p_id'];
echo $patientid;


 $sql = "INSERT INTO patientrecord (
  p_id,doctor_id,date,weight,b_pressure ) VALUES (
 '$patientid', '$doctor_id',now(),'$weight', '$b_pressure'
 )";
 mysqli_query($conn, $sql);

 $sql1= "INSERT INTO patientarrive (
  p_id,doctor_id,date ) VALUES (
 '$patientid', '$doctor_id',now()
 )";
 mysqli_query($conn, $sql1);
 ?>