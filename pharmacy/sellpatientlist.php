<?php

$id=$_GET['num'];
$tmp=[];
$tmp=explode(',', $id);

$doctor_id=$tmp[0];
$date=$tmp[1];
include('..\pharmacy2\config.php');
$result4 = mysqli_query($conn, "SELECT * FROM patientarrive where date='$date' and 	doctor_id='$doctor_id'");
?>
  <label for="inlineFormInputGroup" class="sr-only">Username</label>
                      <input id="inlineFormInputGroup" type="text"  list="js-fw" placeholder="Type Patient Name" id='patientname' name='patient' class="mr-3 form-control form-control">

    <datalist id="js-fw">
      <?php while($row11 = mysqli_fetch_assoc($result4)){ 
        $pid=$row11['p_id'];
 $resultc = mysqli_query($conn, "SELECT * FROM patient where p_id='$pid'");
  $rowb = mysqli_fetch_assoc($resultc);
        ?>
         <option value="<?php echo $rowb['p_name']  ?>">
      <?php } ?>
      
      
 </datalist>
 