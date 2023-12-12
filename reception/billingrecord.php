<?php 	
include("config.php");
$id=$_GET['var'];

$id1=[];
$id1=explode(",",$id);
$patientname=$id1[0];
$doctorid=$id1[1];

$date=$id1[2];

$result1=mysqli_query($conn,"SELECT * from Staff where Staff_Id='$doctorid'");
$row1 = mysqli_fetch_assoc($result1);

 ?>
  <table class="table table-hover table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Patient Name</th>
        <th>Doctor Name</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td><?php 	echo $patientname; ?></td>
        <td><?php 	echo $row1['Name'] ?></td>
        <td><?php 	echo $row1['Salary']; ?></td>
      </tr>
    </tbody>
  </table>
  <!-- <div class="row">  -->
  <!-- <div class="col-sm-8">
 </div> -->
   <?php 	$amt= intval($row1['Salary']);
   $taxamt= floor($amt*0.05) ;
   $totalamt= $amt+$taxamt;
   ?>
   <div class="row">
 
  <div class="col-sm-8" >
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="getExchange()">
    Get Exchange
  </button>
</div>
<div class="col-sm-4 ">
  <p>pre total amount:<?php 	echo $amt; ?> </p>
  <p>tax: <?php 	echo $taxamt; ?></p>
  <p>total amt: <?php 	echo $totalamt; ?></p>
</div>
</div>
<!-- s -->