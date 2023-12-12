<?php
include("config.php");
$result = mysqli_query($conn, "SELECT * FROM invoice");
?>
////////////////////////////start//////////////////////////////
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php 
  include('include\cssExtend.php');
   ?>
   <style type="text/css">
     /* Button Style 4 (Circle) */
.circle-btn{
    min-height: 100px;
    line-height: 100px;
    background:#e8e8e8;
}

.circle-btn button{
    margin:10px;
    border-radius: 50%;
    height:80px;
    width:80px;
    font-size: 15px;
}

   </style>
</head>
<body>
<?php 
include('include\nav1.php');
?>
 <ul id="side-main-menu" class="side-menu list-unstyled">                  
          
  <li><a href="newsell.php"> <i class="fa fa-shopping-cart"></i>New Sell</a></li>
  <li ><a href="speselldir.php"> <i class="fa fa-shopping-cart"></i>Specific Sell</a></li>
  <li ><a href="category.php"> <i class="fa fa-list-alt"></i>Category</a></li>
  <li><a href="supplier.php"> <i class="fa fa-industry"></i>Supplier</a></li>
  <li><a href="medicine.php"> <i class="  fa fa-medkit"></i>Medicine</a></li>
  <li class="active"><a href="invoicequery.php"> <i class="fa fa-money"></i>Invoice Query</a></li>
           
          </ul>
         <?php 
include('include\nav2.php');
?>
  <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forms       </li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
   <h1 class="h3 display">Invoice Query</h1>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card card updates daily-feeds" id="home" >
                 
                
                <div class="card-body">
             
                 
        <div class="row">

  <div class="col" style="margin: 10px 0;">
    <div class="form-inline" >
        <div class="form-group mr-sm-2" style="margin: 0 80px;">
  <label for="startDate" class="mr-sm-2">Date From:</label>
  <input type="date" class="form-control mb-2 mr-sm-2" id="date1" placeholder="Date From..">
</div>
<div class="form-group mr-sm-2"  style="margin: 0 20px;">
   <label for="endDate" class="mr-sm-2">Date To:</label>
          <input type="date" class="form-control mb-2 mr-sm-2" id="date2" placeholder="Date To..">
</div>
<div class="form-group mr-sm-2"  style="margin: 0 20px;">
   <button type="submit" class="btn btn-success btn-lg mb-2" onclick="getinvoice()">Search Records</button>
</div>

       
         
        </div> 
        
      </div>
    </div>
                </div>
              </div>
             <div class="card " id="form" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Invoice Records</h4>
                </div>
                <div class="card-body">
            
                  <div class="row">
        <div class="col">
          <div class="table-responsive">
           <table class="table table-bordered table-hover">
              <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>Parches Items</th>
                <th>Price</th>
                
                <th>Date</th>
               <th>Action</th>
              </tr>
            </thead>
            <tbody id="invoice_table">
              <?php 

               $count=1;
           while($row = mysqli_fetch_assoc($result)){?>

              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['invoice_id']; ?></td>
                <?php 
                $invoice_id=$row['invoice_id'];
                $result1 = mysqli_query($conn, "SELECT * FROM invoice_item where invoice_id='$invoice_id'");
                $m_name_ar=[];
                $i=0;
               while($row1 = mysqli_fetch_assoc($result1)){
                $medicineid=$row1['medicine_id'];
                $result2 = mysqli_query($conn, "SELECT * FROM medicine where id='$medicineid'");
                $row2 = mysqli_fetch_assoc($result2);
$m_name_ar[$i]=$row2['name'];
$i++;
               }
               $t=array_unique($m_name_ar);
               $mname= implode(",",$t);

                 ?>
                <td><?php echo $mname; ?></td>
                <td><?php echo $row['amount'].' KS'; ?></td>
                
                <td><?php echo  date_format(date_create(  $row['date']),"d.m.Y"); ?></td>
                <td>
                   <div class="text-center">
             <ul class="social-network social-circle">
                      
                        <li><a href="#" class="icoInfo" title="Information"  data-toggle="modal" data-target="#myModaltable" onclick="invoicemodal( '<?php echo $row['invoice_id'] ?>')"><i class="fa fa-info-circle"></i></a></li>
                      
                    </ul>
          </div>
                 
                
               
                </td>
                

           </tr>
           <?php 
           $count++;
         } ?>

         </tbody>
       </table>
     </div>
  <!-- Central Modal Medium Success -->
<div class="modal fade" id="myModaltable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Invoice Information</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body-invoice">
       
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->
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
     function getinvoice() {
   var d1=document.getElementById("date1").value;
   var d2=document.getElementById("date2").value;
   var info=d1+','+d2;
     if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("invoice_table").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET",'invoicetable.php?date='+info,true);
  xmlhttp.send();
     }
      function invoicemodal(str) {

     if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-invoice").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET",'invoicemodal.php?id='+str,true);
  xmlhttp.send();
     }
   </script>
       
  
</body>
</html>
