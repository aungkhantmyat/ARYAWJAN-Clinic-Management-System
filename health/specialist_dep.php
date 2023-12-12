<?php
include("config.php");

include "myanmar.php";
 

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM staff where Department='$id'");
$result1 = mysqli_query($conn, "SELECT * FROM department WHERE dep_id = '$id'");
$row1 = mysqli_fetch_assoc($result1);

$count=0;

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 <link rel="stylesheet" type="text/css" href="styles/scroll.css">

<link rel="stylesheet" type="text/css" href="styles/test1.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/footercss.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link rel="stylesheet" type="text/css" href="styles/doctorcard.css">
    <style>
  a {color: green;}
  </style>

 </head>
 <body>

 
<div class="super_container">
 <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <form action="#" class="menu_search_form">
                <input type="text" class="menu_search_input" placeholder="Search" required="required">
                <button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        <ul>
            <li class="menu_item"><a href="mainpage.php">Home</a></li>
            <li class="menu_item"><a href="#">Login</a></li>
            <li class="menu_item"><a href="specialist_dir.php">Specialist Directory</a></li>
            <li class="menu_item"><a href="makeAppoint.php">Book Appointment</a></li>
            <li class="menu_item"><a href="AboutUs.php">About Us</a></li>

            <li class="menu_item"><a href="ContactUs.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    

    

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="logo">
                                       <img src="img/logo.png">   
                                    </div>
                                    <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                        <div class="header_top_nav">
                                           <!--  <ul class="d-flex flex-row align-items-center justify-content-start">
                                                 <li><a href="specialist_dep.php">English</a></li>
                                                 <li><a href="specialist_depmyan.php">မြန်မာ</a></li>
                                            </ul> -->
                                        </div>
                                        <div class="header_top_phone">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>091122000000</span>
                                        </div>
                                    </div>
                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_nav" id="header_nav_pin">
                    <div class="header_nav_inner">
                        <div class="header_nav_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                            <nav class="main_nav">
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                    <li><a href="mainpage.php">Home</a></li>
                                                    <li><a href=" ../pharmacy/loginform.php" >Login</a></li>
                                                    <li><a href="makeAppoint.php">Book Appointment</a></li>
                                                    <li><a href="specialist_dir.php">Specialist Directory</a></li>
                                                    <li><a href="AboutUs.php">About Us</a></li>
                                                    
                                                    
                                                    <li><a href="ContactUs.php">Contact Us</a></li>
                                                </ul>
                                            </nav>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
        
        </header><br><br><br><br><br><br><br><br><br>


        <div class="container">
        <h4><?php echo $row1['dep_name']?></h4>
        <div class="row">
        <div class="col-xl-8 "> 
        <div class="row">
            <!-- Team member -->
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="col-xs-8 col-sm-6 col-md-4" style="margin-left: 70px; margin-bottom:50px; ">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip" >
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/doc_1.jpg" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $row['Name']; ?></h4>
                                    <p class="card-text">   
                                    <?php 
                                   $info=$row1['dep_name'];
                                   $infArr=[];
                                   $infArr=explode('/', $info);
                                   foreach ($infArr as $var) {
                                    # code...
                                    echo $var."<br>";
                                }

                                 ?></p>
                                    
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?php echo $row['Name']; ?></h4>
                                    <p class="card-text"><?php echo $row['Education']; ?></p>
                                    <p class="card-text">   
                                    <?php 
                                   $info1=$row['Certification'];
                                   $infArr1=[];
                                   $infArr1=explode('<br>', $info1);
                                   foreach ($infArr1 as $var) {
                                    # code...
                                    echo $var."<br>";
                                }

                                 ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                           
                                               <a href="makeAppoint.php" class="btn btn-success  ">Make Appointment</a>
                                            
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>

            <?php } ?> 
            <!-- ./Team member -->
            </div>
            </div>
          
         
<div class="col-4 d-flex "> 
<h3 class="ttl01">Directory</h3>
   <div style="height:400px;width:400px;border:1px solid #ccc; overflow:auto; margin-top:50px; margin-left:-115px; margin-bottom: 40px;">
    <!-- <div class="card example-1 scrollbar-dusty-grass bordered-dusty-grass " style="width: 300px " > -->
      <div class="card-body ">
            
                 <ul class="list-group" style="list-style: none;" >
    
        <li><a href="specialist_dep.php?id=1"  style="color:black;"> Cardiac Surgeons </a></li><br>
        <li><a href="specialist_dep.php?id=2" style="color:black;"> Cardiologists </a></li><br>
        <li><a href="specialist_dep.php?id=3" style="color:black;">Dermatologists </a></li><br>
        <li><a href="specialist_dep.php?id=4" style="color:black;">Ear, Nose & Throat (ENT) Surgeons </a></li><br>
        <li><a href="specialist_dep.php?id=5" style="color:black;">General Physicians</a></li><br>
        <li><a href="specialist_dep.php?id=6" style="color:black;">General Surgeons</a></li><br>
        <li><a href="specialist_dep.php?id=7" style="color:black;">Gestroenterologists</a></li><br>
        <li><a href="specialist_dep.php?id=8" style="color:black;">Haematologists</a></li><br>
        <li><a href="specialist_dep.php?id=9" style="color:black;">Hepatologists </a></li><br>
        <li><a href="specialist_dep.php?id=10" style="color:black;">Maxillo Facial Surgeons</a></li><br>
        <li><a href="specialist_dep.php?id=11" style="color:black;">Nephrologists</a></li><br>
        <li><a href="specialist_dep.php?id=12" style="color:black;">Neuro Surgeons</a></li><br>
        <li><a href="specialist_dep.php?id=13" style="color:black;">Neurologists</a></li><br>
        <li><a href="specialist_dep.php?id=14" style="color:black;">Nutrition Specialist</a></li><br>
        <li><a href="specialist_dep.php?id=15" style="color:black;">Obstetricians & Gynecologists</a></li><br>
        <li><a href="specialist_dep.php?id=16" style="color:black;">Oncologists</a></li><br>
        <li><a href="specialist_dep.php?id=17" style="color:black;">Orthopaedic Surgeons</a></li><br>
        <li><a href="specialist_dep.php?id=18" style="color:black;">Pediatric Surgeons</a></li><br>
        <li><a href="specialist_dep.php?id=19" style="color:black;">Pediatricians</a></li><br>
        <li><a href="specialist_dep.php?id=20" style="color:black;">Physiatrists</a></li><br>
        <li><a href="specialist_dep.php?id=21" style="color:black;">Psychiatrists</a></li><br>
        <li><a href="specialist_dep.php?id=22" style="color:black;">Radiologists</a></li><br>
        <li><a href="specialist_dep.php?id=23" style="color:black;">Urologists </a></li><br>
        </ul>
  </div>
</div>
</div>
</div>

        </div>  
        
 
<?php
include("footertesting.php");
?>
    
 </div>
 


                   
 	




 </body>
 </html>