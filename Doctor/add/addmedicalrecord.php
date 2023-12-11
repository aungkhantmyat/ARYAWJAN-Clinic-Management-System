<?php
include('C:\xampp\htdocs\Doctor\connect.php'); 
$id=$_GET['id'];
$tmp=[];
$tmp=explode(",", $id);
?>

<form action="add\patientrecordadd.php" method="post">
  <div class="form-group">
    <label for="treatment">Treatment Record:</label>
     <textarea class="form-control" name="treatment" rows="4" id="treatment"></textarea>
  </div>
  <div class="form-group">
    <label for="drug">Drug Record:</label>
     <textarea class="form-control" name="drug" rows="4" id="drug"></textarea>
  </div>
  <input type="hidden" name="p_id" value=" <?php echo $tmp[0] ?>">
  <input type="hidden" name="doctor_id" value=" <?php echo $tmp[1] ?>">
  <button type="submit" class="btn btn-success">Add New Record</button>
</form>