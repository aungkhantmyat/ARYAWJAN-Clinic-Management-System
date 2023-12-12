<?php
include('..\Patient\connect.php'); 
$id=$_GET['id'];
$var=[];
$var=explode(',', $id);

$medicine_id=$var[0];
$qty=$var[1];
$invoice_id=$var[2];

$sql = "INSERT INTO `invoice_item`(`invoice_id`, `medicine_id`, `quantity`) VALUES ('$invoice_id','$medicine_id','$qty')";
mysqli_query($conn, $sql);


$res="SELECT * FROM invoice_item WHERE invoice_id='$invoice_id' ";
$result=mysqli_query($conn,$res);
$TotalAmount=0;
$ss=34;

?>
        <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
      <table class="table table-hover">
              <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>Name</th>

            <th>Price</th>
            <th>Qty</th>
            <th>Amount</th>
            <
          </tr>
        </thead>
         <tbody>
      <?php $count=1;
      while ($row=mysqli_fetch_assoc($result)) {?>
    <tr>
      <?php 
       $mid=$row['medicine_id'];
       $res1="SELECT * FROM medicine WHERE id='$mid' ";
$result1=mysqli_query($conn,$res1);
$row1=mysqli_fetch_assoc($result1);
 $res2="SELECT * FROM stock WHERE id='$mid'";
$result2=mysqli_query($conn,$res2);
$sellingprice='';
while ($row2=mysqli_fetch_assoc($result2)) {
  $sellingprice=$row2['selling_price'];
  }
  $eqty= $row['quantity'];
  $Amount=$eqty*$sellingprice;
  $TotalAmount+=$Amount;





       ?>
        <td><?php echo $count; ?></td>
        <td><?php echo $row1['name']; ?></td>
        <td><?php echo $sellingprice; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $Amount; ?></td>
       
      </tr>
 <?php $count++;
} ?>
      
      
    </tbody>
 </table>
</div>

</div>
<div class="col-lg-9">
  </div>
<div class="col-lg-3">
   <p class="text-info"><strong class="text-success">Total items:</strong> <?php echo $count; ?> <br><strong class="text-success">Total Amount:</strong> <?php echo $TotalAmount; ?> <br></p>
 </div>

</div>

  