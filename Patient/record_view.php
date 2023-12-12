<?php 
include('connect.php');
include('auth.php');
$id=$_GET['id'];
$p_id=$_SESSION['p_id'];
$var1=[];//array[doctor_id,date]
$var1=explode("/",$id);
/////////
$res="SELECT * FROM patientrecord WHERE p_id='$p_id' AND doctor_id='$var1[0]' AND date='$var1[1]'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);//record of patient_record
////////
?>


	////////////////////////start///////////////////////////////

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
           <li class="breadcrumb-item"><a href="book_view.php" class="text-success">Books</a></li>
             <li class="breadcrumb-item"><a href='' class="text-success">Lists</a></li>
            <li class="breadcrumb-item active">Record</li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card card updates daily-feeds" id="home" >
             
                <div class="card-body">
             <!--main table -->
				<table class="table">

					 <thead class="thead" style="background-color: #393836;">
      
					<tr>
						
						<th colspan="2">
							<h4 class="font-weight-bold text-light">Illness & Treatment</h4>
						</th>

					</tr>
    </thead>
					<tr>
						
						<td>
							<!--BP & BWT Card -->
							<div class="card bg-light text-dark"  style="margin: 4px 0">
								<div class="card-body">

									<h4 class="card-title">BP & BWT</h4>
									<p class="card-text"><strong>BP   &nbsp: </strong><?php echo $row['b_pressure']; ?> <br>
										<strong>BWT: </strong> <?php echo $row['weight']; ?></p>
									</div>
								</div>
								<!--BP & BWT Card end-->
								<!--Treatment Record Card -->
								<div class="card bg-light text-dark" style="margin: 4px 0">
									<div class="card-body">

										<h4 class="card-title">Treatment Record</h4>
										<p class="card-text"><?php echo $row['record']; ?></p>
									</div>
								</div>
								<!--Treatment Record Card end-->
								<!--Drug Record Card -->
								<div class="card bg-light text-dark"  style="margin: 4px 0">
									<div class="card-body">

										<h4 class="card-title">Drug Record</h4>
										<p class="card-text"><?php echo $row['drug_list']; ?></p>
									</div>
								</div>
								<!--Drug Record Card end-->
							</td>
						</tr>

						<tbody>

						</tbody>
					</table>
					<!--main table end -->
                 
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
    

    </script>
  </body>
</html>


	///////////////////////end//////////////////////////////////