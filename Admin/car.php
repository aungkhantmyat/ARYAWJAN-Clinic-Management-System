
<!DOCTYPE html>
<html>
  <head>

   <?php 
  include('include\cssExtend.php');
   ?>
  </head>
  <body>
   <?php 
     include("connect.php");
  include('include\nav1.php');
   ?>
    
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Employees</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                <li><a href="admin.php">Admin</a></li>
                <li><a href="doctor.php">Doctor</a></li>
                <li><a href="nurse.php">Nurse</a></li>
                <li><a href="hr.php">HR</a></li>
                <li><a href="driver.php">Driver</a></li>
                <li><a href="pharmacist.php">Pharmacist</a></li>
              </ul>
            </li>
            <li><a href="equipment.php"> <i class="fa fa-cog"></i>Equipment</a></li>
            <li class="active"><a href="car.php"> <i class="fa fa-ambulance"></i>Ambulance</a></li>
             <li><a href="editprofile.php"> <i class="fa fa-users"></i>Edit Profile</a></li>
            </ul>
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Forms</li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">View</h1></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Add</h1></a>
    </li>
    
  </ul>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card card updates daily-feeds" id="home" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>HOME</h4>
                </div>
                <div class="card-body">
               <h3>View Records</h3>
            <div class="row">
              
              <div class="col" style="margin: 10px 0;">

              </div>
            </div>
            <?php 
            include("connect.php");
            $res="SELECT * FROM car ";
            $result=mysqli_query($conn,$res);
            ?>


            <div class="table-responsive">
              <table id="fileakm" class="table  table-bordered table-hover">
                <thead class="thead-dark">
                  <tr>
                    <!-- <th>Admin List</th> -->
                  </tr>
                  <tr>
                    <th>#</th>
                    <th>Car Number</th>

                    <th>Action</th>

                  </tr>
                </thead>
                <?php 
                $num=1;
                while($rows=mysqli_fetch_assoc($result))
                {
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $num; ?></td>
                      <td><?php echo $rows['Car_Name']; ?></td>

                      
                      

                      <td>
                         <div class="text-center">
             <ul class="social-network social-circle">

                         
                        <li><a href="#" class="icoGear" title="Update" data-toggle="modal" data-target="#myModalUpdate" onclick="getUpdate(<?php echo $rows['Car_Id'] ?>)"><i class="fa fa-gear"></i></a></li>
                        <li><a  href="car_delete.php?id=<?php echo $rows['Car_Id']?>" class="icoTrash" title="Delete"><i class="fa fa-trash"></i></a></li>
                    </ul>
          </div>




                       
                    </td>
                    <?php 
                    $num=$num+1;}
                    ?>
                  </tbody>
                </table>
              </div>

<!-- Central Modal Medium Success-->
                <!-- Stock Modal Box -->
                <div class="modal fade"  id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-notify modal-success modal-xl" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Update Ambulance Information</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body" id="modal-body-update">
       
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>


              
                 
                </div>
              </div>
             <div class="card " id="form" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Form</h4>
                </div>
                <div class="card-body">
             <p>Lorem ipsum dolor sit amet consectetur.</p>
                <form action="car_add.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="carname">Car Number:</label>
                    <input type="text" class="form-control" id="carname" name="carname">
                  </div>

                  

      
                  

                </div>
                




                
                
              </div>
              
              

              <button type="submit" class="btn btn-success">Submit</button>
            </form>
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

  function getUpdate(str) {
        if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-update").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","car_preupdate.php?id="+str,true);
  xmlhttp.send();
}
</script> 
 
  </body>
</html>

