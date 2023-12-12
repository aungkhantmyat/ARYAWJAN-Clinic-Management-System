<?php 
include("config.php");


?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
   

 <script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
 <link rel="stylesheet" type="text/css" href="styles/header.css">

<link rel="stylesheet" type="text/css" href="styles/responsive.css">


 		<link rel="stylesheet" type="text/css" href="styles/style_chukhinkhin.css">
</head>
<body>
<div class="super-container">
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
										<a href="#"><img src="img/logo.png"></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
										<!-- 	<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="makeAppoint.php">English</a></li>
												<li><a href="mmbook.php">မြန်မာ</a></li>
											
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
													<li ><a href="../pharmacy/loginform.php">Login</a></li>
													<li class="active"><a href="makeAppoint.php">Book Appointment</a></li>
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
		</div>
		</header>

<br><br><br><br><br><br><br>


<div class="bg-img" >
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="update_appointment.php" method="post">
							<div class="form-header">
								<h2>Book Appointment</h2>
								</div>	
		
		
		
		<div class="col-md-6">
		<div class="form-group">
		<span class="form-label">Name</span>
		<input type="text" name="name" id="name" class="form-control" 
		value="" placeholder="Enter your name">
		
	</div>
</div>

		
		<div class="col-md-6">
		<div class="form-group">
		<span class="form-label">Primary Phone Number</span>
		<input type="text" name="phone" id="phone_number" class="form-control"
		value="" placeholder="Enter your Phone Number">
				</div>
			
		</div>
	
		
		<div class="col-md-6">
		<div class="form-group">
		<span class="form-label">Email</span>
		<input type="email" name="email" id="email" class="form-control"
		value="" placeholder="Enter your email">
	
</div>
</div>
			
		
		<div class="col-md-6">
		<div class="form-group">
		<span class="form-label">Choose Medical Department</span>
		<select name="department" id="department" onchange="showUser(this.value)" class="custom-select">
			<option value="">-- Choose --</option>
			<?php

			$result = mysqli_query($conn, "SELECT * FROM department");
			while($row = mysqli_fetch_assoc($result)):
				?>
			<option value="<?php echo $row['dep_id'] ?>">
				<?php echo $row['dep_name'] ?>
			</option>
		<?php endwhile; ?>
	</select>

</div>
</div>
	
		
		

				
		
		<div class="col-md-6">
		<div class="form-group">
		<span class="form-label">Choose Doctor</span>
		<div id="txtHint">
			<select name="doctor" id="department" class="custom-select">
			<option value="">-- Choose --</option>
			</div>
	</select></div></div>
	
	<div class="form-group col-md-6">
<span class="form-label">Date</span>
<input type="date" name="date" id="appo_date" value="" class="form-control" onchange="validateDate(this.value)" >
<div id="showvalid "></div></div>
	
		
		<div class="col-md-6">
		<div class="form-group">
		<span class="form-label">Medical Problem</span>
<textarea name="medical_problem" id="medical_problem" class="form-control"></textarea>
	</div>
</div>
	
		


	<div class="form-group col-md-2">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
</div>

</div>
</div>
</div>
</div>

</div>
	

<?php 
include ("footertesting.php");
?>

	
<script>
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
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
function validateDate(str) { 
	var doctor=document.getElementById('doctor').value;
var info=doctor+','+str;
   
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showvalid").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","validateDate.php?q="+info,true);
        xmlhttp.send();
    
}

</script>
</body>
</html>
