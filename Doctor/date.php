<?php 
include('auth.php');
include('connect.php');
$doctor_id=$_SESSION['doctor_id'];
$date=$_GET['id'];

$now=date("Y-m-d");
// $ts1 = $date;
// $ts2 = $now;

// $seconds_diff = $ts2 - $ts1;
// echo $seconds_diff.$date.$now;
$date1=strtotime($now);
$date2=strtotime($date);
$diff=$date1-$date2;
$day=($diff/86400);
$dayweek=date('l',$date2);
$res2="SELECT * FROM staff WHERE Staff_Id='$doctor_id'";
$result2=mysqli_query($conn,$res2);
$row2=mysqli_fetch_assoc($result2);
$dday=[];
$dday=explode(",", $row2['Day']);

if($day>=0){
	$alert1=0;
	if($day<0){
	foreach ($dday as $var) {

		if ($dayweek==$var) {
			$alert1=1;
			$res="SELECT * FROM patientarrive WHERE doctor_id='$doctor_id' AND date='$date'";
			$result=mysqli_query($conn,$res);
			while ($row=mysqli_fetch_assoc($result)) {
	$p_id=$row['p_id'];
	$res1="SELECT * FROM patient WHERE p_id='$p_id'";
	$result1=mysqli_query($conn,$res1);
	$row1=mysqli_fetch_assoc($result1);
	$name=$row1['p_name'];
	$age=$row1['p_age'];
	?>
		<!-- List-->
													<li class="clearfix">
														<div class="feed d-flex justify-content-between">
															<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="covers/<?php  echo $row1['p_photo']; ?>" alt="person" class="img-fluid rounded-circle"></a>
																<div class="content">
																	<strong>
																		<?php echo $name;?>

																	</strong>
																	<small>
																		Age:<?php echo $age;?> 
																	</small>
																	<div class="full-date"><small></small></div>

																</div>
															</div>
															<div class="date"></div>
														</div>
													</li>
													<!-- List-->
	
	<?php 
}
		}
		
	}
}
	foreach ($dday as $var) {

		if ($dayweek==$var) {
			$alert1=1;
			$res="SELECT * FROM patientarrive WHERE doctor_id='$doctor_id' AND date='$date'";
			$result=mysqli_query($conn,$res);
			while ($row=mysqli_fetch_assoc($result)) {
	$p_id=$row['p_id'];
	$res1="SELECT * FROM patient WHERE p_id='$p_id'";
	$result1=mysqli_query($conn,$res1);
	$row1=mysqli_fetch_assoc($result1);
	$name=$row1['p_name'];
	$age=$row1['p_age'];
	$res2="SELECT * FROM patientrecord WHERE p_id='$p_id' and    date='$date' and doctor_id='$doctor_id'";
													$result2=mysqli_query($conn,$res2);
													$row2=mysqli_fetch_assoc($result2);
													$precord=$row2['record'];
	?>
		<!-- List-->
													<li class="clearfix">
														<div class="feed d-flex justify-content-between">
															<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="covers/<?php  echo $row1['p_photo']; ?>" alt="person" class="img-fluid rounded-circle"></a>
																<div class="content">
																	<strong>
																		<?php echo $name;?>

																	</strong>
																	<small>
																		Age:<?php echo $age;?> 
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
		}
		
	}
	if($alert1==0){
		echo " <div class='alert alert-warning alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Warning!</strong> There is no schedule of you on this day.
  </div>";
	}

}
else{
	echo " <div class='alert alert-warning alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Warning!</strong> There is no future date.
  </div>";
}
