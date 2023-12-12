	<?php 
	include('auth.php');
	include('connect.php');
	$day1='2019-08-01';
	$doctor_id=$_SESSION['doctor_id'];
	$s=$_GET['id'];
$tmp=[];
$tmp=explode(',', $s);

$id=$tmp[0];
$date=$tmp[1];
	$res="SELECT * FROM patientrecord WHERE doctor_id='$doctor_id' AND p_id='$id' ORDER BY  date DESC";
	$result=mysqli_query($conn,$res);
	$res1="SELECT * FROM patientrecord WHERE doctor_id='$doctor_id' AND p_id='$id' ORDER BY date DESC";
	$result1=mysqli_query($conn,$res1);
	?>



/////////////////////////start//////////////////////////////

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
 .tabbable .nav-pills {
   overflow-x: auto;
   overflow-y:hidden;
   flex-wrap: nowrap;
}
	/*.card {
				background-color: #ffffff;
				border: 1px solid rgba(0, 34, 51, 0.1);
				box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
				border-radius: 0.15rem;
			}

		

			.tab-card {
				border:1px solid #eee;
			}

			.tab-card-header {
				background:none;
			}
		
			.tab-card-header > .nav-tabs {
				border: none;
				margin: 0px;
			}
			.tab-card-header > .nav-tabs > li {
				margin-right: 2px;
			}
			.tab-card-header > .nav-tabs > li > a {
				border: 0;
				border-bottom:2px solid transparent;
				margin-right: 0;
				color: #737373;
				padding: 2px 15px;
			}

			.tab-card-header > .nav-tabs > li > a.show {
				border-bottom:2px solid #007bff;
				color: #007bff;
			}
			.tab-card-header > .nav-tabs > li > a:hover {
				color: #33b35a;
			}

			.tab-card-header > .tab-content {
				padding-bottom: 0;
			}
*/
</style>
 <?php 
 include('include\cssExtend.php');
 ?>
 <link rel="stylesheet" type="text/css" href="doctorcard.css">
</head>
<body>
 <?php 
 include('include\nav1.php');
 ?>

 <ul id="side-main-menu" class="side-menu list-unstyled">                  
 
  <li class="active"><a href="atreatment.php"> <i class="fa fa-stethoscope"></i>Treatment</a></li>
  
</ul>
</div>
<div class="admin-menu">
 
  <?php 
  include('include\nav2.php');
  ?>

  <!-- Breadcrumb-->
  <div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-success" href="atreatment.php">Home</a></li>
        <li class="breadcrumb-item active">Treatment</li>
      </ul>
    </div>
  </div>
  <section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 


       <h1 class="h3 display">Patient Treatment</h1>
     </header>
     <div class="row">
      <div class="col-lg-12">



       <div class="card updates recent-updated" id="form" >

        <div class="card-header d-flex align-items-center">
        	<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="#"  onclick="switchOne()"><h4>Treatment Record</h4></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"  onclick="switchTwo()"><h4>Other Doctor's Books</h4></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"  onclick="switchThree()"><h4>Patient Files</h4></a>
  </li>
</ul>

          
        </div>
        <div class="card-body">
         <div  id="treatment"  >
										<div class="row">
											<div class="col-12">
												
												<div class="form-inline" action="/action_page.php">
  <label class="mr-sm-2">Date:</label>
  <select name="date" class="custom-select mb-2 mr-sm-2" onchange="getdaterecord(this.value)">
													<option value="<?php echo 1?>" selected>Select Date</option>
													<?php 
													while ($row1=mysqli_fetch_assoc($result1)) {
														if($row1['date']!=$day1){
													 ?>
														<option value="<?php echo $row1['date'] ?>"><?php echo
														date_format(date_create( $row1['date']),"d.m.Y")
														 ?></option>
														<?php
													}
													} ?>
												</select>
  
 <button class="btn btn-success mb-2" data-toggle="modal" data-target="#addrecord"  onclick="addrecord('<?php echo $id.','.$doctor_id?>')">Add Record</button>
</div>
												
											</div>
											
										</div>
										<div class="row">
											<div class="col">
												
												 <ul class="news list-unstyled" id="datefilter"> 
													<?php $alertCount=0;
													while ($row=mysqli_fetch_assoc($result)) { 
														if($row['date']!=$day1){

														?>
														<!-- record list-->
                <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="fa fa-file-o"></i></div>
                        <div class="title"><strong><a href="#" class="text-success" data-toggle="modal" data-target="#myModal" onclick="getrecord( '<?php echo $id.','.$doctor_id.','.$row['date'] ?>')">Treatment</a></strong>
                          <p><?php echo
                          date_format(date_create(  $row['date']),"d.m.Y")
                          ; ?></p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                      
                      </div>

                    </li  >                  <!-- Item-->
                   <!-- record list end-->
														
														<?php 
														}
														 $alertCount++;
													} ?>
													<?php if($alertCount==0){ ?>
														<div class="alert alert-warning alert-dismissible fade show">
														<button type="button" class="close" data-dismiss="alert">&times;</button>
														<strong>Warning!</strong> There is no record for this condition.
														</div>
													<?php } ?>
												</ul>
												<!-- Central Modal Medium Success -->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Detailed Treatment</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body">
        
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->

												

												
													<!-- Central Modal Medium Success -->
