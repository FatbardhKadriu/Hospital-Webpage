<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Patient</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		
		<style>
		body{
			background:url(0.jpg);
			background-repeat:no-repeat;
			background-size:cover;
			margin-left:-50px;
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
    echo "<h2>Welcome to Caremed ".$_SESSION['fullName']." !</h2>";
    echo "<h1>Thank you for your registration!</h1>";

                                    ?>
										<div class="home_text">
											<p>We have sent a verification email to the address provided!</p>

										</div>
										<div class="button home_button">
										<a href="https://mail.google.com/mail/u/0/" class="btn btn-info" role="button">Go to Gmail</a>
										
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