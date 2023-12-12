<?php 
include('..\Patient\connect.php'); 
$invoice_id=$_POST['invoiceid'];
$TotalAmount = $_POST['TotalAmount'];
$getexchange =  $_POST['getexchange'];
$now=date("Y-m-d");
$sql = "INSERT INTO `invoice`(`invoice_id`, `date`, `amount`, `purchase`) VALUES ('$invoice_id','$now','$TotalAmount','$getexchange')";
mysqli_query($conn, $sql);
$res1="SELECT * FROM invoice where invoice_id='$invoice_id' ";
$result1=mysqli_query($conn,$res1);



 ?>
<!DOCTYPE html>
<html>
  <head>

   <?php 
  include('include\cssExtend.php');
   ?>
  </head>
  <body>
   <?php 
  include('include\nav1.php');
   ?>
    
         
 <ul id="side-main-menu" class="side-menu list-unstyled">                  
  <li><a href="testing1.php"> <i class="icon-home"></i>Home</a></li>
  <li><a href="newsell.php"> <i class="icon-form"></i>New Sell</a></li>
  <li class="active"><a href="speselldir.php"> <i class="icon-form"></i>Specific Sell</a></li>
  <li ><a href="category.php"> <i class="fa fa-bar-chart"></i>Category</a></li>
  <li><a href="supplier.php"> <i class="icon-grid"></i>Supplier</a></li>
  <li><a href="medicine.php"> <i class="icon-interface-windows"></i>Medicine</a></li>
  <li><a href="invoicequery.php"> <i class="icon-home"></i>Invoice Query</a></li>


</ul>
</div>
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">   Sell Print  </li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
           <header> 
            <h1 class="h3 display">Specific Sell </h1>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card card updates daily-feeds" id="home" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Invoice Details</h4>
                </div>
                <div class="card-body">
             <div class="row">
               <div class="col-lg-12">
                 <h5>Invoice</h5>
                 <table class="table table-borderless" style="width: 100%">
    <thead>
     
    </thead>
    <tbody>
      <tr>
        <td style="width:15% ">Invoice Id</td>
        <td style="width: 15%"><?php echo $invoice_id; ?></td>
        <td style="width:70% "></td>
        <td style="width:15% ">Total Amount</td>
        <td style="width:15% "><?php echo $TotalAmount; ?></td>
      </tr>
      <tr>
        <td style="width:15% ">Date</td>
        <td style="width:15% "><?php echo $now; ?></td>
        <td style="width:30% "></td>
        <td style="width:25% ">Purchase Amount</td>
        <td style="width:15% "><?php echo $getexchange; ?></td>
      </tr>
     
    </tbody>
  </table>
  <a href="newsell.php"  class="btn btn-success btn-lg"> Save & Back</a>
  <a href="invoice.php?q=<?php echo $invoice_id; ?>" class="btn btn-success btn-lg">Print</a>
   

               </div>
              
             </div>
                 
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
    $("#form").hide();

$("#home").show();
function switchOne() {


$("#home").show(500);
$("#form").hide();
}

function switchThree() {
$("#form").show(500);
$("#home").hide();

}

    </script>
  </body>
</html>

