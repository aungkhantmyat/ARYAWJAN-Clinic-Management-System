<?php 
include('connect.php');
include('auth.php');

$p_id=$_SESSION['p_id'];
$resb="SELECT * FROM appointment WHERE p_id='$p_id' ORDER BY app_date DESC";
$resultb=mysqli_query($conn,$resb);

///////
$daten=date("Y-m-d");

?>

///////////////////////////start///////////////////////////

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
            <li class="active"><a href="pmakeappointment.php"> <i class="icon-home"></i>Appointment </a></li>
            <li ><a href="book_view.php"> <i class="icon-form"></i>Books                             </a></li>
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
            <li class="breadcrumb-item"><a href="pmakeappointment.php" class="text-success">Patient</a></li>
            <li class="breadcrumb-item active">Appointment </li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">View Appointment</h1></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Make Appointment</h1></a>
    </li>
    
  </ul>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card card updates daily-feeds" id="home" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>View Appointment</h4>
                </div>
                <div class="card-body">
             <div class="row">
							<div class="col">  <!-- appointment list-->
						  <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div class="feed-box">
                    <ul class="feed-elements list-unstyled">
                    	<?php while ($rowb=mysqli_fetch_assoc($resultb)) {?> 
                      <!-- List-->
                      <?php 
														$d_id=$rowb['app_doctor'];
														$resc="SELECT * FROM staff WHERE Staff_Id='$d_id'";
														$resultc=mysqli_query($conn,$resc);
														$rowc=mysqli_fetch_assoc($resultc);
                            $depid=$rowc['Department'];
                            $resd="SELECT * FROM department WHERE dep_id='$depid'";
                            $resultd=mysqli_query($conn,$resd);
                            $rowd=mysqli_fetch_assoc($resultd);
														 $b=$rowb['app_date'];
														//  echo date_format($b,"d.m.Y ");
														$date=date_create($b);
                           
$ts1 = strtotime($daten);
$ts2 = strtotime($b);

$seconds_diff = ($ts2 - $ts1)/8064;



														 ?>
                      <li class="clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="covers/<?php echo $rowc['Photo']; ?>" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content"><strong><a href="#" data-toggle="popover" title="<?php echo $rowc['Name']; ?>" data-content="<?php echo $rowd['dep_name'].' '.$rowc['Rank']; ?>"><?php echo $rowc['Name']; ?></a>
                              </strong>
                            
                              <div class="full-date">
                                 <small><b>Time:</b><?php echo $rowc['Time']; ?>  </small>
                                <small><b>Date:</b><?php echo date_format($date,"d.m.Y"); ?>	</small>

                              </div>
                            </div>
                          </div>
                          <?php if($seconds_diff>=0){ ?>
                         <div class="date"><a href="#"  onclick=
														"getCancel('<?php echo $rowb['app_id'] ?> ')" class="btn btn-xs btn-dark">Cancel</a></div>
                            <?php }else{ ?>
                              <div class="date"><a href="removeappo.php?id= <?php echo $rowb['app_id'] ?>"  
                            class="btn btn-xs  btn-blue-grey"  data-toggle="tooltip" title="Remove From the list!">Remove</a></div>
                            <?php } ?>
                        </div>
                      </li>
                      <!-- List-->
                      
                     	<?php }?>
                      
                      
                    </ul>
                  </div>
                </div>
						  <!-- appointment list end--></div>
						</div>
						
							
						
						  					<!-- The Modal -->
  <div class="modal fade" id="modalCancel">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content" id="modal-body-cancel">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirm Messenge</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Are you sure to cancel the appointment?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<a href="deleteappointment.php"> <button type="button" class="btn btn-primary" >Confirm</button></a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal end-->
                 
                </div>
              </div>
             <div class="card " id="form" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Form</h4>
                </div>
                <div class="card-body">

              <!-- make appointment form-->
              <form action="updateappointment.php" method="post">
                  <div class="row">
            <div class="col-lg-6">
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
                    <div class="form-group">
										<label for="medical_problem">Medical Problem:</label>
										<textarea name="medical_problem" rows="5" id="medical_problem" class="form-control"></textarea>
									</div>
            </div>
             <div class="col-lg-6">
            <div class="form-group" id="txtHint">
										<label for="doctor">Choose Doctor:</label>
										<select name="doctor" id="department" class="custom-select">
											<option value="">-- Choose --</option>

										</select>
									</div>
                   <div class="form-group">
										<label for="appo_date">Date:</label>
										<input type="date" name="date" id="appo_date" value="" class="form-control" onchange="" >
									</div>
            </div>
             <div class="col-lg-6">
            
                    <div class="form-group">       
                    <div id="showvalid"></div>
							<input type="hidden" name="pid" value="<?php echo $p_id ?> ">
							<button type="submit" class="btn btn-success">Submit</button>
                    </div>
            </div>
            </div>
                    
                  </form>
               <!-- make appointment form end-->
                 
                 
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
$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
});
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

    </script>
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
<script type="text/javascript">
	function getCancel(str) {
		console.log(str);

				if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById("modal-body-cancel").innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","predeleteappointment.php?id="+str,true);
  xmlhttp.send();
}
</script>
  </body>
</html>


//////////////////////////end/////////////////////////////