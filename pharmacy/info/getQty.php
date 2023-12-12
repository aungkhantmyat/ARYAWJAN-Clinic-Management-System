<?php


// get the q parameter from URL
$q = $_REQUEST["qty"];

include('..\config.php');
        $result = mysqli_query($conn, "SELECT * FROM stock where id='$q' ");
        $row = mysqli_fetch_assoc($result);
          $result1 = mysqli_query($conn, "SELECT * FROM medicine where id='$q' ");
        $row1 = mysqli_fetch_assoc($result1);

// lookup all hints from array if $q is different from ""



?>

         <div class="input-group mb-3 mr-sm-2 " >
            <input type="number" class="form-control " placeholder="Qty" id="qty" name="qty">
            <div class="input-group-append">
              <span class="input-group-text"><?php echo $row['quantity'] ?></span>
            </div>
          </div>
        
        

