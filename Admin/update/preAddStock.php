<?php
$id = $_REQUEST['id'];

include('C:\xampp\htdocs\pharmacy2\config.php');
        $result = mysqli_query($conn, "SELECT * FROM medicine WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);

?>

 <form action="addStock.php" method="post">
            <div class="row">
              <div class="col-sm">
               <div class="form-group">
                <label for="batchno">Batch Number:</label>
                <input type="text" class="form-control" id="batchno" placeholder="Enter Batch Number" name="batchno">
              </div>
              <div class="form-group">
                <label for="expiredDate">Expiry Date:</label>
                <input type="date" class="form-control" id="expiredDate" placeholder="Enter Expiry Date" name="expiredDate">
              </div>
              <div class="form-group">
                <label for="inwardDate">Inward Date:</label>
                <input type="date" class="form-control" id="inwardDate" placeholder="Enter Inward Date" name="inwardDate">
              </div>

            </div>
            <div class="col-sm">
             <div class="form-group">
              <label for="originalPrice">Original Price:</label>
              <input type="text" class="form-control" id="originalPrice" placeholder="Enter Original Price" name="originalPrice">
            </div>
            <div class="form-group">
              <label for="sellingPrice">Selling Price:</label>
              <input type="text" class="form-control" id="sellingPrice" placeholder="Enter Selling Price" name="sellingPrice">
            </div>
            <div class="form-group">
              <label for="qty">Qty:</label>
              <input type="number" class="form-control" id="qty" placeholder="Enter Qty" name="qty">
            </div>
          </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>