<?php 	
include("config.php");
$id=$_GET['var'];

$id1=[];
$id1=explode(",",$id);
$patientname=$id1[0];
$doctorid=$id1[1];

$date=$id1[2];

 $result1=mysqli_query($conn,"SELECT * from patient where p_name='$patientname'");
 $row1 = mysqli_fetch_assoc($result1);

 ?>
 <form action="invoice.php" method="post">
 	
            <div class="form-group">
          <label for="weight">Exchange Amount:</label>
          <input type="text" class="form-control" name="purchase">
            </div>
             
          <input type="hidden" name="pid" value="<?php echo $row1['p_id'] ?>">
          <input type="hidden" name="did" value="<?php echo $doctorid ?>">
                    <input type="hidden" name="date" value="<?php echo $date ?>">

          <button type="submit" class="btn btn-success" >Submit</button>
          </form>
