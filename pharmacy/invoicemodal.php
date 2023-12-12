
<?php
$id=$_GET['id'];

include('..\pharmacy2\config.php');
$result = mysqli_query($conn, "SELECT * FROM invoice where invoice_id='$id'");
$row = mysqli_fetch_assoc($result);
$result1 = mysqli_query($conn, "SELECT * FROM invoice_item where invoice_id='$id' ");
?>
<div class="row">
  <div class="col-12">
    <div class="text-center">
      <h5><?php echo 'Invoice:RS-'.$row['invoice_id']; ?></h5>
    
      <small><?php echo $row['date']; ?></small>
    </div>
  </div>
  <div class="col-12">
     <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th >Name</th>
        <th>Price</th>
         <th>qty</th>
          <th>Amount</th>

      </tr>
    </thead>
    <tbody>
      <?php 

      $TotalAmount=0;
while ($row1=mysqli_fetch_assoc($result1)) {
$mid=$row1['medicine_id'];
       $resa="SELECT * FROM medicine WHERE id='$mid' ";
$resulta=mysqli_query($conn,$resa);
$rowa=mysqli_fetch_assoc($resulta);
 $resb="SELECT * FROM stock WHERE id='$mid'";
$resultb=mysqli_query($conn,$resb);
$sellingprice='';
$count=1;
while ($rowb=mysqli_fetch_assoc($resultb)) {
  $sellingprice=$rowb['selling_price'];
  }
  $eqty= $row1['quantity'];
  $Amount=$eqty*$sellingprice;
  $TotalAmount+=$Amount;
       ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $rowa['name']; ?></td>
        <td><?php echo $sellingprice; ?></td>
        <td><?php echo $eqty; ?></td>
        <td><?php echo $Amount; ?></td>
       
      </tr>
     <?php
$count++;
      } 
     $taxamt=$TotalAmount*0.025;


     ?>
    </tbody>
  </table>
  </div>
  <div class="col-9"></div>
 <div class="col-lg-3">
  <p class="text-info"><strong class="text-success">Total items:</strong> <?php echo $count; ?> <br><strong class="text-success">Total Amount:</strong><?php echo $TotalAmount; ?> <br></p>
 </div>
</div>