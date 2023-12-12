<?php
include('connect.php'); 
$id=$_GET['id'];
$tmp=[];
$tmp=explode(",", $id);
$res="SELECT * FROM patientrecord WHERE p_id='$tmp[0]' AND doctor_id='$tmp[1]' AND date='$tmp[2]'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);







?>

				<div class="card text-dark"  style="margin: 2px 0">
								<div class="card-body">

									<h4 class="card-title">BP & BWT</h4>
									<p class="card-text"><strong>BP   &nbsp: </strong><?php echo $row['b_pressure']; ?> <br>
										<strong>BWT: </strong> <?php echo $row['weight']; ?></p>
									</div>
								</div>

								<div class="card text-dark" style="margin: 2px 0">
									<div class="card-body">

										<h4 class="card-title">Treatment Record</h4>
										<p class="card-text"><?php echo $row['record']; ?></p>
									</div>
								</div>

								<div class="card text-dark"  style="margin: 2px 0">
									<div class="card-body">

										<h4 class="card-title">Drug Record</h4>
										<p class="card-text"><?php echo $row['drug_list']; ?></p>
									</div>
								</div>
 





