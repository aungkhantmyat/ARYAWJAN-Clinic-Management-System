<?php
include("config.php");
$id=$_GET['var'];



 
?>
<h4>Would you like to cancel it?</h4>

                
                <a href="cancel.php?id=<?php echo $id ?>" class="btn btn-success">yes</a>



<!-- 
                <button type="button" class="btn btn-danger" >no</button> -->
                <a href="redirect.php" class="btn btn-danger">no </a>