
<!DOCTYPE html>
<html>
  <head>

  <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='robots' content='all,follow'>
    <!-- Bootstrap CSS-->
    <link rel='stylesheet' href='vendor/bootstrap/css/bootstrap.min.css'>
    <!-- Font Awesome CSS-->
    <link rel='stylesheet' href='vendor/font-awesome/css/font-awesome.min.css'>
    <!-- Fontastic Custom icon font-->
    <link rel='stylesheet' href='css/fontastic.css'>
    <!-- Google fonts - Roboto -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700'>
    <!-- jQuery Circle-->
    <link rel='stylesheet' href='css/grasp_mobile_progress_circle-1.0.0.min.css'>
    <!-- Custom Scrollbar-->
    <link rel='stylesheet' href='vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css'>
    <!-- theme stylesheet-->
    <link rel='stylesheet' href='css/style.default.css' id='theme-stylesheet'>
    <!-- Custom stylesheet - for your changes-->
    <link rel='stylesheet' href='css/custom.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css' >
    
    <!-- Favicon-->
    <link rel='shortcut icon' href='img/favicon.ico'>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  </head>
  <body>
   <?php 
  include('include\nav1.php');
   ?>
    
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Employees</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                <li><a href="admin.php">Admin</a></li>
                <li><a href="doctor.php">Doctor</a></li>
                <li><a href="nurse.php">Nurse</a></li>
                <li><a href="hr.php">HR</a></li>
                <li><a href="driver.php">Driver</a></li>
                <li><a href="pharmacist.php">Pharmacist</a></li>

              </ul>
            </li>
            <li class="active"><a href="equipment.php"> <i class="icon-form"></i>Equipment</a></li>
            <li><a href="car.php"> <i class="fa fa-bar-chart"></i>Ambulance</a></li>
             <li><a href="editprofile.php"> <i class="fa fa-bar-chart"></i>Edit Profile</a></li>
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
                <input class="form-control" id="myInput" type="text" name="search" placeholder="Search...">
              </div>
              <div class="col" style="margin: 10px 0;">

              </div>
            </div>
            <?php 
            include("connect.php");
            $res="SELECT * FROM staff WHERE Type='doctor'";
            $result=mysqli_query($conn,$res);
            ?>


            <div class="table-responsive">
              <table id="fileakm" class="table  table-bordered table-striped  table-hover">
                <thead class="thead-dark">
                  <tr>
                    <!-- <th>Admin List</th> -->
                  </tr>
                  <tr>
                    <th>#</th>
                    <th>Name</th>

                    <th>NRC</th>

                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Info</th>
                    <th>Rank</th>

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
                      <td><?php echo $rows['Name']; ?></td>

                      <td><?php echo $rows['NRC']; ?></td>

                      <td><?php echo $rows['Address']; ?></td>
                      <td><?php echo $rows['Phone']; ?></td>
                      <td><?php echo $rows['Email']; ?></td>
                      <td><button type="button" class="btn" data-toggle="modal" data-target="#myModalInfo"
                        onclick="getInfo(<?php echo $rows['Staff_Id'] ?>)">
                        <i class="fa fa-info-circle" style="font-size:24px"></i>
                      </button></td>
                      <td><?php echo $rows['Rank']; ?></td>

                      <td><ul class="nav">
                        <li class="nav-item">
                          <button type="button" class="btn" data-toggle="modal" data-target="#myModalUpdate" onclick="getUpdate(<?php echo $rows['Staff_Id'] ?>)">
                            <i class="fa fa-refresh" style='font-size:24px'></i>
                          </button>
                        </li>



                        <li class="nav-item">
                          <a href="delete.php?id=<?php echo $rows['Staff_Id']."/doctor"?>">
                            <button type="button" class="btn">

                              <i class="fa fa-trash" style='font-size:24px'></i>
                            </button>
                          </a>
                        </li>
                      </ul>
                    </td>
                    <?php 
                    $num=$num+1;}
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="modal fade" id="myModalInfo">
                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Doctor Information</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" id="modal-body-info">

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>


              <div class="modal fade" id="myModalUpdate">
                <div class="modal-dialog modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Update Doctor Information</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" id="modal-body-update">

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                  </div>
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
                  <form action="staff_add.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>

                  <div class="form-group">
                    <label for="birthdate">Birthdate:</label>
                    <input type="text" class="form-control" id="birthdate"  name="birthdate">
                  </div>

                  

                  <div class="form-group">
                    <label for="nrc">NRC:</label>
                    <input type="text" class="form-control" id="nrc" name="nrc">
                  </div>

                  <div class="form-group">
                    <label for="gender">Gender</label>
                    
                    <input type="radio" name="gender" value="male" checked> Male

                    <input type="radio" name="gender" value="female"> Female <br>
                    
                  </div>

                  <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address" >
                      
                    </textarea>
                  </div>


                  

                </div>
                
                <div class="col-sm">
                  <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>

                  

                  <div class="form-group">
                    <label for="rank">Rank:</label>
                    <input type="text" class="form-control" id="rank"  name="rank">
                  </div>

                  <div class="form-group">
                    <label for="education">Education:</label>
                    <textarea class="form-control" id="education"  name="education" >
                      
                    </textarea>
                  </div>

                  
                  
                </div>



                <div class="col-sm">
                  
                  <div class="form-group">
                    <label for="certification">Certification:</label>
                    <textarea class="form-control" id="certification">
                      
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label for="department">Department:</label>
                    <select name="department" id="department">
                      <option value="0">--Choose--</option>
                      <option value="Heart">Heart</option>
                      <option value="Brain">Brain</option>
                      <option value="Cancer">Cancer</option>
                    </select>
                  </div>

                  

                  <div class="form-group">
                    <label for="photo">Photo:</label>

                    <div class="custom-file mb-3">

                      <input type="file" class="custom-file-input" id="photo" name="photo">
                      <label class="custom-file-label" for="photo">Choose Profile Photo:</label>
                    </div>
                  </div>
                  
                </div>
                
              </div>
              
              <input type="hidden" name="type" value="doctor"><br>

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
  xmlhttp.open("GET","preupdate.php?id="+str,true);
  xmlhttp.send();
}


function getInfo(str) {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-info").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","infodoctor.php?id="+str,true);
  xmlhttp.send();
}
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#fileakm').DataTable();
  });
</script> 
  </body>
</html>

