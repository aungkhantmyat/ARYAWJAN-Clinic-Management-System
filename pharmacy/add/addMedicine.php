 <?php
include('C:\xampp\htdocs\pharmacy2\config.php');
$name = $_POST['name'];
$category = $_POST['category'];
$company = $_POST['company'];
$composition = $_POST['composition'];
$supplier = $_POST['supplier'];
$note = $_POST['note'];
$cover = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
if($cover) {
move_uploaded_file($tmp, "covers/$cover");
}

$sql = "INSERT INTO medicine(`name`, `category`, `company`, `composition`, `supplier`, `note`, `photo`) VALUES ('$name','$category','$company','$composition','$supplier','$note','$cover')";
mysqli_query($conn, $sql);
header("location: ../medicine.php");
?>