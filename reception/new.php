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
  <li class="active"><a href="newsell.php"> <i class="icon-form"></i>New Sell</a></li>
  <li ><a href="testing1.php"> <i class="icon-form"></i>Specific Sell</a></li>
  <li><a href="category.php"> <i class="fa fa-bar-chart"></i>Category</a></li>
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
      <li class="breadcrumb-item"><a href="testing1.php">Home</a></li>
      <li class="breadcrumb-item active">New Sell</li>
    </ul>
  </div>
</div>
<section class="forms">
  <div class="container-fluid">
    <!-- Page Header-->
    <header> 
      <h1 class="h3 display">Billing</h1>
    </header>
    <div class="row">
     <div class="col-lg-12">
      <div class="card">

        <div class="card-body">


          <!-- Sell Form-->

<?php
include("config.php");
$date=date("Y-m-d") ;
$date1="2019-12-12";
$result=mysqli_query($conn,"SELECT * from patientarrive where date='$date1'");


?>

<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


  <form class="form-inline" action="/action_page.php">

      <label for="doctor" class="mb-2 mr-sm-2">Doctor name:</label>
    <!-- <div> -->

  <select name="doctor" class="custom-select mb-2 mr-sm-4 " onchange="getPatientRecord(this.value)" id='doctorid'>
   <?php
    while($row = mysqli_fetch_assoc($result)): ?>
                <?php 
                $doctorid=$row['doctor_id'];
$result1=mysqli_query($conn,"SELECT * from staff where Staff_Id='$doctorid'");
$row1 = mysqli_fetch_assoc($result1);
                 ?>
                 <option value="<?php echo $row1['Staff_Id']  ?>"><?php   echo $row1['Name']  ; ?></option>
           <?php 

         endwhile; ?>


    </select>
 <!--  </div> -->

  <label for="patientname" class="mb-2 mr-sm-2">Patient:</label>
  <!-- <div class=""> -->
 <input type="text" class="form-control mb-2 mr-sm-2" list="js-fw" placeholder="Type Patient Name" id='patientname' ><br><br>
    <datalist id="js-fw">
      <?php
               $count=1;
               while($row = mysqli_fetch_assoc($result)): ?>
                <?php 
                $pid=$row['p_id'];
$result1=mysqli_query($conn,"SELECT * from patient where p_id='$pid'");
$row1 = mysqli_fetch_assoc($result1);
                 ?>
                 <option value="<?php echo $row1['p_name']  ?>">
           <?php $count++;

         endwhile; ?>

      
      
    </datalist>
     <!-- </div> -->
     <!-- <div class="mb-2"> -->
    <button type="button" class="btn btn-success mb-2" onclick="getTableRecord()">Add</button>
 
    <!-- </div> -->
  
  </form>
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
       <div id='akm'>
<table class="table table-hover table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Patient Name</th>
        <th>Doctor Name</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table > 
<div class="row">
    
    <div class="col-sm-8" >
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="getExchange()">
    Get Exchange
  </button>
  </div>
<div class="col-sm-4" >
  <p>total amount:</p>
  <p>tax:</p>
  
  <p>total amt:</p>
  </div>
  </div>

  </div>

  <!-- Button to Open the Modal -->
  
</div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="modal-body-exchange">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  

  <!-- <p><strong>Note:</strong> The data-toggle="dropdown" attribute is required regardless of whether you call the dropdown() method.</p> -->


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown();
});
</script>

</body>
<body>

<div class="container">
  
<!--   <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
 -->  
</div>
</html>
<script>
function getTableRecord() {
  var patientname=document.getElementById('patientname').value;
var doctorid=document.getElementById('doctorid').value;

var info=patientname+','+doctorid;
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


   xmlhttp.open("GET","billingrecord.php?var="+info+','+'<?php  echo $date1; ?>',true);
   xmlhttp.send();
 }


function getPatientRecord(str) {
  // var patientname=document.getElementById('patientname').value;

  if (window.XMLHttpRequest) {
     // code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
   } else {  // code for IE6, IE5
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function() {
     if (this.readyState==4 && this.status==200) {
       document.getElementById("js-fw").innerHTML=this.responseText;
     }
   }


   xmlhttp.open("GET","getpatientrecord.php?var="+str+','+'<?php  echo $date1; ?>',true);
   xmlhttp.send();
 }
 
   
function getExchange() {
  // var patientname=document.getElementById('patientname').value;
 var patientname=document.getElementById('patientname').value;
var doctorid=document.getElementById('doctorid').value;
var info=patientname+','+doctorid;

  if (window.XMLHttpRequest) {
     // code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
   } else {  // code for IE6, IE5
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function() {
     if (this.readyState==4 && this.status==200) {
       document.getElementById("modal-body-exchange").innerHTML=this.responseText;

     }
   }


   xmlhttp.open("GET","getexchange.php?var="+info+','+'<?php  echo $date1; ?>',true);
   xmlhttp.send();
 }
 

</script>
<!-- <?php 
// include('include\footer.php');
?> -->

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





