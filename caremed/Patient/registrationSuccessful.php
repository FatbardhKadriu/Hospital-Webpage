<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Patient</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<style>
		body{
			background:url(bg.jpg);
			background-repeat:no-repeat;
			background-size:cover;
			background-position:center;
		}
		.form-login{
			background-color: transparent !important;

		}
        .home_content_inner{
            float:center;
            margin-left:200px;
            margin-top:200px;

        }
		</style>

	</head>

<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
									<?php
    session_start();
    echo "<h1>Welcome ".$_SESSION['fullName']."</h1>";
    echo "<h1>You have successfully registered on CareMed!</h1>";

                                    ?>
										<div class="home_text">
											<p>Welcome to CareMed!</p>
										</div>
										<div class="button home_button">
											<a href="user-login.php">LogIn</a>
										</div>
									</div>
								</div>
							
						</div>
					</div>
				</div>

			</div>

</section>
</body>
</html>