<?php
session_start();
include("confs/config.php");
$weight=$_POST['weight'];
$b_pressure=$_POST['b_pressure'];
mysqli_query($conn, "INSERT INTO patientrecord
(p_id,doctor_id,date,weight,b_pressure)
VALUES ($p_id,$doctor_id,now(),'$weight','$b_pressure') WHERE patientrecord.pid=appointment.patientid");
?>
