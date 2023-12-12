<?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$category = $_POST['category'];
$sql = "INSERT INTO category (name) VALUES ('$category')";
mysqli_query($conn, $sql);
header('location:'. '../category.php');
?>