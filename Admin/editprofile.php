
<?php 
include('connect.php');
$adminid=$_SESSION['Admin_Id'];
$res="SELECT * FROM staff WHERE Staff_Id='$adminid'";
$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
?>
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
  <li><a href="equipment.php"> <i class="icon-form"></i>Equipment</a></li>
  <li><a href="car.php"> <i class="fa fa-bar-chart"></i>Ambulance</a></li>
  <li class="active"><a href="editprofile.php"> <i class="fa fa-bar-chart"></i>Edit Profile</a></li>
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

<div class="tab-pane container active">
  <div class="row">
    <div class="col">
      <div class="card">

        <div class="card-body">
          <h3>Edit Profile</h3>
          <form action="adminedit.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value=" <?php echo $row['Name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" value=" <?php echo $row['Birthdate'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value=" <?php echo $row['Phone'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value=" <?php echo $row['Email'] ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address"><?php echo $row['Address'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="profile_pic">Profile Picture:</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="photo">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <input type="hidden" name="adminid" value="<?php echo $adminid; ?>">
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div> 

          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h3>Change Password</h3>
              <form action="admincp.php" method="post">
                <div class="form-group">
                  <label for="current_password">Current Password:</label>
                  <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Current Password">
                </div>
                <div class="form-group">
                  <label for="change_password">Change Password:</label>
                  <input type="password" class="form-control" id="change_password" name="change_password" placeholder="Change Password">
                </div>
                <div class="form-group">
                  <label for="confirm_password">Confirm Password:</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password">
                </div>
                <input type="hidden" name="adminid" value="<?php echo $adminid ?>">
                <button type="submit" class="btn btn-success">Change Password</button>
              </form>
            </div>
          </div>

          <div class="card" style="margin: 15px 0">
            <div class="card-body">
              <h3>Forget Password</h3>
              <form action="sendpassword.php" name="ForgetPasswordForm" method="post">
                <div class="form-group">
                  <label for="fg_email">Your Current Email:</label>
                  <input type="email" class="form-control" id="fg_email" name="fg_email" placeholder="Enter Current Email">
                </div>
                <input type="hidden" name="adminid" value="<?php echo $adminid ?>">
                <button type="submit" class="btn btn-success">Send</button>
              </form>
            </div>
          </div>
        </div>          
      </div>
    </div>

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


    </body>
    </html>

