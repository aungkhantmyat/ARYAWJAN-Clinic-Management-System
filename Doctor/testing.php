<?php 
include('C:\xampp\htdocs\Doctor\connect.php');
$res2="SELECT * FROM patientrecord WHERE p_id='$p_id' and    date='$day1' and doctor_id='$doctor_id'";
                          $result2=mysqli_query($conn,$res2);
                          $row2=mysqli_fetch_assoc($result2);
                          $precord=$row2['record'];
                          echo $precord;

 ?>