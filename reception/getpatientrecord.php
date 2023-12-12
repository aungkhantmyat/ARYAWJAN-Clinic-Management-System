<?php 	
include("config.php");
$id=$_GET['var'];
$id1=[];
$id1=explode(",",$id);
$doctorid=$id1[0];
$date=$id1[1];

 $result=mysqli_query($conn,"SELECT * from patientarrive where doctor_id='$doctorid' and date='$date'"  );



 ?>
  <?php
               $count=1;
               while($row = mysqli_fetch_assoc($result)): ?>
                <?php 
                $pid=$row['p_id'];
$result1=mysqli_query($conn,"SELECT * from patient where p_id='$pid'");
$row1 = mysqli_fetch_assoc($result1);
                 ?>
                 <option value="<?php echo $row1['p_name']  ?>">
           <?php $count++;

         endwhile; ?>