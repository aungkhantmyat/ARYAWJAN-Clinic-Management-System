<?php 
include('auth.php');
include('connect.php');
$var=$_GET['id'];
$data=[];
$data=explode(",", $var);
$res="SELECT * FROM patientrecord WHERE p_id='$data[0]' AND doctor_id='$data[1]'";
$result=mysqli_query($conn,$res);
$res1="SELECT * FROM patientrecord WHERE p_id='$data[0]' AND doctor_id='$data[1]'";
$result1=mysqli_query($conn,$res1);
$count=1;
$count1=1;
?>
<nav class="tabbable">
	<ul class="nav nav-pills">
	<?php 
	while ($row=mysqli_fetch_assoc($result)) {
		
	 ?>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="<?php echo "#p".$count; ?>"><?php echo date_format(date_create($row['date']),"d.m.Y") ?></a>
  </li>
  <?php 
$count=$count+1;}
   ?>
</ul>
</nav>

<!-- Tab panes -->

<div class="tab-content">
	<?php 
		while ($row1=mysqli_fetch_assoc($result1)){
			if($count1==1){
	 ?>
  <div class="tab-pane container active" id="<?php echo "p".$count1; ?>">
  	<div class="card text-dark"  style="margin: 2px 0">
								<div class="card-body">

									<h4 class="card-title">BP & BWT</h4>
									<p class="card-text"><strong>BP   &nbsp: </strong><?php echo $row1['b_pressure']; ?> <br>
										<strong>BWT: </strong> <?php echo $row1['weight']; ?></p>
									</div>
								</div>

								<div class="card text-dark" style="margin: 2px 0">
									<div class="card-body">

										<h4 class="card-title">Treatment Record</h4>
										<p class="card-text"><?php echo $row1['record']; ?></p>
									</div>
								</div>

								<div class="card text-dark"  style="margin: 2px 0">
									<div class="card-body">

										<h4 class="card-title">Drug Record</h4>
										<p class="card-text"><?php echo $row1['drug_list']; ?></p>
									</div>
								</div>
  </div>
 <?php }
 else{ ?>
  <div class="tab-pane container fade" id="<?php echo "p".$count1; ?>"><div class="card text-dark"  style="margin: 2px 0">
								<div class="card-body">

									<h4 class="card-title">BP & BWT</h4>
									<p class="card-text"><strong>BP   &nbsp: </strong><?php echo $row1['b_pressure']; ?> <br>
										<strong>BWT: </strong> <?php echo $row1['weight']; ?></p>
									</div>
								</div>

								<div class="card text-dark" style="margin: 2px 0">
									<div class="card-body">

										<h4 class="card-title">Treatment Record</h4>
										<p class="card-text"><?php echo $row1['record']; ?></p>
									</div>
								</div>

								<div class="card text-dark"  style="margin: 2px 0">
									<div class="card-body">

										<h4 class="card-title">Drug Record</h4>
										<p class="card-text"><?php echo $row1['drug_list']; ?></p>
									</div>
								</div></div>
 <?php 
}
$count1=$count1+1;
}
  ?>
</div>