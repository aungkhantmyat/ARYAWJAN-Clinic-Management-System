<?php
include("connect.php"); 
$id=$_GET['id'];
$id=(int)$id;
$res="SELECT * FROM car WHERE Car_Id='$id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);

?>



<form action="car_update.php" method="post" enctype="multipart/form-data">

	<div class="row">
	<div class="col-sm">
		<div class="form-group">
                  <label for="carname">Car Number:</label>
                  <input type="text" class="form-control" id="carname" value="<?php echo $row['Car_Name']?>" name="carname">
                </div>

		


		<input type="hidden" name="id" value="<?php echo $id ?>"><br>


		
	</div>
	</div>

	 <button type="submit" class="btn btn-success">Submit</button>
</form> 