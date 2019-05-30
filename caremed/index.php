<!DOCTYPE html>
<html lang="en">
<head>
<title>CareMed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>

<?php
require("header.php");
?>
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Medicine made with care</h1></div>
										<div class="home_text">
											<p>The CareMed Hospital (CMH) is open to all patients every day and provides fundamental medical care and cutting-edge medicine in a central location in Zurich. We use our superior academic knowledge to treat a wide range of health issues, taking a personal touch and utilizing highly specialized and up-to-date research.</p>
										</div>
										<div class="button home_button">
											<a href="about.php">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	<!-- 3 Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				
				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						
					<i class="fa fa-user-md" style="font-size:48px;color:red"></i><br>
						<div class="box_title">Doctors Login</div>
						<div class="box_text">Log in to your doctor account!</div>
						<div class="button" style='margin-top:10%;'><span><a href="Doctor">Click Here</a></span></div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						
					<i class='fas fa-users' style='font-size:30px;color:red'></i><br>
						<div class="box_title">Patients</div>
						<div class="box_text" style='margin-top:-1%;font-size:13px;'>Dear patients, here you can book appointments to our hospital, but
								first you have to create an account and then use it with your username
								and password!</div>
						<div class="button" style='margin-top:-1%;'><span><a href="Patient/user-login.php">Click Here</a></span></div>
						
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						
					<i class='fas fa-id-card-alt' style='font-size:48px;color:red'></i><br>
						<div class="box_title">Admin Login</div>
						<div class="box_text">Sign in to your admin account!</div>
						<div class="button" style='margin-top:10%;'><span><a href="#">Click Here</a></span></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll" data-image-src="images/departments.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_light"><h2>Our Medical Departments</h2></div>
				</div>
			</div>
			<div class="row departments_row row-md-eq-height">
				
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">plastic surgery</div>
							<div class="dept_subtitle">Dr. James Smith</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">gastroenterology</div>
							<div class="dept_subtitle">Dr. Gunter Roscoe</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">dentistry</div>
							<div class="dept_subtitle">Dr. Maria Williams</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_text">
							<p>Most Common Hospital Departments
Accident and emergency (A&E): Also called Casualty Department, where you're likely to be taken if you have arrived in an ambulance or emergency situation.
Admissions: At the Admitting Department, the patient will be required to provide personal information and sign consent forms before being taken to the hospital unit or ward.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Our Featured Services</h2></div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">Cancer</div>
							<div class="service_text">
								<p>Our team of experts focuses on the diagnosis, assessment and treatment of various types of cancer, as well as your health needs beyond cancer.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_2.svg" alt=""></div>
							<div class="service_title trans_200">Screening Exams</div>
							<div class="service_text">
								<p>We have the latest technology to identify all of your problems.You can trust us.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_3.svg" alt=""></div>
							<div class="service_title trans_200">RMI Services</div>
							<div class="service_text">
								<p>General and advanced techniques to take images of the body, which help your physician diagnose and provide the care you need.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_4.svg" alt=""></div>
							<div class="service_title trans_200">Dentistry</div>
							<div class="service_text">
								<p>Comprehensive care and treatment for all types of tooth conditions to restore and maintain the health of your teeth</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_5.svg" alt=""></div>
							<div class="service_title trans_200">Neonatology</div>
							<div class="service_text">
								<p>Care for individuals with diseases that affect the brain and nervous system.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_6.svg" alt=""></div>
							<div class="service_title trans_200">Biochemistry</div>
							<div class="service_text">
								<p>Care for people with alcohol and other drug addictions. All treatment plans are individualized.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>Do you need relaxation?</h2>
						<div class="button cta_button"><a href="hangman.php">Play a game</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

<?php
require("footer.php");
?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>