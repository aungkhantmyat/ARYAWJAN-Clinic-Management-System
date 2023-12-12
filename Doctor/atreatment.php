<?php 
include('auth.php');
include('connect.php');
$day1='2019-08-01';
$doctor_id=$_SESSION['doctor_id'];
$res="SELECT * FROM patientarrive where date='$day1' and doctor_id='$doctor_id'";
$result=mysqli_query($conn,$res);
$date='2019-12-12';
?>



//////////////////////////////////////////end///////////////////////////////////////
//////////////////////////////////////////start//////////////////////////////////////

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


				<h1 class="h3 display">Treatment
					</h1>
			</header>
			<div class="row">
				<div class="col-lg-12">



					<div class="card card updates daily-feeds" id="form" >

						<div class="card-header d-flex align-items-center">
							<h4>Medical Treatment</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<form class="form-horizontal">
										<div class="form-group row">
											<label class="col-sm-2">Date:</label>
											<div class="col-sm-10">
												<input type="date" class="form-control mb-2 mr-sm-2" id="date" oninput="getdate(this.value)">
												<small class="form-text"></small>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-6"></div>
								<div class="col-lg-12">
									<div id="feeds-box" role="tabpanel" class="collapse show">
										<div class="feed-box">
											<ul class="feed-elements list-unstyled" id="date1">


												<?php 
												while ($row=mysqli_fetch_assoc($result)) {
													$p_id=$row['p_id'];
													$res1="SELECT * FROM patient WHERE p_id='$p_id'";
													$result1=mysqli_query($conn,$res1);
													$row1=mysqli_fetch_assoc($result1);
													$name=$row1['p_name'];
														$age=$row1['p_age'];
														$res2="SELECT * FROM patientrecord WHERE p_id='$p_id' and    date='$day1' and doctor_id='$doctor_id'";
													$result2=mysqli_query($conn,$res2);
													$row2=mysqli_fetch_assoc($result2);
													$precord=$row2['record'];
													
													?>
													<!-- List-->
													<li class="clearfix">
														<div class="feed d-flex justify-content-between">
															<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="covers/<?php echo $row1['p_photo']; ?>" alt="person" class="img-fluid rounded-circle"></a>
																<div class="content">
																	<strong>
																		<?php echo $name;?>

																	</strong>
																	<small>
																		Age:<?php echo $age.$precord; ?> 
																	</small>
																	<div class="full-date"><small></small></div>

																</div>
															</div>
															<div class="date">
																<?php if($precord==''){ ?>
																<a href="patienttreatment.php?id=<?php echo $row['p_id'].','.$date; ?>"  class="btn btn-xs btn-dark">Treatment</a>
																<?php }else{ ?>
																Finished
															<?php } ?>
															</div>
														</div>
													</li>
													<!-- List-->
													<?php 
												
											}
												?>













											</ul>
										</div>
									</div>
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

	function getdate(str) {
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById("date1").innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","date.php?id="+str,true);
  xmlhttp.send();
}
	</script>
</body>
</html>


//////////////////////////////////////////end///////////////////////////////////////