<div class="modal fade " id="addrecord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Add New Medical Record</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body-addrecord">
        
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
									<!-- Other Docotors books -->
										<div  id="book" >
										<div class="row">


											<?php 
											$resa="SELECT * FROM d_follower WHERE doctor_id='$doctor_id' AND p_id='$id'";
											$resulta=mysqli_query($conn,$resa);
											$rowa=mysqli_fetch_assoc($resulta);
											$var1=$rowa['df_id'];
											$d_array=[];
											$d_array=explode(",", $var1);
											$alertCount1=0;
											for ($i=0; $i <count($d_array)-1 ; $i++) { 
												$resb="SELECT * FROM staff WHERE Staff_Id='$d_array[$i]'";
												$resultb=mysqli_query($conn,$resb);
												$rowb=mysqli_fetch_assoc($resultb);
												$department=$rowb['Department'];
												
												$resc="SELECT * FROM `department` WHERE dep_id='$department'";
												$resultc=mysqli_query($conn,$resc);
												$rowc=mysqli_fetch_assoc($resultc);
												if($alertCount1%2==0){
													$background='bg3.jpg';
												}else{
													$background='bg2.jpg';
												}

												?>
												<div class="col-md-4">
    		    <div class="card profile-card-1">
    		        <img src="covers/<?php echo $background ?>" alt="profile-sample1" class="background"/>
    		        <img src="covers/<?php echo $rowb['Photo'] ?>" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2><?php echo $rowb['Name']; ?><small><?php echo $rowc['dep_name'].' '.$rowb['Rank']; ?></small></h3>
                    <div class="icon-block"><a href="#"  class="text-dark" data-toggle="modal" data-target="#viewdoctorrecord" onclick="getodrecord( '<?php echo $id.','.$rowb['Staff_Id']?>')">View Records</a></div>
                    </div>
                </div>
                
    		</div>
												
												<?php 
												$alertCount1++;
											 }
											?>
											

										</div>
										<?php if($alertCount1==0){ ?>
														<div class="alert alert-warning alert-dismissible fade show">
														<button type="button" class="close" data-dismiss="alert">&times;</button>
														<strong>Warning!</strong> There is no record for this condition.
														</div>
													<?php } ?>
											 
										
																				<!-- Central Modal Medium Success -->
<div class="modal fade "  id="viewdoctorrecord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">View Medical Records</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body-viewrecord">
        
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->          
									</div>
									<!-- Other Docotors books ends -->
									<!-- Patient files -->
											<div  id="file" >
										<div class="table-responsive">
											<table id="fileakm" 
											class="table table-hover table-bordered" >
												<thead class="thead-dark">
													<tr>
														<th>#</th>
														<th>File Name</th>
														<th>File Type</th>
														<th>File Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php 
														$resb="SELECT * FROM patientfile WHERE p_id='$id' AND doctor_id='$doctor_id'";
														$resultb=mysqli_query($conn,$resb);
														$count=1;
														$alertCount2=0;
														while ($rowb=mysqli_fetch_assoc($resultb)){

															$filearray=[];
															$filearray=explode(".", $rowb['file_name']);

															?>
															<td><?php echo $count; ?></td>
															<td><a href="<?php echo "covers/".$rowb['file_name']; ?>" target="_blank" type="application/pdf"><?php echo $filearray[0]; ?></a></td>
															<td><?php echo $filearray[1]; ?></td>
															<td><?php echo $rowb['file_note']; ?></td>
														</tr>
														<?php 
														$count=$count+1;
														$alertCount2++;} ?>
														
														
													</tr>
												</tbody>
											</table>
											</div> 
											<?php if($alertCount2==0){ ?>
														<div class="alert alert-warning alert-dismissible fade show">
														<button type="button" class="close" data-dismiss="alert">&times;</button>
														<strong>Warning!</strong> There is no record for this condition.
														</div>
													<?php } ?>

										              
									</div>
									<!-- Patient files ends -->

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
    $("#file").hide();
$("#book").hide();
$("#treatment").show();
function switchOne() {

$("#book").hide();
$("#treatment").show(500);
$("#file").hide();
}
function switchTwo() {
$("#book").show(500);
$("#treatment").hide();
$("#file").hide();
}
function switchThree() {
$("#file").show(500);
$("#treatment").hide();
$("#book").hide();
}

    </script>
<script type="text/javascript">
		function getrecord(str) {

			if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	  	if (this.readyState==4 && this.status==200) {
	  		document.getElementById("modal-body").innerHTML=this.responseText;
	  	}
	  }
	  xmlhttp.open("GET","patientrecorddetails.php?id="+str,true);
	  xmlhttp.send();
	}

	function addrecord(str) {

		if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	  	if (this.readyState==4 && this.status==200) {
	  		document.getElementById("modal-body-addrecord").innerHTML=this.responseText;
	  	}
	  }
	  xmlhttp.open("GET","add/addmedicalrecord.php?id="+str,true);
	  xmlhttp.send();
	}

	function getodrecord(str) {


		if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	  	if (this.readyState==4 && this.status==200) {
	  		document.getElementById("modal-body-viewrecord").innerHTML=this.responseText;
	  	}
	  }
	  xmlhttp.open("GET","odmedicalrecord.php?id="+str,true);
	  xmlhttp.send();
	}
	function getdaterecord(str) {
			
			if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById("datefilter").innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","datefilterrecord.php?id="+str+","+<?php echo $id; ?>,true);
  xmlhttp.send();

		}
	
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#fileakm').DataTable();
	});
</script>
</body>
</html>


/////////////////////////end///////////////////////////////