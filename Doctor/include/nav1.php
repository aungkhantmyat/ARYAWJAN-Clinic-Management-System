<?php 

$doctor_id=$_SESSION['doctor_id'];
$resn1="SELECT * FROM staff WHERE Staff_Id='$doctor_id'";
$resultn1=mysqli_query($conn,$resn1);
$rown1=mysqli_fetch_assoc($resultn1); 
 ?>
<!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <a href=""> <img src="covers/<?php echo $rown1['Photo'] ?>" alt="person" class="img-fluid rounded-circle"></a>
           
            <h2 class="h5"><?php echo $rown1['Name']; ?></h2><span>Doctor</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="#" class="brand-small text-center"> <strong><i class="fa fa-hospital-o" style="font-size:36px;"></i></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>