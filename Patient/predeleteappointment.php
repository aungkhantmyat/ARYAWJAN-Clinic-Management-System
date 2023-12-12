<?php
include('C:\xampp\htdocs\Patient\connect.php'); 
$id=$_GET['id'];

echo $id;

?>
<!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirm Messenge 11</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Are you sure to cancel the appointment?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<a href="deleteappointment.php?id=<?php echo $id; ?>  "> <button type="button" class="btn btn-primary" >Confirm</button></a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>