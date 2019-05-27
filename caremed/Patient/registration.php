<?php
session_start();
include_once('include/config.php');
$passwordErr = "";
$cpasswordErr = "";
function test_input($data) {
	$data = stripslashes($data);
	$data = ltrim($data);
	$data  = trim($data, '/\\');
    $data = htmlspecialchars($data);
    return $data;
  }
if(isset($_POST['submit']))
{
	$fname=test_input($_POST['full_name']);
	$address=test_input($_POST['address']);
	$city=test_input($_POST['city']);
	$gender=test_input($_POST['gender']);
	$email=test_input($_POST['email']);
	$password=test_input($_POST['password']);
	$cpassword=test_input($_POST['cpassword']);
	$_SESSION['fullName'] = $fname;

	if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        if (strlen($_POST["password"]) <= 8 || !preg_match("#[0-9]+#",$password) || !preg_match("#[A-Z]+#",$password) || !preg_match("#[a-z]+#",$password)) {
						$passwordErr = "Your Password Must Contain At Least 8 Characters, 1 Number, 1Capital Letter, 1 Lowercase Letter!";
				}
				else{
					$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
					if($query)
					{
						header('location: registrationSuccessful.php');
					}

				}
		}
		else{
			$passwordErr = "Your password don't match";
		}

}
?>



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
			background:url(caremed.jpg);
			background-repeat:no-repeat;
			margin-left:20px;
			background-size:cover;
			background-attachment: fixed;
			background-position:cover;
		}
		.form-login{
			background-color: transparent !important;

		}
		</style>

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<h1 style="color: #000000; font-size: 45px;font-weight:bold;">Patient Registration</h1>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post">
						<fieldset>
							<legend>
								Sign Up
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<span style="color:red;">
							<?php
							echo $passwordErr;
							?>
							</span>
							<div class="form-group">
								<span class="input-icon">
									
    <input type="password" id="password" class="form-control" name="password" placeholder="Password"  required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<span style="color:red;">
							<?php
							echo $cpasswordErr;
							?>
							</span>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							
							
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="user-login.php">
										Sign-in
									</a>
								</p><br/>
								<button type="submit" style="width:120px;font-size:18px;padding:8px;" class="btn btn-primary center-block" id="submit" name="submit">
									Sign up <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> CAREMED</span>. <span>All rights reserved</span>
					</div>

				</div>

			</div>
		</div>
		<div class="button home_button">
			<a href="../index.php" style="font-size: 35px;
			 position: absolute; left: 30px; top: 20px; " 
				class="button button1" role="button">Home</a>					
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
	</body>
	<!-- end: BODY -->
</html>