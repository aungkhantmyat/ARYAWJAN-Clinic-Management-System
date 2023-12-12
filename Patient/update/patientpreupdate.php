<?php
include('C:\xampp\htdocs\Patient\connect.php'); 
$id=$_GET['id'];
$tmp=[];
$tmp=explode(",", $id);
$res="SELECT * FROM patientfile WHERE file_id='$tmp[0]'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);

$doctor_id=$row['doctor_id'];
$qwer=$tmp[1];
$res1="SELECT * FROM patient WHERE p_id='$qwer'";
$result1=mysqli_query($conn,$res1);
$row1=mysqli_fetch_assoc($result1);

$doctor_array=[];
$doctor_array=explode(",", $row1['doctor_id']);




?>




<form action="update\patientupdate.php" method="post" enctype="multipart/form-data">
  <div class="row">

    <div class="col-sm">







      <div class="form-group">
        <label for="file">File:</label>

        <div class="custom-file mb-3">

          <input type="file" class="custom-file-input" id="file" name="file">
          <label class="custom-file-label" for="file">Choose File:</label>
        </div>
      </div>

      <div class="form-group">
        <label for="doctor">Doctors:</label>
        <select name="doctor" id="doctor" class="custom-select">
         

          <?php foreach ($doctor_array as $var) {
          
        
            
            $res2="SELECT * FROM staff WHERE Staff_Id='$var'";
            $result2=mysqli_query($conn,$res2);
            $row2=mysqli_fetch_assoc($result2);
            if($var==$row['doctor_id']) {?>

            <option value="<?php echo $var ?>" selected>
              <?php echo $row2['Name']; ?>
            </option>
            <?php }else { ?>
            <option value="<?php echo $var ?>"><?php echo $row2['Name']; ?></option>
            <?php }} ?>
          </select>
        </div>
        <div class="form-group">
  <label for="note">File Description:</label>
  <textarea class="form-control" rows="5" id="note" name="note"><?php echo $row['file_note']; ?></textarea>
</div>

      </div>

    </div>
    <input type="hidden" name="p_id" value="<?php echo $qwer; ?>">
    <input type="hidden" name="file_id" value="<?php echo $tmp[0]; ?>">
    <button type="submit" class="btn btn-success">Submit</button>
     <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
  </form>