<?php
$id = $_REQUEST['id'];
include('C:\xampp\htdocs\pharmacy2\config.php');
        $result = mysqli_query($conn, "SELECT * FROM medicine WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
  $result2 = mysqli_query($conn, "SELECT * FROM category");

  $result1 = mysqli_query($conn, "SELECT * FROM supplier");


?>
<form action="update/updateMedicine.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm">
                <div  class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" value="<?php echo $row['name']?>" name="name">
                </div>
                <div class="form-group">
                  <label for="category">Category:</label>
                  <select name="category" class="custom-select form-control " id="category">
                  	<?php while($row2 = mysqli_fetch_assoc($result2)): 
                  		if($row['category']==$row2['name']):

                  		?>    

                 <option value="<?php echo $row2['name'] ?>" selected>
                  <?php echo $row2['name'] ?>  
                </option>
            <?php else: ?>
             <option value="<?php echo $row2['name'] ?>" >
                  <?php echo $row2['name'] ?>  
                </option>
              <?php 
          endif;
          endwhile; ?>
                  
                  </select>
                </div>
                <div class="form-group">
                  <label for="company">Company:</label>
                  <input type="text" class="form-control" id="company" value="<?php echo $row['company']?>"name="company">
                </div>

                <div class="form-group">
                  <label for="composition">Composition:</label>
                  <textarea class="form-control" id="composition"  name="composition" ><?php echo $row['composition']?></textarea>
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="supplier">Supplier:</label>
                  <select name="supplier" class="custom-select form-control" id="supplier">
                  	<?php while($row1 = mysqli_fetch_assoc($result1)): 
                  		if($row['supplier']==$row1['name']):

                  		?>    

                 <option value="<?php echo $row1['name'] ?>" selected>
                  <?php echo $row1['name'] ?>  
                </option>
            <?php else: ?>
             <option value="<?php echo $row1['name'] ?>" >
                  <?php echo $row1['name'] ?>  
                </option>
              <?php 
          endif;
          endwhile; ?>
                   
                  </select>
                </div>
                <div class="form-group">
                  <label for="note">Note:</label>
                  <textarea class="form-control" id="note" value="<?php echo $row['note']?>" name="note" >
                  	<?php echo $row['note']?>
                  </textarea>
                </div>
                  <div class="form-group">
                    <label for="photo">Photo:</label>

         <div class="custom-file mb-3">

          <input type="file" class="custom-file-input" id="photo" name="photo">
          <label class="custom-file-label" for="photo">Choose Mediine Photo:</label>
        </div>
      </div>
                
              </div>
           
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">

            <button type="submit" class="btn btn-success">Submit</button>
              <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
          </form>