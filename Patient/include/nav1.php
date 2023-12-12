<?php 

$p_id=$_SESSION['p_id'];
$resn1="SELECT * FROM patient WHERE p_id='$p_id'";
$resultn1=mysqli_query($conn,$resn1);
$rown1=mysqli_fetch_assoc($resultn1); 
 ?>
<!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><a href="patientprofile.php"><img src="covers/<?php echo $rown1['p_photo'] ?>" alt="person" class="img-fluid rounded-circle"></a>
            <h2 class="h5"><?php echo $rown1['p_name']; ?></h2><span>Patient</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="#" class="brand-small text-center text-success"> <strong><i class="fa fa-hospital-o" style="font-size:36px;"></i></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>