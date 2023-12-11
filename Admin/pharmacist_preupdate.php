<?php
include("connect.php"); 
$id=$_GET['id'];
$id=(int)$id;
$res="SELECT * FROM pharmacist WHERE Staff_Id='$id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
echo $row['Equi_Id'];
?>



<form class="modal-content animate" action="nurse_update.php" method="post">

	<div class="container">
		<label for="nurseList">Nurse List</label>
		<input type="text" name="nurseList" id="nurseList" value="<?php echo $row['Nurse_List']; ?>"><br>

		<label for="date">Staff Id</label>
		<input type="text" name=" id="date" value="<?php echo $row['Date']; ?>"><br>

		<label for="price">Name</label>
		<input type="text" name="price" id="price" value="<?php echo $row['Price']; ?>"><br>


        <label for="qty">Birthdate</label>
		<input type="text" name="qty" id="qty" value="<?php echo $row['Qty']; ?>"><br>

		<label for="com_name">NRC</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Gender</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Address</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Phone</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Email</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Joined Date</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Education</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Certification</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Department</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Salary</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Password</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>

		<label for="com_name">Rank</label>
		<input type="text" name="com_name" id="com_name" value="<?php echo $row['Com_Name']; ?>"><br>



		<input type="hidden" name="id" value="<?php echo $id ?>"><br>


		<button type="submit">Update</button>

	</div>

	<div class="container" style="background-color:#f1f1f1">
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

	</div>
</form> 