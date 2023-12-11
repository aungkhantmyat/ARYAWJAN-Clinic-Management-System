<?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$joindate = $_POST['joindate'];
$address = $_POST['address'];
$item = $_POST['item'];
$cover = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "covers/$cover");
}

$sql = "INSERT INTO supplier( `name`, `phone`, `address`, `email`, `item`, `joined_date`, `photo`) VALUES ('$name','$phone','$address','$email','$item','$joindate','$cover')";
mysqli_query($conn, $sql);
header("location: ../supplier.php");
?>