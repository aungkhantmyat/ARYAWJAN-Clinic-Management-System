
   <?php
   include("config.php");
   $result2 = mysqli_query($conn, "SELECT * FROM medicine");
   ?>

///////////////////start//////////////////////////

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
  <li ><a href="category.php"> <i class="fa fa-list-alt"></i>Category</a></li>
  <li><a href="supplier.php"> <i class="fa fa-industry"></i>Supplier</a></li>
  <li class="active"><a href="medicine.php"> <i class="  fa fa-medkit"></i>Medicine</a></li>
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
            <li class="breadcrumb-item active">Medicine</li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">View Medicine</h1></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Add Medicine</h1></a>
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
              <!-- Medicine table-->
              <div class="table-responsive">
     <table class="table table-bordered table-hover">
              <thead class="thead-dark">
         <tr>
          <th>#</th>
          <th>Name</th>
          <th>Category</th>
          <th>Composition</th>
          <th>Supplier</th>
          <th>info</th>
          <th>Qty</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <?php 
           $count=1;
           while($row2 = mysqli_fetch_assoc($result2)): ?>
             <td><?php echo $count ?></td>
            
             <td><?php echo $row2['name']?></td>
             <td><?php echo $row2['category']?></td>
             <td><?php echo $row2['composition']?></td>
             <td><?php echo $row2['supplier']?></td>
             <td>
              <div class="text-center">
             <ul class="social-network social-circle">
                      
                        <li><a href="#" class="icoInfo" title="Information" data-toggle="modal" data-target="#myModalInfo"
               onclick="getInfoMedicine(<?php echo $row2['id'] ?>)"><i class="fa fa-info-circle"></i></a></li>
                      
                    </ul>
          </div>
             
             </td>
             <td>2</td>
             
             
             <td>
              <div class="text-center">
             <ul class="social-network social-circle">

                           <li><a href="#" class="icoAdd" title="Add" data-toggle="modal" data-target="#myModalStock"
                onclick="getStockMedicine(<?php echo $row2['id'] ?>)"><i class="fa fa-pencil"></i></a></li>
                        <li><a href="#" class="icoGear" title="Update" data-toggle="modal" data-target="#myModalUpdate"
               onclick="getUpdateMedicine(<?php echo $row2['id'] ?>)"><i class="fa fa-gear"></i></a></li>
                        <li><a  href="delete/deleteMedicine.php?id=<?php echo $row2['id'] ?> ?>" class="icoTrash" title="Delete"><i class="fa fa-trash"></i></a></li>
                    </ul>
          </div>
             
           
     </td>
       </tr>
       <?php $count++;
     endwhile; ?>
     
   </tr>


   
 </tbody>
</table>
</div> 

               <!-- Medicine table end-->
                 <!-- Central Modal Medium Success -->

<!-- Central Modal Medium Success-->
                <!-- Stock Modal Box -->
                <div class="modal fade"  id="myModalStock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Add Stock</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body-stock">
       
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>

 
                 <!-- Stock Modal Box end-->
                  <!-- info Modal Box -->
                     <div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Medicine Information</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body-info">
       
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
                
                 <!-- info Modal Box end-->
                  <!-- Update Modal Box -->
                                  <div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Update Medicine</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body"id="modal-body-update">
       
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
            
                  
                 <!-- Update Modal Box end-->

                 
                </div>
              </div>
             <div class="card " id="form" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Add Records</h4>
                </div>
                <div class="card-body">
                        
            <!-- Medicine Form-->
            <form>
              <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
              <?php  
               include("config.php");
                 $result = mysqli_query($conn, "SELECT * FROM category");
                  ?> 
              <label for="category">Category:</label>
              <select name="category" class="custom-select form-control " id="category">
                <option selected>--Select--</option>
                <?php while($row = mysqli_fetch_assoc($result)): ?>    

                 <option value="<?php echo $row['name'] ?>">
                  <?php echo $row['name'] ?>  
                </option>
              <?php endwhile; ?>
            </select>





          </div>
          <div class="form-group">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Enter Company Name" name="company">
          </div>
          <div class="form-group">
            <label for="composition">Composition:</label>
            <textarea class="form-control" id="composition" placeholder="Enter Composition" name="composition" ></textarea>
          </div> 
              </div>
              <div class="col-lg-6">
                <div class="form-group">
          <?php  
               include("config.php");
                 $result1 = mysqli_query($conn, "SELECT * FROM supplier");
                  ?> 
          <label for="supplier">Supplier:</label>
          <select name="supplier" class="custom-select form-control" id="supplier">
            <option selected>--Select--</option>
             <?php while($row1 = mysqli_fetch_assoc($result1)): ?>    

                 <option value="<?php echo $row1['name'] ?>">
                  <?php echo $row1['name'] ?>  
                </option>
              <?php endwhile; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="note">Note:</label>
          <textarea class="form-control" id="note" placeholder="Enter Note" name="note" ></textarea>
        </div>
        <div class="form-group">

         <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="photo" name="photo">
          <label class="custom-file-label" for="photo">Choose Mediine Photo:</label>
        </div>
      </div>
              </div>
              <div class="col-lg-6">
                 <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
            </form>
            
            <!-- Medicine Form end-->
                 
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


///////////////////end////////////////////////////