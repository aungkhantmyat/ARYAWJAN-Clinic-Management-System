<?php


// get the q parameter from URL
$q = $_REQUEST["q"];

include('C:\xampp\htdocs\pharmacy2\config.php');
        $result = mysqli_query($conn, "SELECT * FROM medicine where category='$q' ");

// lookup all hints from array if $q is different from ""



?>

          <select name="medicine" class="custom-select form-control mb-2 mr-sm-2 "
           onchange="showMedicineSell(this.value)">
            <option selected hidden>Custom Select Menu</option>
            <?php

     
      while($row = mysqli_fetch_assoc($result)):
        ?>
      <option value="<?php echo $row['id'] ?>">
        <?php echo $row['name'] ?>
      </option>
    <?php endwhile; ?>
    
