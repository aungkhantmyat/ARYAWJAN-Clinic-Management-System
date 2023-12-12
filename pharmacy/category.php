<?php
include("config.php");
$result = mysqli_query($conn, "SELECT * FROM category");
?>


/////////////////////start///////////////////////////

<!DOCTYPE html>
<html>
<head>

 <?php 
 include('include\cssExtend.php');
 ?>
</head>
<body>
 <?php 
 include('include\nav1.php');
 ?>

 <ul id="side-main-menu" class="side-menu list-unstyled">                  
 
  <li><a href="newsell.php"> <i class="fa fa-shopping-cart"></i>New Sell</a></li>
  <li ><a href="speselldir.php"> <i class="fa fa-shopping-cart"></i>Specific Sell</a></li>
  <li class="active"><a href="category.php"> <i class="fa fa-list-alt"></i>Category</a></li>
  <li><a href="supplier.php"> <i class="fa fa-industry"></i>Supplier</a></li>
  <li><a href="medicine.php"> <i class="  fa fa-medkit"></i>Medicine</a></li>
  <li><a href="invoicequery.php"> <i class="fa fa-money"></i>Invoice Query</a></li>


</ul>
</div>

<?php 
include('include\nav2.php');
?>

<!-- Breadcrumb-->
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="testing1.php">Home</a></li>
      <li class="breadcrumb-item active">Category</li>
    </ul>
  </div>
</div>
<section class="forms">
  <div class="container-fluid">
    <!-- Page Header-->
    <header> 


      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">View Category</h1></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Add Category</h1></a>
        </li>

      </ul>
    </header>
    <div class="row">
      <div class="col-lg-12">


        <div class="card card updates daily-feeds" id="home" >

          <div class="card-header d-flex align-items-center">
            <h4>View Records</h4>
          </div>
          <div class="card-body">


            <!-- Category Table-->
            <div class="table-responsive">
             <table class="table table-bordered table-hover">
              <thead class="thead-dark">
                <tr>

                  <th>#</th>
                  <th>Category Name</th>

                  <th>Action</th>
                </tr>
              </thead>
              <div id="txtHint">
                <tbody>

                  <tr>
                   <?php 
                   $count=1;
                   while($row = mysqli_fetch_assoc($result)): ?>
                     <td><?php echo $count ?></td>
                     <td><?php echo $row['name']?></td>

                     <td>
                      <div class="text-center">
             <ul class="social-network social-circle">
                      
                        <li><a href="#" class="icoGear" title="Update" data-toggle="modal" data-target="#myModal"
                          onclick="getUpdateCategory(<?php echo $row['cat_number'] ?>)"><i class="fa fa-gear"></i></a></li>
                        <li><a  href="delete/deleteCategory.php?num=<?php echo $row['cat_number'] ?>" class="icoTrash" title="Delete"><i class="fa fa-trash"></i></a></li>
                    </ul>
          </div>
                       
                     
                 </td>
               </tr>
               <?php $count++;
             endwhile; ?>

           </tr>



         </tbody>
       </div>


     </table>
   </div>

   <!-- Category Table end-->
   <!-- Central Modal Medium Success -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Update Category</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body">
       
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->
  

</div>
</div>
<div class="card " id="form" >

  <div class="card-header d-flex align-items-center">
    <h4>Add Records</h4>
  </div>
  <div class="card-body">

   <!-- Category Form-->
   <form action="add/addCategory.php" method="post">
    <div class="form-group">
      <label for="Category">Category</label>
      <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
    </div>
    <button type="submit" class="btn btn-success" >Submit</button>
  </form>
  <!-- Category Form end-->
</div>
</div>





</div>

</div>
</div>
</section>
<?php 
include('include\footer.php');
?>
<!-- JavaScript files-->
<?php 
include('include\jsExtend.php');
?>
<script type="text/javascript">
  $("#form").hide();

  $("#home").show();
  function switchOne() {


    $("#home").show(500);
    $("#form").hide();
  }

  function switchThree() {
    $("#form").show(500);
    $("#home").hide();

  }

</script>
</body>
</html>


/////////////////////end/////////////////////////////