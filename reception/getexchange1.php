<?php 
include('C:\xampp\htdocs\Patient\connect.php'); 
$id=$_GET['id'];
 ?>
<input type="text" name="email" placeholder="<?php echo $id ?>" id="name">
	<br>
	<input type="password" name="password" placeholder="password">