<?php 
include('connect.php');
include('auth.php');
$id=$_GET['id'];
$p_id=$_SESSION['p_id'];
$var1=[];//array[doctor_id,doctor_name]
$var1=explode(",",$id);
///////
$res="SELECT * FROM patientrecord WHERE p_id='$p_id' AND doctor_id='$var1[0]' ORDER BY date DESC";
$result=mysqli_query($conn,$res);
?>


////////////////////////start/////////////////////

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
            <li><a href="pmakeappointment.php" > <i class="icon-home" ></i>Appointment </a></li>
            <li class="active"><a href="book_view.php"> <i class="icon-form"></i>Books                             </a></li>
            <li ><a href="patientfile.php"> <i class="fa fa-bar-chart"></i>Files                            </a></li>
           
          </ul>
        </div>
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
           <li class="breadcrumb-item"><a href="book_view.php" class="text-success">Home</a></li>
             <li class="breadcrumb-item"><a href="book_view.php" class="text-success">Book</a></li>
            <li class="breadcrumb-item active">Record-list</li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h2 display"><?php echo $var1[1]; ?>'s Records</h1>
            
  
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card updates recent-updated" id="home" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Medical Records</h4>
                </div>
                <div class="card-body">
                  <ul class="news list-unstyled">
          <?php while($row=mysqli_fetch_assoc($result)): ?>
            <!-- record list-->
                <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="fa fa-file-o"></i></div>
                        <div class="title"><strong><a href="record_view.php?id=<?php echo $var1[0]."/".$row['date']?>" class="teal-text">Medical Record</a></strong>
                          <p><?php echo $row['date']; ?></p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                      
                      </div>

                    </li  >                  <!-- Item-->
                   <!-- record list end-->
              
            <?php endwhile; ?>
          </ul>

                
                 
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


/////////////////////////end//////////////////////

