

 <?php
 include("config.php");
 $patientid = $_POST['pid'];
 $doctor_id = $_POST['did'];
 $date = $_POST['date'];
 

$result1=mysqli_query($conn,"SELECT * from Staff where Staff_Id='$doctor_id'");
 $row1 = mysqli_fetch_assoc($result1);
$amt=$row1['Salary'];
$purchase=$_POST['purchase'];
 $sql = "INSERT INTO `rinvoice`( `p_id`, `doctor_id`, `date`, `amount`, `purchase`) VALUES ('$patientid','$doctor_id','$date','$amt','$purchase')";
 mysqli_query($conn, $sql);

 ?>