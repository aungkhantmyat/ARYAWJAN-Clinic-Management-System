<?php
include('C:\xampp\htdocs\pharmacy2\config.php"config.php');
$id = $_POST['id'];
$name = $_POST['category'];

$sql = "UPDATE category SET name='$name'
 WHERE cat_number = $id";
mysqli_query($conn, $sql);
header("location: category.php");
?>