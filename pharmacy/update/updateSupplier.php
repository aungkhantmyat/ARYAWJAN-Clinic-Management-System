<?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$address = $_POST['address'];
$item = $_POST['item'];
$joindate = $_POST['joindate'];
$cover = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "covers/$cover");
}



$sql = "UPDATE supplier SET `name`='$name',`phone`='$phone',`address`='$address',`email`='$email',`item`='$item',`joined_date`='$joindate',`photo`='$cover' WHERE sup_id='$id'";
mysqli_query($conn, $sql);
header("location: ../supplier.php");
?>