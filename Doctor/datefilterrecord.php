<?php 
include('auth.php');
include('connect.php');
$doctor_id=$_SESSION['doctor_id'];
$d=$_GET['id'];
$info=[];
$info=explode(",",$d );
$date=$info[0];
$p_id=$info[1];if($date==1){
$res="SELECT * FROM patientrecord WHERE doctor_id='$doctor_id' AND p_id='$p_id'";
}else{
$res="SELECT * FROM patientrecord WHERE doctor_id='$doctor_id' AND p_id='$p_id' AND date='$date'";
}

$result=mysqli_query($conn,$res);
 ?>
 <?php while ($row=mysqli_fetch_assoc($result)) { 
								?>
									<!-- record list-->
                <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="fa fa-file-o"></i></div>
                        <div class="title"><strong><a href="#" class="text-success" data-toggle="modal" data-target="#myModal" onclick="getrecord( '<?php echo $id.','.$doctor_id.','.$row['date'] ?>')">Treatment</a></strong>
                          <p><?php echo $row['date']; ?></p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                      
                      </div>

                    </li  >                  <!-- Item-->
                   <!-- record list end-->
								
								<?php } ?>