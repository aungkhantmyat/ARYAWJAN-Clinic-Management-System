<!DOCTYPE html>
<html>
<head>
   
<title>CONTACT US</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/footercss.css">

<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="styles/responsive.css"> -->
 		

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
              <!--         <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="ContactUs.php">English</a></li>
                        <li><a href="contactusmyan.php">မြန်မာ</a></li>
                      
                      </ul> -->
                    </div>
                    <div class="header_top_phone">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>+34 586 778 8892</span>
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
                          <li><a href="AboutUs.php">About Us</a></li>
                          <li class="active"><a href="ContactUs.php">Contact Us</a></li>
                     
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
    </header><br><br><br><br><br><br><br>
<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-7 contact_col">
					<div class="contact_form_container">
						<div class="contact_title">Get in touch</div>
						<div class="contact_form_container">
							<form action="contactUsAdd.php" method="post" id="contact_form" class="contact_form">
								<input type="text" id="contact_input" class="contact_input" name="name"placeholder="Your Name" required="required">
								<input type="email" id="contact_email" class="contact_input" name="email" placeholder="Your E-mail" required="required">
								<input type="text" id="contact_subject" class="contact_input" name="subject"placeholder="Subject" required="required">
								<textarea class="contact_input contact_textarea" id="contact_textarea" placeholder="Message" name="message" required="required"></textarea>
								<button type="submit" class="contact_button" id="contact_button">Send message</button>
							</form>
						</div>
					</div>
				</div>

				
				<!-- contact info -->
					
			        <div class="col-lg-5">

					<div class="info_form_container">

							<div class="contact_info_list">
							
								<div class="contact_info_title mb-5">Contact Info</div>
								<ul>
									<li><span>Address: </span>No-112,Taw Win Road,Dagon Township</li><br>
									<li><span>Email: </span>Aryawjan@gmail.com</li><br>
									<li><span>Phone: </span>091122000000</li><br>
								</ul>
							
						
						
							
							
							</div>
						
						</div>
						</div>
					</div>
				</div>
			</div>
      <?php
include("footertesting.php");
?>
		</div>

	

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>

<script src="js/contact.js"></script>
<script  src="bootstrap.min.js"></script>
 <script  src="jquery.js"></script>



</body>
</html>