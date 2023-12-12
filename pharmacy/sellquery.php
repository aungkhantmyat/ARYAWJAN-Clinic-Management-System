
/////////////////////////start//////////////////////////////////
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php 
  include('include\cssExtend.php');
   ?>
</head>
<body>
<?php 
include('include\nav1.php');
?>
 <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="testing.php">Home </a></li>
            <li ><a href="newsell.php">New Sell</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="medicine.php">Medicine </a></li>
            <li><a href="supplier.php">Supplier</a></li>
            <li class="active"><a href="sellquery.php">Sell Query </a></li>
            <li><a href="invoicequery.php">Invoice Query</a></li>
           
          </ul>
          <?php 
include('include\nav2.php');
?>

        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin: 10px 0">
      <div class="card-body">
         <div class="container">
          
             <ul class="breadcrumb">
  <li class="a"><a href="index.php">
     <ul class="nav">
              
             <li class="nav-item">
              
               <i class="fas fa-fw fa-tachometer-alt"></i>
           
           </li>
           <li class="nav-item">
            Dashboard
         </li>
       </ul>
  </a></li>
  
  <li class="a">Sell Query</li>
</ul> 

          
        </div>
         <div class="row">
  <div class="col" style="margin: 10px 0;">
    <form class="form-inline" action="/action_page.php">
        <div class="form-group mr-sm-2" style="margin: 0 80px;">
  <label for="startDate" class="mr-sm-2">Date From:</label>
  <input type="date" class="form-control mb-2 mr-sm-2" id="startDate" placeholder="Date From..">
</div>
<div class="form-group mr-sm-2"  style="margin: 0 20px;">
   <label for="endDate" class="mr-sm-2">Date To:</label>
          <input type="date" class="form-control mb-2 mr-sm-2" id="endDate" placeholder="Date To..">
</div>
<div class="form-group mr-sm-2"  style="margin: 0 20px;">
   <button type="submit" class="btn btn-success btn-lg mb-2">Search Records</button>
</div>

       
         
        </form> 
  </div>
  
</div>

        
      </div>
    </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin: 10px 0">
      <div class="card-body">

       <div class="row">
        <div class="col">
          <div class="table-responsive">
           <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>Parches Items</th>
                <th>Price</th>
                <th>Date</th>
               <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>RS-1810</td>
                <td>biogesic,cetirizine</td>
                <td>2400KS</td>
                <td>16.6.2019</td>
                <td><button type="button" class="btn" data-toggle="modal" data-target="#myModalInfo">
            <i class="fa fa-info-circle" style="font-size:24px"></i>
          </button></td>
                

           </tr>

         </tbody>
       </table>
     </div>

   </div>

 </div>
 <div class="row">
 <div class="col-sm-10">
   
 </div>
  <div class="col-sm-2">
   <p class="text-info" style="font-size: 16px"><strong class="text-success">Total Amount:</strong> 2400 <br><br>
   <strong class="text-success"> Total Profit:</strong> 480 </p>
 </div>

</div>
<div class="row">
  <div class="col">
  
</div>

</div>

</div>
</div>
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
  <div class="modal-body">
    <form action="">
  <div class="form-group">
    <label for="payment">Given Cash Amount:</label>
    <input type="number" class="form-control" id="payment" name="payment">
  </div>
  
  <button type="submit" class="btn btn-primary btn-lg">
    <ul class="nav">
          <li class="nav-item" style="margin-right: 1px">
          <i class='fas fa-sync' style='font-size:26px'></i>
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


          
         </div>
      </section>
<?php 
include('include\footer.php');
include('include\jsExtend.php');
?>
  
</body>
</html>
////////////////////////end///////////////////////////////////
