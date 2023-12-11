
<?php
$num = $_REQUEST['num'];
include('C:\xampp\htdocs\pharmacy2\config.php');
        $result = mysqli_query($conn, "SELECT * FROM category WHERE cat_number = '$num'");
$row = mysqli_fetch_assoc($result);
?>

<form action="update/updateCategory.php" method="post">
        <div class="form-group">
<input type="hidden" name="id" value="<?php echo $row['cat_number']?>">
          <input type="text" class="form-control" id="category" value="<?php echo $row['name']?> " name="category">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>