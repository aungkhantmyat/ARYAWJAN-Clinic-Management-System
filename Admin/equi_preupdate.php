<?php
include("connect.php"); 
$id=$_GET['id'];
$id=(int)$id;
$res="SELECT * FROM equipment WHERE Equi_Id='$id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);


?>



<form action="equi_update.php" method="post" enctype="multipart/form-data">

	<div class="row">
	<div class="col-sm">
		<div class="form-group">
                  <label for="equiname">Equipment Name:</label>
                  <input type="text" class="form-control" id="equiname" value="<?php echo $row['Equi_Name']?>" name="equiname">
        </div>

        <div class="form-group">
                  <label for="date">Date:</label>
                  <input type="text" class="form-control" id="date" value="<?php echo $row['Date']?>" name="date">
        </div>

        <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="text" class="form-control" id="price" value="<?php echo $row['Price']?>" name="price">
        </div>

        <div class="form-group">
                  <label for="qty">Quantity:</label>
                  <input type="text" class="form-control" id="qty" value="<?php echo $row['Qty']?>" name="qty">
        </div>

        <div class="form-group">
                  <label for="supplier">Supplier:</label>
                  <input type="text" class="form-control" id="supplier" value="<?php echo $row['Supplier']?>" name="supplier">
        </div>

        <div class="custom-file mb-3">

                      <input type="file" class="custom-file-input" id="photo" name="photo">
                      <label class="custom-file-label" for="photo">Choose Equipment Photo:</label>
                    </div>

		


		<input type="hidden" name="id" value="<?php echo $id ?>"><br>


		
	</div>
	</div>

	 <button type="submit" class="btn btn-success">Submit</button>
</form> 