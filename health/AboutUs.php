<?php
include('config.php');



$now=date("Y-m-d");
$date=date("2017-01-01");
$date1=strtotime($now);
$date2=strtotime($date);
$diff=$date1-$date2;
$day=floor($diff/86400);
 

 $query="SELECT count(*) AS total FROM patient";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($result);
 

 $query1="SELECT count(*) AS total FROM staff WHERE Type='doctor'";
 $result1=mysqli_query($conn,$query1);
 $row1=mysqli_fetch_assoc($result1);

$query2="SELECT * FROM staff WHERE Type='doctor'";
$result2=mysqli_query($conn,$query2);
?>

<!DOCTYPE html>
<html>
<head>
    
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/footercss.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">



    
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
        <li class="menu_item"><a href="makeAppoint.php">Book Appointment</a></li>
        <li class="menu_item"><a href="specialist_dir.php">Specialist Directory</a></li>
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
                    <!--   <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="AboutUs.php">English</a></li>
                        <li><a href="aboutusmyan.php">မြန်မာ</a></li>
                      
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
                        <li ><a href="mainpage.php">Home</a></li>
                          <li><a href="../pharmacy/loginform.php" >Login</a></li>
                          <li><a href="makeAppoint.php">Book Appointment</a></li>
                          <li><a href="specialist_dir.php">Specialist Directory</a></li>
                          <li class="active"><a href="AboutUs.php">About Us</a></li>
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
    </div>
    </header>

<br><br><br><br><br><br><br>
<div class="container">
      <div class="row">
        <div class="col text-center"><br><br>
          <div class="section_title">A few words about us</div>
          <div class="section_subtitle">To choose from</div>
        </div>
      </div>
      <div class="row about_row row-eq-height">
        <div class="col-lg-4">
          <div class="logo">
            <a href="#">HEALTH<span>+</span></a>  
          </div>
          <div class="about_text_highlight"><br>By realizing and understanding of the local healthcare needs, our clinic has continued to introduce a wide range of medical treatments and services while mindfully bridging the gap by importing and introducing state-of-the-art technologies into the local medical scene.</div>
          <div class="about_text">
            <p>Advanced and quality healthcare services to the citizens through the combined and dedicated hands of the medical and non-medical experts in the field.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about_text_2">
            <p>Our clinic aims to go beyond medical and healthcare services. Emphasis has also been placed on forging and nurturing healthy working relationships with all our trusted partners to ensure growth and mutual benefits. Our clinic prides itself to work with the acknowledgement and understanding that stagnation leads to impossibilities, while being proactive leads to possibilities.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about_image"><img src="images/about_1.jpg" alt=""></div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="button about_button ml-auto mr-auto"><a href="ContactUs.php"><span>call now</span><span>call now</span></a></div>
        </div>
      </div>
    </div>
  </div>

<div class="milestones">
    <div class="container">
      <div class="row">

        <!-- Milestone -->
        <div class="col-lg-4 milestone_col">

          <div class="milestone d-flex flex-row align-items-center justify-content-around">
            <div class="milestone_icon d-flex flex-column align-items-center justify-content-center "><img src="images/icon_7.svg" alt=""></div>
            <div class="milestone_content">
              <div class="milestone_counter" data-end-value="<?php echo $day;?>">0</div>
              <div class="milestone_text">Days since 2017</div>
            </div>
          </div>
        </div>

        <!-- Milestone -->
        <div class="col-lg-4 milestone_col">
          <div class="milestone d-flex flex-row align-items-center justify-content-around">
            <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_6.svg" alt=""></div>
            <div class="milestone_content">
              <div class="milestone_counter" data-end-value="<?php print_r($row['total']); ?>">0</div>
              <div class="milestone_text">Total Patients</div>
            </div>
          </div>
        </div>

        <!-- Milestone -->
        <div class="col-lg-4 milestone_col">
          <div class="milestone d-flex flex-row align-items-center justify-content-around">
            <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_8.svg" alt=""></div>
            <div class="milestone_content">
              <div class="milestone_counter" data-end-value="<?php print_r($row1['total']); ?>">0</div>
              <div class="milestone_text">Amazing doctors</div>
            </div>
            
          </div>
        </div>
        

       </div>
    </div>
  </div>

  </div>

  <!-- CTA -->

  <div class="cta">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
            <div class="cta_content text-xl-left text-center">
              <div class="cta_title">Make an appointment with one of our professional Doctors.</div>
              
            </div>
            <div class="button cta_button ml-xl-auto"><a href="makeAppoint.php"><span>call now</span><span>call now</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--Doctors-->

<div class="doctors">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="section_title">Our Doctors</div>
          <div class="section_subtitle">To choose from</div><br><br>
        </div>
      </div>
      <div class="row dept_row">
        <div class="col">
          <div class="dept_slider_container_outer">
            <div class="dept_slider_container">

              <!-- Slider -->
              <div class="owl-carousel owl-theme dept_slider">
                
                <!-- Slide --><?php while($row2=mysqli_fetch_assoc($result2)){ ?>
                <div class="owl-item dept_item">
                  <div class="dept_image"><img src="covers/<?php echo $row2['Photo']; ?>" alt=""></div><br>
                  <div class="dept_content">
                    <div class="dept_title"><?php echo $row2['Name']; ?></div>
                    <div class="dept_link"><a href="#"><?php echo $row2['Rank']; ?></a></div>
                  </div>
                </div>
                <?php } ?>

                <!-- Slide -->
                <!-- <div class="owl-item dept_item">
                  <div class="dept_image"><img src="images/doc_2.jpg" alt=""></div><br>
                  <div class="dept_content">
                    <div class="dept_title">Cardiologists</div>
                    <div class="dept_link"><a href="#">See More...</a></div>
                  </div>
                </div> -->

                <!-- Slide -->
               <!--  <div class="owl-item dept_item">
                  <div class="dept_image"><img src="images/doc_3.jpg" alt=""></div><br>
                  <div class="dept_content">
                    <div class="dept_title">Dermatologists</div>
                    <div class="dept_link"><a href="#">See More...</a></div>
                  </div>
                </div> -->

                <!-- Slide -->
                <!-- <div class="owl-item dept_item">
                  <div class="dept_image"><img src="images/doc_4.jpg" alt=""></div><br>
                  <div class="dept_content">
                    <div class="dept_title">Haematologists</div>
                    <div class="dept_link"><a href="#">See More...</a></div>
                  </div>
                </div> -->

              </div>
              
            </div>

             

            <!-- doc Slider Nav -->
            <div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>


<div class="row">
        <div class="col">
          <div class="button doctors_button ml-auto mr-auto"><a href="specialist_dir.php"><span>see all doctors</span><span>see all doctors</span></a></div>
        </div>
      </div>
    </div>
  </div>
          
      </div>
            
        </div>
      </div>
    </div>
  </div>
<?php
include("footertesting.php");
?>
  

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
<script src="js/custom.js"></script>




  </body>
  </html>








