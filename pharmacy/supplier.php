<?php
include("config.php");
$result = mysqli_query($conn, "SELECT * FROM supplier");
?>

///////////////////////////start/////////////////////////////

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
  <li class=><a href="category.php"> <i class="fa fa-list-alt"></i>Category</a></li>
  <li class="active"><a href="supplier.php"> <i class="fa fa-industry"></i>Supplier</a></li>
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
            <li class="breadcrumb-item active">Supplier</li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">View Suppliers</h1></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Add Suppliers</h1></a>
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
              <!--Supplier Table -->
               <div class="table-responsive ">
      <table class="table table-bordered table-hover">
              <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th><i class='fa fa-address-book' style='font-size:24px'></i></th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
           
            <th>Items</th>
            <th>Joined Date</th>
            <th>Action</th>


          </tr>
        </thead>
        <tbody>
          <tr>
           <?php 
           $count=1;
           while($row = mysqli_fetch_assoc($result)): ?>
             <td><?php echo $count ?></td>
             <td>
               <div id="mdb-lightbox-ui"></div>
    <div class="mdb-lightbox no-margin">
      <figure class="col-md-4">
        <a href="covers/<?php echo $row['photo'] ?>"data-size="1600x1067">
          <img src="covers/<?php echo $row['photo'] ?>" class="rounded-circle" alt="Cinque Terre"  id="myImg" style="width: 45px">
        </a>
       
      </figure>
      
    </div>
 

             
            </td>
             <td><?php echo $row['name']?></td>
             <td><?php echo $row['email']?></td>
             <td><?php echo $row['phone']?></td>
            
             <td><?php echo $row['item']?></td>
             <td><?php echo $row['joined_date']?></td>
             
             <td>
              <div class="text-center">
             <ul class="social-network social-circle">
                      
                        <li><a href="#" class="icoGear" title="Update" data-toggle="modal" data-target="#myModal1"
                  onclick="getUpdateSupplier(<?php echo $row['sup_id'] ?>)"><i class="fa fa-gear"></i></a></li>
                        <li><a href="delete/deleteSupplier.php?id=<?php echo $row['sup_id'] ?>" class="icoTrash" title="Delete"><i class="fa fa-trash"></i></a></li>
                    </ul>
          </div>
             
              
         </td>
       </tr>
       <?php $count++;
     endwhile; ?>
     
     


   </tbody>
 </table>
</div> 
               <!--Supplier Table end -->
                 <!-- update modalbox-->
                  <!-- Central Modal Medium Success -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Update Supplier</p>

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
             
              <!-- Supplier Form -->
               <form action="add/addSupplier.php" method="post" enctype="multipart/form-data">
              <div class="row">
            
            <div class="col-lg-6">
              <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="enter name!">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required="enter email!">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone"required="enter phone!">
            </div>
            <div class="form-group">
              <label for="joindate">Joined Date:</label>
              <input type="date" class="form-control" id="joindate" placeholder="Enter joined Date" name="joindate" required="enter date!">
            </div>
          </div>
            <div class="col-lg-6">
               
           <div class="form-group">
            <label for="Address">Address:</label>
            <textarea class="form-control" id="address" placeholder="Enter Address" name="address" required="enter address!"></textarea>
          </div>
          <div class="form-group">
            <label for="item">Items:</label>
            <input type="item" class="form-control" id="item" placeholder="Enter Items" name="item" required="enter item!">
          </div>
          <div class="form-group">
            <label for="photo">Photo:</label>
            <div class="custom-file">
              
              <input type="file" class="custom-file-input" id="customFile" name="photo" required="enter file!">
              <label class="custom-file-label" for="customFile">Choose file</label>
              
            </div>
          </div>

            </div>
            <div class="col-lg-6">
              <div class="form-group">       
                      <input type="submit" value="Submit" class="btn btn-success">
                    </div>
            </div>
          </div>
        </form>


               <!-- Supplier Form end-->

          
                 
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
    <script type="text/javascript">
      
    </script>
  </body>
</html>


////////////////////////////end//////////////////////////////
