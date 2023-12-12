<?php
$id = $_REQUEST['id'];

include('..\config.php');
         $result = mysqli_query($conn, "SELECT * FROM medicine WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$result1 = mysqli_query($conn, "SELECT * FROM stock WHERE id = '$id'");


?>
 <div class="container-fluid">
          <div class="row">
            <div class="col-sm-2"><img src="covers/<?php echo $row['photo'] ?>" class="float-left" width="80%" height="100px"></div>
            <div class="col-sm-5"> 

              Name  :<?php echo $row['name']?>
              <br>
              Category :<?php echo $row['category']?>
              <br>
              Composition:<?php echo $row['composition']?>
              <br>



            </div> 
            <div class="col-sm-5">
              Company:<?php echo $row['company']?>
              <br>
              Supplier:<?php echo $row['supplier']?>
              <br>
              Note:<?php echo $row['note']?>
              <br>
            </div>

          </div> 
          <div class="row">
            <div class="col" >
             <div class="table-responsive">
              <table class="table table-hover" style="margin-top: 50px;">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Batch No</th>
                    <th>Expired Date</th>
                    <th>Inward Date</th>
                    <th>Original Price</th>
                    <th>Selling Price</th>
                    <th>Qty</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php 
           $count=1;
           while($row2 = mysqli_fetch_assoc($result1)): ?>
             <td><?php echo $count ?></td>
            
             <td><?php echo $row2['batch_no']?></td>
             <td><?php echo $row2['expiry_date']?></td>
             <td><?php echo $row2['inward_date']?></td>
             <td><?php echo $row2['original_price']?></td>
             <td><?php echo $row2['selling_price']?></td>
              <td><?php echo $row2['quantity']?></td>
             
             
             
             
             
       </tr>
       <?php $count++;
     endwhile; ?>
                  </tr>

                </tbody>
              </table>
            </div> 

          </div>

        </div> 

      </div>


    </div> 
  </div>
