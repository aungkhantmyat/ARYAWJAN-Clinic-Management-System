<?php
include('C:\xampp\htdocs\Patient\connect.php'); 
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

  <div class="col-12">
 			
 		<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Medicine Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Amount</th>
        <th>Action</th>
        
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
        <td><button class="btn btn-success btn-sm">cancel</button></td>
      </tr>
 <?php $count++;
} ?>
      
      
    </tbody>
  </table>

 	</div>
 	
 	<div class="col-8"></div>
 	<div class="col-4">
 		<p>Total Amount::<?php echo $TotalAmount; ?></p>
      <button onclick="getaa( <?php echo "44"; ?>    )"></button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal_body_aa">
       <div class="aaaa"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

 	</div>
<script type="text/javascript">
     function getaa(str) {
  
   alert(str);
    document.getElementById('aaaa').innerHTML = str;

      
  }
</script>

