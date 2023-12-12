 <?php
include('C:\xampp\htdocs\Patient\connect.php'); 
$id=$_GET['q'];


$res="SELECT * FROM staff WHERE Department ='$id'";
$result=mysqli_query($conn,$res);
?>
<label for="doctor">Doctors:</label>
<select name="doctor" id="doctor" class="custom-select">


  <?php while ($row=mysqli_fetch_assoc($result)) {?>
    <option value="<?php echo $row['Staff_Id'] ?>"><?php echo $row['Name']; ?></option>
 <?php } ?>
</select>

