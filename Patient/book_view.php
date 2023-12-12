<?php 
	include('connect.php');
	
 ?>



/////////////////////////////start///////////////////////////////

<!DOCTYPE html>
<html>
  <head>

   <?php 
  include('include\cssExtend.php');
   ?>
   <link rel="stylesheet" type="text/css" href="doctorcard.css">
  </head>
  <body>
   <?php 
  include('include\nav1.php');
   ?>
    
         
           <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="pmakeappointment.php"> <i class="icon-home"></i>Appointment </a></li>
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
            <li class="breadcrumb-item active">Book     </li>
          </ul>
        </div>
      </div>

      <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h2 display">Medical Books</h1>
            
  
          </header>
          <div class="row">
          
          
            <?php $p_id=$_SESSION['p_id'];
$res="SELECT * FROM patient WHERE p_id='$p_id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result); 
$doctors=$row['doctor_id'];
$doctors_ar=[];
$doctors_ar=explode(",",$doctors);
?>

              <?php $count=1;
foreach ($doctors_ar as $var){
    $doctorinfo=[];
$doctorinfo=explode("-",$var);
  
  $res1="SELECT * FROM staff WHERE staff_id='$doctorinfo[0]'";
$result1=mysqli_query($conn,$res1);
$row1=mysqli_fetch_assoc($result1);
$dep_id=$row1['Department'];
 $res2="SELECT * FROM department WHERE dep_id='$dep_id'";
$result2=mysqli_query($conn,$res2);
$row2=mysqli_fetch_assoc($result2);

 
$doctors_info=array("ID"=>$doctorinfo[0],"Name"=>$row1['Name'],"Photo"=>$row1['Photo'],"Certification"=>$row1['Certification'],"photo"=>$row1['Photo']);
$aung= $doctors_info['ID'] .",".$doctors_info["Name"];
 ?>
              <!-- Doctor card-->
              <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 10px 0">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip" >
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="covers/<?php echo $doctors_info['Photo'] ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $doctors_info["Name"] ?></h4>

                                    <p class="card-text"><?php echo $row2['dep_name']." ". $row1['Rank'] ?></p>
                                    
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?php echo $doctors_info["Name"] ?></h4>
                                    <p class="card-text"><?php
       $var1=$doctors_info["Certification"];
echo str_replace("/", "<br>", $var1);
     ?><br>
Tue & Sat : 10:00 AM – 11:00 AM</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                          <a href="list_view.php?id=<?php echo $aung ?>" class="btn btn-success ">View Records</a>
                                           
                                               
                                            
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <!-- Doctor card end-->

               <?php $count++;
                } ?>
            
           
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
  </body>
</html>



////////////////////////////end//////////////////////////////////
