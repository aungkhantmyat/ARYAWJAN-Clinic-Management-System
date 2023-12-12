<?php 
include('..\Patient\connect.php'); 
$id=$_GET['id'];

$TotalAmount=0;

$res="SELECT * FROM invoice_item WHERE invoice_id='$id' ";
$result=mysqli_query($conn,$res);
while ($row=mysqli_fetch_assoc($result)) {
	 $mid=$row['medicine_id'];
	 $res2="SELECT * FROM stock WHERE id='$mid'";
$result2=mysqli_query($conn,$res2);
$sellingprice='';
while ($row2=mysqli_fetch_assoc($result2)) {
	$sellingprice=$row2['selling_price'];
	}
	$eqty= $row['quantity'];
	$Amount=$eqty*$sellingprice;
	$TotalAmount+=$Amount;
}



 ?>
 <form action="sellprint.php" method="post">
	
	
	   <div class="form-group">
        <label for="payment">Given Cash Amount:</label>
        <input type="number" class="form-control" name="getexchange" placeholder="Enter Exchange Amount">
      </div>
<input type="hidden" name="TotalAmount" value="<?php echo $TotalAmount ?>">
<input type="hidden" name="invoiceid" value="<?php echo $id ?>">

      <button type="submit" class="btn btn-success btn-lg">
        <ul class="nav">
          <li class="nav-item" style="margin-right: 1px">
            <i class='  fa fa-retweet' style='font-size:26px'></i>
          </li>
          <li class="nav-item">
            Get Exchange
          </li>
        </ul>
      </button>
</form>