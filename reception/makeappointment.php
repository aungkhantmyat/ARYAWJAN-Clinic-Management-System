<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .pills-orange-anm .nav-item .nav-link.active {
      background-color: #46a049 ;
      color:white;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 #e6e6e6, 0 6px 20px 0    #f2f2f2;

      -webkit-animation-name: orange; /* Safari 4.0 - 8.0 */
      -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */

    }
    .pills-orange-anm .nav-item .nav-link{
      color: #46a049;
    }
    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes orange {
      from {background-color: #5fb962 ;}
      to {background-color: #28a745;}
    }

    /* Standard syntax */
    @keyframes orange {
      from {background-color: #5fb962 ;}
      to {background-color:#28a745; }
    }
  </style>
  <?php 
  include('include\cssExtend.php');
  ?>
</head>
<body>
  <?php 
  include("config.php"); 
  include('include\nav1.php');
  ?>
  <ul id="side-main-menu" class="side-menu list-unstyled">                  
   <li class="active"><a href="makeappointment.php">Make Appointment</a></li>
    <li ><a href="viewappointment.php">View Appointment</a></li>
    <li><a href="bill.php">Billing</a></li>
   
  </ul>

   <?php 
include('include\nav2.php');

?>

        <div class="container-fluid">
                   <?php 
include("config.php");
?>

      
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="makeappointment.php" class="text-success">Home</a></li>
            <li class="breadcrumb-item active">Make Appointment  </li>
          </ul>
        </div>
      </div>
       <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <h1 class="h3 display">Make Appointment</h1>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
     
                 
               
             <div class="card ">
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Appointment Form</h4>
                </div>
                <div class="card-body">
            
                  <form action="update_appointment.php" method="post" enctype="multipart/form-data">
                  <div class="row">
            <div class="col-lg-6">
             <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
            </div>
            </div>
             <div class="col-lg-6">
            <div class="form-group">
               <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" class="form-control" id="date" placeholder="Enter joined Date" name="date">
            </div>
                        <div class="form-group">
                    <label for="department">Choose Medical Department:</label>
                    <select name="department" id="department" onchange="showUser(this.value)" class="custom-select">
                      <option value="">-- Choose --</option>
                      <?php

                      $result = mysqli_query($conn, 
                        "SELECT * FROM department;");
                      while($row = mysqli_fetch_assoc($result)):
                        ?>
                        <option value="<?php echo $row['dep_id'] ?>">
                          <?php echo $row['dep_name'] ?>
                        </option>
                      <?php endwhile; ?>
                    </select>
                  </div>
                     <div class="form-group" id="txtHint">
                    <label for="doctor">Choose Doctor:</label>
                    <select name="doctor" id="department" class="custom-select">
                      <option value="">-- Choose --</option>

                    </select>
                  </div>
            </div>
             <div class="col-lg-6">
            
                    <div class="form-group">       
                        <button type="submit" class="btn btn-success">Submit</button>
    
                    </div>
            </div>
            </div>
                    
                  </form>
                 
                </div>
              </div>
               
              
              
 
            
          
         
          </div>
        </div>
      </section>
 <!-- Page Heading -->
          
<?php 
include('include\footer.php');
include('include\jsExtend.php');


?>
<script type="text/javascript">
  function showUser(str) { 
    if (str == "") {
      
              document.getElementById("txtHint").innerHTML = "Z";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdoctor.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</body>
</html>

