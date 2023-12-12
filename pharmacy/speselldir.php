<?php
include("config.php");
$day=date("Y-m-d");
$day1='2019-08-01';
$result = mysqli_query($conn, "SELECT * FROM patientarrive where date='$day1'");
$result4 = mysqli_query($conn, "SELECT * FROM patientarrive where date='$day1'");
$tmp_ar=[];
 while($row = mysqli_fetch_assoc($result)){
   $did=$row['doctor_id'];
  array_push($tmp_ar,$did);
 }
$docotr_ar=[];
$docotr_ar=array_unique($tmp_ar);
?>


/////////////////////start///////////////////////////

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
       <li class="breadcrumb-item"><a href="testing1.php">Home</a></li>
      <li class="breadcrumb-item active">Specific Sell</li>
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
            <h4>Search Patient</h4>
          </div>
          <div class="card-body">
             <div class="row">

  <div class="col" style="margin: 10px 0;">
    <form action="spesell.php" method="post" class="form-inline" >
        <div class="form-group mr-sm-2" style="margin: 0 80px;">
  <label for="startDate" class="mr-sm-2">Doctor:</label>
   <select id="inlineFormInput" name="doctor" class="custom-select form-control mb-2 mr-sm-2 "
              onchange="getPatientInfo(this.value+'<?php echo ','.$day ?>')">
             <option selected hidden>Choose Doctor</option>
             <?php
            foreach ($docotr_ar as $var) {
              
            
              $did1=$var;
              $resulta = mysqli_query($conn, "SELECT * FROM staff where Staff_Id='$did1'");
              $rowa = mysqli_fetch_assoc($resulta);
              ?>
              <option value="<?php echo $did1 ?>">
                <?php echo $rowa['Name'] ?>
              </option>
            <?php } ?>

          </select>
</div>
<div class="form-group mr-sm-2"  style="margin: 0 20px;">
   <label for="endDate" class="mr-sm-2">Patient:</label>
         <label for="inlineFormInputGroup" class="sr-only">Username</label>
                      <input id="inlineFormInputGroup" type="text"  list="js-fw" placeholder="Type Patient Name" id='patientname' name='patient' class="mr-3 form-control form-control">

    <datalist id="js-fw">
      <?php while($row11 = mysqli_fetch_assoc($result4)){ 
        $pid=$row11['p_id'];
 $resultc = mysqli_query($conn, "SELECT * FROM patient where p_id='$pid'");
  $rowb = mysqli_fetch_assoc($resultc);
        ?>
         <option value="<?php echo $rowb['p_name']  ?>">
      <?php } ?>
      
      
 </datalist>
 <input type="hidden" name="pid" value="">
</div>
<div class="form-group mr-sm-2"  style="margin: 0 20px;">
     <input type="submit" value="Submit" class="mr-3 btn btn-success">
</div>

       
         
        </form> 
        
      </div>
    </div>
                </div>
    <!-- <div class="col-lg-8">
             
   
                  <form  action="spesell.php" method="post" class="form-inline">
                      <div class="form-group" style="margin: 0 2px">
             <select id="inlineFormInput" name="doctor" class="custom-select form-control mb-2 mr-sm-2 "
              onchange="getPatientInfo(this.value+'<?php echo ','.$day ?>')">
             <option selected hidden>Choose Doctor</option>
             <?php
            foreach ($docotr_ar as $var) {
              
            
              $did1=$var;
              $resulta = mysqli_query($conn, "SELECT * FROM staff where Staff_Id='$did1'");
              $rowa = mysqli_fetch_assoc($resulta);
              ?>
              <option value="<?php echo $did1 ?>">
                <?php echo $rowa['Name'] ?>
              </option>
            <?php } ?>

          </select>
        </div>
                    <div class="form-group" id="akm">
                      
                      <label for="inlineFormInputGroup" class="sr-only">Username</label>
                      <input id="inlineFormInputGroup" type="text"  list="js-fw" placeholder="Type Patient Name" id='patientname' name='patient' class="mr-3 form-control form-control">

    <datalist id="js-fw">
      <?php while($row11 = mysqli_fetch_assoc($result4)){ 
        $pid=$row11['p_id'];
 $resultc = mysqli_query($conn, "SELECT * FROM patient where p_id='$pid'");
  $rowb = mysqli_fetch_assoc($resultc);
        ?>
         <option value="<?php echo $rowb['p_name']  ?>">
      <?php } ?>
      
      
 </datalist>
 <input type="hidden" name="pid" value="">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Submit" class="mr-3 btn btn-primary">
                    </div>
                  </form>
                
              
            </div> -->

           
   

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
  
</script>
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
<script type="text/javascript">
  function getPatientInfo(str){

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
  xmlhttp.open("GET",'sellpatientlist.php?num='+str,true);
  xmlhttp.send();
  }
</script>
</body>
</html>


/////////////////////end/////////////////////////////