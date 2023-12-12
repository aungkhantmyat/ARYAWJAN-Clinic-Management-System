<?php
$id = $_REQUEST['id'];
include('C:\xampp\htdocs\pharmacy2\config.php');
        $result = mysqli_query($conn, "SELECT * FROM supplier WHERE sup_id = '$id'");
$row = mysqli_fetch_assoc($result);

?>
 <form action="update/updateSupplier.php" method="post" enctype="multipart/form-data" >
            <div class="row">
              <div class="col-sm">
               <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" value="<?php echo $row['name']?>" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="<?php echo $row['email']?>" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" id="phone" value="<?php echo $row['phone']?>" 
                name="phone">
              </div>
              <div class="form-group">
                <label for="joindate">Joined Date:</label>
                <input type="date" class="form-control" id="joindate" value="<?php echo $row['joined_date']?>" name="joindate">
              </div>
            </div>
            <div class="col-sm">
             <div class="form-group">
              <label for="Address">Address:</label>
              <textarea class="form-control" id="address"  name="address" ><?php echo $row['address']?></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Items:</label>
              <input type="item" class="form-control" id="item" value="<?php echo $row['item']?>" name="item">
            </div>
             <div class="form-group">
          <label for="photo">Photo:</label>
          <div class="custom-file">
          
    <input type="file" class="custom-file-input" id="customFile" name="photo" value="<?php echo $row['photo']?>">
      <label class="custom-file-label" for="customFile">Choose file</label>
            
           </div>
           <input type="hidden" name="id" value="<?php echo $row['sup_id']?>">
          </div>
          </div>
        </div>


        <button type="submit" class="btn btn-success">Submit</button>
         <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
      </form>