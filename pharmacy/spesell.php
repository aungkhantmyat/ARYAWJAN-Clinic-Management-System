
<?php   include("config.php");  
$result = mysqli_query($conn, "SELECT * FROM category");
$res1="SELECT * FROM invoice ";
$result1=mysqli_query($conn,$res1);
$var='';
while ($row1=mysqli_fetch_assoc($result1)) {
$var=$row1['invoice_id'];
}
$invoice_id=$var+1;
?> 
///////////////////////start//////////////////////////////////

<!DOCTYPE html>
<html>
<head>

 <?php 
 include('include\cssExtend.php');
 ?>
 <script src="pharmacy.js"></script>
</head>
<body>
 <?php 
 include('include\nav1.php');
 ?>

 <ul id="side-main-menu" class="side-menu list-unstyled">                  
   <li><a href="testing1.php"> <i class="icon-home"></i>Home</a></li>
  <li><a href="newsell.php"> <i class="fa fa-shopping-cart"></i>New Sell</a></li>
  <li class="active"><a href="speselldir.php"> <i class="fa fa-shopping-cart"></i>Specific Sell</a></li>
  <li ><a href="category.php"> <i class="fa fa-list-alt"></i>Category</a></li>
  <li><a href="supplier.php"> <i class="fa fa-industry"></i>Supplier</a></li>
  <li><a href="medicine.php"> <i class="  fa fa-medkit"></i>Medicine</a></li>
  <li><a href="invoicequery.php"> <i class="fa fa-money"></i>Invoice Query</a></li>


</ul>
</div>
<?php 
include('include\nav2.php');
?>

<!-- Breadcrumb-->
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="testing1.php">Home</a></li>
      <li class="breadcrumb-item active">New Sell</li>
    </ul>
  </div>
</div>
<section class="forms">
  <div class="container-fluid">
    <!-- Page Header-->
    <header> 
      <h1 class="h3 display">New Sell</h1>
    </header>
    <div class="row">
         <div class="col-lg-4">
      <div class="card">
<div class="card-header d-flex align-items-center">
      <h4>Patient's  Drug Record</h4>
    </div>
        <div class="card-body">

<?php

$doctor = $_POST['doctor'];

$patient = $_POST['patient'];
$resultc = mysqli_query($conn, "SELECT * FROM patient where p_name='$patient'");
  $rowd = mysqli_fetch_assoc($resultc);
  $pid=$rowd['p_id'];
  $resulte = mysqli_query($conn, "SELECT * FROM patientrecord where p_id='$pid'");
  $rowf = mysqli_fetch_assoc($resulte);
  $record=$rowf['drug_list'];

 ?>
        <p><?php echo $record; ?></p>  

    </div>
  </div>
</div>
     <div class="col-lg-8">
      <div class="card">

        <div class="card-body">


          <!-- Sell Form-->

          <div >
            <div class="form-group" style="margin: 0 2px">
             <select  name="category" class="custom-select form-control mb-2 mr-sm-2 "
             onchange="showUserSell(this.value)">
             <option selected hidden>Choose Category</option>
             <?php
             while($row = mysqli_fetch_assoc($result)):
              ?>
              <option value="<?php echo $row['name'] ?>">
                <?php echo $row['name'] ?>
              </option>
            <?php endwhile; ?>

          </select>
        </div>
        <div class="form-group" id="txtHint" style="margin: 0 2px">

          <select name="medicine" id="medicine" class="custom-select">
            <option value="">Choose Medicine</option>

          </select>
        </div>
        <div class="form-group" style="margin: 4px 0" id="txtHint1">
          <div class="input-group mb-3 mr-sm-2 " id="inlineFormInput">
            <input type="number"  class="form-control " placeholder="Enter Qty" id="qty" name="qty">
            <div class="input-group-append">
              <span class="input-group-text">10</span>
            </div>
          </div>
        </div>
        <div class="form-group" style="margin: 0 2px">
          <button  class="btn btn-success " onclick="addrecordtable()">Add Item</button>
        </div>
      </div>
      <!-- Sell Form end-->

    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Selling Records</h4>
    </div>
    <div class="card-body">

     
       <!-- Sell Record table-->
       <div id="akm">
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
         
          </tr>
        </thead>
        <tbody id="invoiceshow">


         <tr>
         

     </tr>

   </tbody>
 </table>
  <div class="text-center">
    <p>There is no record.</p>
 </div>
</div>

</div>
<div class="col-lg-9">
  </div>
<div class="col-lg-3">
   <p class="text-info"><strong class="text-success">Total items:</strong> 0 <br><strong class="text-success">Total Amount:</strong> 0 <br></p>
 </div>

</div>
       </div>
       
<div class="row">
  <div class="col-lg-3">
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"  onclick="getexchange()" >
     <ul class="nav">
      <li class="nav-item" style="margin-right: 1px">
       <i class='fa fa-money' style='font-size:36px'></i>
     </li>
     <li class="nav-item">
      Check Now
    </li>
  </ul>
</button>
  </div>
</div>

        <!-- Sell Record table end-->
         <!-- Exchage modal box-->
         <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">
         <ul class="nav">
          <li class="nav-item" style="margin-right: 1px">
           <i class='far fa-money-bill-alt' style='font-size:36px'></i>
         </li>
         <li class="nav-item">
          Payments
        </li>
      </ul>
    </h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <!-- Modal body -->
  <div class="modal-body" id="modal_body_getexchange">
    <form action="">
      <div class="form-group">
        <label for="payment">Given Cash Amount:</label>
        <input type="number" class="form-control" id="payment" name="payment">
      </div>

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
  </div>

  <!-- Modal footer -->
  

</div>
</div>
</div>

          <!-- Exchage modal box end-->

    </div>
  </div>
</div>

</div>
</div>
</section>
<?php 
include('include\footer.php');
?>
<!-- JavaScript files-->
<?php 
include('include\jsExtend.php');
?>
<script type="text/javascript">
      function showUserSell(str) { 
      
    if (str == "") {
      
              document.getElementById("txtHint").innerHTML = "Z";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","info/getMedicine.php?q="+str,true);
        xmlhttp.send();
    }
}
 function showMedicineSell(str) { 

    if (str == "") {
      
              document.getElementById("txtHint").innerHTML = "Z";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","info/getQty.php?qty="+str,true);
        xmlhttp.send();
    }
}
  function addrecordtable() {

    var medicine_id=document.getElementById('medicine').value;
    var qty=document.getElementById('qty').value;
    var info=medicine_id+','+qty+','+<?php echo $invoice_id; ?>;
    alert(info);


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



//////////////////////end/////////////////////////////////////