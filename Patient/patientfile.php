<?php 
include("connect.php");
include("auth.php");
$p_id=$_SESSION['p_id'];
$res="SELECT * FROM patient WHERE p_id='$p_id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$doctors=[];
$doctors=explode(",", $row['doctor_id']);
?>



/////////////////////////start/////////////////////////

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
            <li ><a href="book_view.php"> <i class="icon-form"></i>Books                             </a></li>
            <li class="active"><a href="patientfile.php"> <i class="fa fa-bar-chart"></i>Files                            </a></li>
           
          </ul>
        </div>
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="patientfile.php" class="text-success">Patient</a></li>
            <li class="breadcrumb-item active">File</li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">View File</h1></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Add File</h1></a>
    </li>
    
  </ul>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div class="card card updates daily-feeds" id="home" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>View Files</h4>
                </div>
                <div class="card-body">
             
             <!-- file table-->
            <div class="table-responsive">
				<table id="employee" class="table  table-bordered   table-hover">
    <thead class="thead-dark">
						<tr>
							<th>#</th>
							<th>File Name</th>
							<th>File Type</th>
							<th>Doctor Name</th>
                    <th>File Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php 
							$res="SELECT * FROM patientfile WHERE p_id='$p_id'";
							$result=mysqli_query($conn,$res);
							$count=1;

							while ($row=mysqli_fetch_assoc($result)){

								$filearray=[];
								$filearray=explode(".", $row['file_name']);
								$doctor_id1=$row['doctor_id'];
								$res1="SELECT * FROM staff WHERE Staff_Id='$doctor_id1'";
								$result1=mysqli_query($conn,$res1);
								$row1=mysqli_fetch_assoc($result1);

								?>
								<td><?php echo $count; ?></td>
								<td><a href="<?php echo "covers/".$row['file_name']; ?>" target="_blank" type="application/pdf"><?php echo $filearray[0]; ?></a>
                 </a></td>
								<td><?php echo $filearray[1]; ?></td>
								<td><?php echo $row1['Name']; ?></td>
                <td><?php echo $row['file_note']; ?></td>
								<td>
                  <div class="text-center">
             <ul class="social-network social-circle">
                      
                        <li><a href="#" class="icoGear" title="Update" data-toggle="modal" data-target="#myModalUpdate" onclick="getUpdate(<?php echo $row['file_id'] ?>)"><i class="fa fa-gear"></i></a></li>
                        <li><a  href="delete/patientfiledelete.php?id=<?php echo $row['file_id']?>" class="icoTrash" title="Delete"><i class="fa fa-trash"></i></a></li>
                    </ul>
          </div>
                 <!--  <ul class="nav">
												<li class="nav-item">
													<button type="button" class="btn" data-toggle="modal" data-target="#myModalUpdate" onclick="getUpdate(<?php echo $row['file_id'] ?>)">
														<i class='fa fa-refresh' style='font-size:24px'></i>
													</button>
												</li>



												<li class="nav-item">
													<a href="delete/patientfiledelete.php?id=<?php echo $row['file_id']?>">
														<button type="button" class="btn">

															<i class='fa fa-trash' style='font-size:24px'></i>
														</button>
													</a>
												</li>
											</ul> -->
										</td>
							</tr>
							<?php 
							$count=$count+1;} ?>
						</tr>
					</tbody>
				</table>

				
			</div>

             <!-- file table end-->
              <!-- Central Modal Medium Success -->
<div class="modal fade"  id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Update Medical Record</p>

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
<!-- Central Modal Medium Success-->
             
                 
                </div>
              </div>
             <div class="card " id="form" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Add Form</h4>
                </div>
                <div class="card-body">
             
             <!-- add file form-->
             <form action="add\fileadd.php" method="post" enctype="multipart/form-data">
                  <div class="row">
            <div class="col-lg-12">
            <div class="form-group">
				<label for="customFile">File</label>
			 <div class="custom-file">
    <input type="file" class="custom-file-input" name="file" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
   
  </div>
  <div class="form-group">
   <label for="doctor">Doctor</label>
			<select name="doctor" id="doctor" class="custom-select">
				<option value="0">Choose</option>
				<?php foreach ($doctors as $var) {
					$res1="SELECT* FROM staff WHERE Staff_Id='$var' ";
					$result1=mysqli_query($conn,$res1);
					$row1=mysqli_fetch_assoc($result1);
					?>
					<option value="<?php echo $var ?>"><?php echo $row1['Name']; ?></option>
					<?php } ?>
				</select>
  </div>
   <div class="form-group">  
                <label for="note">File Description:</label>
  <textarea class="form-control" rows="5" id="note" name="note"></textarea>
                    </div>
                    
            </div>
           
            
             <div class="col-lg-6">
            
                    <div class="form-group">       
                     <input type="hidden" name="p_id" value="<?php echo $p_id ?>">
				<input type="submit" class="btn btn-success" name="submit" value="Submit">
                    </div>
            </div>
            </div>
                    
                  </form>
              <!-- add file form  end-->
                  
                 
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
	$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
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
  xmlhttp.open("GET","update/patientpreupdate.php?id="+str+","+<?php echo $p_id; ?>,true);
  xmlhttp.send();
}
</script>
  </body>
</html>


/////////////////////////end///////////////////////////