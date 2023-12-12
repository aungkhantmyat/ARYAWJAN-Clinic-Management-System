<?php 

include("connect.php");
include("auth.php");
$p_id=$_SESSION['p_id'];
$res="SELECT * FROM patient WHERE p_id='$p_id'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$doctors=[];
$doctors=explode(",", $row['doctor_id']);
$blood=['a-','a+','b','ab+','ab-','o'];
$blood_name=['A-','A+','B','AB+','AB-','O'];

?>



////////////////////start//////////////////////

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
            <li><a href="patientfile.php"> <i class="fa fa-bar-chart"></i>Files                            </a></li>
           
          </ul>
        </div>
        
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="book_view.php" class="text-success">Patient</a></li>
            <li class="breadcrumb-item active">Profile </li>
          </ul>
        </div>
      </div>
     <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
           
            
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a  class="nav-link active" data-toggle="pill" href="#home" onclick="switchOne()">  <h1 class="h3 display">Edit Profile</h1></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form" onclick="switchThree()">  <h1 class="h3 display">Edit DF </h1></a>
    </li>
    
  </ul>
          </header>
          <div class="row">
          <div class="col-lg-12">
           
           
      <div  id="home" >
      	<div class="row">
      		<div class="col-lg-6">
      			<div class="card " >
                  <div class="card-header d-flex align-items-center">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                	<form action="update/patientproedit.php"  onsubmit =" validateProfileForm()"  method="post" enctype="multipart/form-data" name="EditProfileForm">
									<div class="form-group">
										<label for="name">Name:</label>
										<input type="text" class="form-control" id="name" name="name" value=" <?php echo $row['p_name'] ?>">
										<div class="error" id="nameErr"></div>
									</div>
									<div class="form-group">
										<label for="phone">Phone:</label>
										<input type="tel" class="form-control" id="phone" name="phone" value=" <?php echo $row['p_phone'] ?>">
									</div>
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email" value=" <?php echo $row['p_email'] ?>">
										<div class="error" id="emailErr"></div>
									</div>
									<div class="form-group">
										<label for="birthdate">Birthdate:</label>
										<input type="date" class="form-control" id="birthdate" name="birthdate" required="Enter date">
										
									</div>
									<div class="form-group">
										<label for="b_type">Blood Type:</label>
										<select name="b_type" class="custom-select">
										<?php  for ($i=0; $i <count($blood) ; $i++) { 
											if ($row['p_blood']==$blood[$i]) {
											?>
											<option value="<?php echo $blood[$i]; ?>" selected><?php echo $blood_name[$i]; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $blood[$i]; ?>"><?php echo $blood_name[$i]; ?></option>
											<?php }} ?>
										</select>
									</div>
									<div class="form-group">
										<label for="drug_allergy">Drug Allergy:</label>
										<textarea class="form-control" id="drug_allergy" name="drug_allergy"><?php echo $row['p_drug_allergy'] ?></textarea>
										<div class="error" id="textErr"></div>
									</div>
									<div class="form-group">
										<label for="profile_pic">Profile Picture:</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile" name="photo" required="Enter file">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
									<input type="hidden" name="p_id" value="<?php echo $p_id ?>">
									<button type="submit" class="btn btn-success">Submit</button>
								</form>
                </div>
              </div>
      		</div>
      		<div class="col-lg-6">
      			<div class="card " >
                  <div class="card-header d-flex align-items-center">
                  <h4>Change Password</h4>
                </div>
                <div class="card-body">
                	<form action="update/patientcp.php" onsubmit="return validateChangePasswordForm()" method="post" name="ChangePasswordForm">
									<div class="form-group">
										<label for="current_password">Current Password:</label>
										<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Current Password">
										<div class="error" id="passwordErr"></div>
									</div>
									<div class="form-group">
										<label for="change_password">Change Password:</label>
										<input type="password" class="form-control" id="change_password" name="change_password" placeholder="Change Password">
										<div class="error" id="passwordErr"></div>
									</div>
									<div class="form-group">
										<label for="confirm_password">Confirm Password:</label>
										<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password">
										<div class="error" id="passwordErr"></div>
									</div>
									<input type="hidden" name="p_id" value="<?php echo $p_id ?>">
									<button type="submit" class="btn btn-success">Change Password</button>
								</form>
                </div>
              </div>
              <div class="card " >
                  <div class="card-header d-flex align-items-center">
                  <h4>Forget Password</h4>
                </div>
                <div class="card-body">
                	<form action="add/fpasswordadd.php" onsubmit="return validateForgetPasswordForm()" method="post" name="ForgetPasswordForm">
									<div class="form-group">
										<label for="fg_email">Your Current Email:</label>
										<input type="email" class="form-control" id="fg_email" name="fg_email" placeholder="Enter Current Email">
										<div class="error" id="emailErr"></div>
									</div>
									<input type="hidden" name="p_id" value="<?php echo $p_id ?>">
									<button type="submit"  class="btn btn-success">Send</button>
								</form>
                </div>
              </div>
      		</div>

      	</div>
                 
                
              </div>

             <div class="card " id="form" >
                 
                <div class="card-header d-flex align-items-center">
                  <h4>Edit Doctor Follow</h4>
                </div>
                <div class="card-body">
             
			

				<div id="accordion">

					<?php 
					$count=1;
					foreach ($doctors as $var) {

						?>
						<div class="card">
							<div class="card-header">
								<a class="card-link" data-toggle="collapse" href="<?php echo "#collapse".$count ?>">
									<?php $res1="SELECT * FROM staff WHERE Staff_Id='$var'";
                  $result1=mysqli_query($conn,$res1);
                  $row1=mysqli_fetch_assoc($result1);
                  $res3="SELECT * FROM d_follower WHERE p_id='$p_id' AND doctor_id='$var'";
                                    $result3=mysqli_query($conn,$res3);
                                    $row3=mysqli_fetch_assoc($result3);
                                    $followers=[];
                                    $followers=explode(',', $row3['df_id']);
                  echo $row1['Name'];
                  ?>
								</a>
							</div>
							<div id="<?php echo "collapse".$count; ?>" class="collapse" data-parent="#accordion">
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<?php $count1=1; 
										foreach ($doctors as $var1) {

											if ($var1!=$var) {
												$res2="SELECT * FROM staff WHERE Staff_Id='$var1'";
												$result2=mysqli_query($conn,$res2);
												$row2=mysqli_fetch_assoc($result2);


												?>
												<li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                          <?php foreach ($followers as $var2) {
                            if($var1==$var2){
                           ?>
                            <input type="checkbox" class="custom-control-input" id="<?php echo "example".$count1.$count; ?>" name="<?php echo "example".$count1.$count; ?>" value="<?php echo $var.",".$row2['Staff_Id']; ?>" onclick="getVote(this.value)" checked>
                            <?php }else{ ?>
                              <input type="checkbox" class="custom-control-input" id="<?php echo "example".$count1.$count; ?>" name="<?php echo "example".$count1.$count; ?>" value="<?php echo $var.",".$row2['Staff_Id']; ?>" onclick="getVote(this.value)">
                              <?php }} ?>
                            <label class="custom-control-label" for="<?php echo "example".$count1.$count; ?>"><?php echo $row2['Name']; ?></label>
                          </div>
                        </li>
												<?php 
												$count1=$count1+1;}
											}
											?>
										</ul>
									</div>
								</div>
							</div>
							<?php 
							$count=$count+1;
						}
						?>
					</div>
                 
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
    <script>
			function getVote(int) {
				if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById("akm").innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","add/patientprofileadd.php?id="+int,true);
  xmlhttp.send();
}


// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
$('.collapse').collapse();

</script>
<script type="text/javascript">
	 // Defining a function to display error message
  function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}




// Defining a function to validate form 
function validateProfileForm() {
    // Retrieving the values of form elements 
    var name = document.EditProfileForm.name.value;
    var email = document.EditProfileForm.email.value;
   
    var phone = document.EditProfileForm.phone.value;
    
    var text = document.EditProfileForm.drug_allergy.value;
    
    
alert('akm');

    // Defining error variables with a default value
    var nameErr = emailErr = passwordErr = phoneErr = numberErr = textErr = true;
    

    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^(([A-Za-z]{1,10})?\s)+([A-Za-z]{1,10})?$/;         
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }


    


    // Validate mobile number
    if(phone == "") {
        printError("phoneErr", "Please enter your mobile number");
    } else {
          var regex = /^[0-9]{11}$/;
        if(regex.test(phone) === false) {
            printError("phoneErr", "Please enter a valid 11 digit mobile number");
        } else{
            printError("phoneErr", "");
            phoneErr = false;
        }
    }

    
     // Validate text

    if(text == "") {
        printError("textErr", "Please enter text");
    } else {
         var regex=/^[a-zA-Z0-9!@#\$%\^&\*]{1,}$/;
         if(regex.test(text) === false)
         {
              printError("textErr","Please enter text..");

         }
         else{
          printError("textErr","");
          textErr = false;
         }
            printError("textErr", "");
            textErr = false;
        }
    
    if((nameErr || emailErr  || phoneErr || textErr) == true) {
      alert('hlmo');
       return false;
    } else
        {
          alert("true");
          return true;
        }
};

 
</script>
  </body>
</html>


/////////////////////end////////////////////////