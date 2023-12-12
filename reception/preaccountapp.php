<?php
$id=$_GET['id'];
$tmp=[];
$tmp=explode(",", $id);
$a_id=$tmp[0]
$a_name=$tmp[1];
$a_email=$tmp[2];
$a_phone=$tmp[3];
$a_doctor=$tmp[4];
?>





<form action="accountupdate.php" method="POST">
  <div class="form-group">
    <label for="BloodType" >Blood Type:</label>
    <select name="blood" class="custom-select" id="BloodType">
    <option selected>Custom Select Menu</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="AB">AB</option>
    <option value="O">O</option>

  </select>
  </div>
  <div class="form-group">
    <label for="allergy">Allergy Conditions:</label>

  <textarea class="form-control" rows="5" id="allergy" name="allergy"></textarea>
</div>

  <input type="hidden" name="a_name" value="<?php echo $a_name; ?>">
  <input type="hidden" name="a_email" value="<?php echo $a_email; ?>">
  <input type="hidden" name="a_phone" value="<?php echo $a_phone; ?>">
  <input type="hidden" name="a_doctor" value="<?php echo $a_doctor; ?>">

  <button type="submit" class="btn btn-primary">Submit</button>

 
</form>
