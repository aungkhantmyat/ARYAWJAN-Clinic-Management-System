<?php
include("connect.php"); 
$id=$_GET['id'];
$id=(int)$id;
$res="SELECT * FROM car WHERE Car_Id='$id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
echo $row['Car_Id'];
?>



<form class="modal-content animate" action="car_delete.php" method="post">

	<div class="container">
		<label for="carname">Car Name</label>
		<input type="text" name="carname" id="carname" value="<?php echo $row['Car_Name']; ?>"><br>

		


		<input type="hidden" name="id" value="<?php echo $id ?>"><br>


		<button type="submit">Delete</button>

	</div>

	<div class="container" style="background-color:#f1f1f1">
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

	</div>
</form> 