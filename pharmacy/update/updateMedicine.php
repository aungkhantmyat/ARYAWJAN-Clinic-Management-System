<?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$company= $_POST['company'];
$composition = $_POST['composition'];
$supplier = $_POST['supplier'];
$note = $_POST['note'];
$cover = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
echo $id.",". $company.",".$name;
if($cover) {
move_uploaded_file($tmp, "covers/$cover");
}

$sql1 = "UPDATE medicine SET `name`='$name',`category`=''$category,`company`='$company',`composition`='$composition',`supplier`='$supplier',`note`='$note',`photo`='$cover' WHERE id='$id'";
if(mysqli_query($conn, $sql1)){
	echo "success";
}else{
	echo "fail";
}
header("location: ../medicine.php");
?>