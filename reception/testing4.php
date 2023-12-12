<?php 
include('C:\xampp\htdocs\Patient\connect.php'); 
$res="SELECT * FROM medicine ";
$result=mysqli_query($conn,$res);
$res1="SELECT * FROM invoice ";
$result1=mysqli_query($conn,$res1);
$var='';
while ($row1=mysqli_fetch_assoc($result1)) {
$var=$row1['invoice_id'];
}
$invoice_id=$var+1;
echo $invoice_id;
?>

 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="container">
 	<div class="row">
 		<div class="col-4">
 			<label >Medicine:</label>
<select name="medicine" id="medicine" class="custom-select">
	<?php while ($row=mysqli_fetch_assoc($result)) {?>
    <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
 <?php } ?>
</select>
 		</div>
 		
 		<div class="col-4">
 			<label >qty:</label>
 			<input type="number" name="qty" id="qty">
 		</div>
 		<div class="col-4"> <button class="btn btn-success" onclick="addrecordtable()">Add Record</button></div>
 		<div id="akm">
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
      <tr>
        <td>1</td>
        <td>Bio</td>
        <td>100</td>
        <td>12</td>
        <td>1200</td>
        <td><button class="btn btn-success btn-sm" >cancel</button></td>
      </tr>
      
    </tbody>
  </table>

 	</div>
 	
 	<div class="col-8"></div>
 	<div class="col-4">
 		<p>Total Amount::1200</p>
 	</div>
 </div>
 <div class="col-4"><button class="btn btn-success"  onclick="getexchange()" data-toggle="modal" data-target="#myModal">Get Exchange</button></div>
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
      <div class="modal-body" id="modal_body_getexchange">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
 <script type="text/javascript">
 	function addrecordtable() {
 		var medicine_id=document.getElementById('medicine').value;
 		var qty=document.getElementById('qty').value;
 		var info=medicine_id+','+qty+','+<?php echo $invoice_id; ?>;
 		


 			if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById("akm").innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","addrecord.php?id="+info,true);
  xmlhttp.send();
 	}
 	function getexchange() {
 	
 		var info='<?php echo $invoice_id; ?>';
 		alert(info);


 			if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById("modal_body_getexchange").innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","getexchange.php?id="+info,true);
  xmlhttp.send();
 	}
 
 </script>
 </body>
 </html>