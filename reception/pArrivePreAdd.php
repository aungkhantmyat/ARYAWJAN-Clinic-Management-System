
<?php
include("config.php");
$id=$_GET['var'];
$id1=[];
$id1=explode(",",$id);
$app_id=$id1[0];
$app_doctor=$id1[1];

?>
 <form action="ArriveAdd.php" method="post">
 	<h1><?php echo $app_doctor; ?></h1>
            <div class="form-group">
          <label for="weight">weight:</label>
          <input type="text" class="form-control" name="weight">
            </div>
              <div class="form-group">
          <label for="b_pressure">bloodpressure:</label>
          <input type="text" class="form-control" name="b_pressure">
          </div>
          <input type="hidden" name="app_id" value="<?php echo($app_id) ?>">
          <input type="hidden" name="app_doctor" value="<?php echo($app_doctor) ?>">
         
          <button type="submit" class="btn btn-primary" >Submit</button>
          </form>

