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
						$passwordErr = "Your Password Must Contain At Least 8 Characters, 1 Number, 1 Capital Letter, 1 Lowercase Letter!";
				}
				else{
					
						$fname = mysqli_real_escape_string($con, $fname);
						$address = mysqli_real_escape_string($con, $address);
						$city = mysqli_real_escape_string($con, $city);
						$gender = mysqli_real_escape_string($con, $gender);
						$email = mysqli_real_escape_string($con, $email);
						$password = mysqli_real_escape_string($con, $password);
						$cpassword = mysqli_real_escape_string($con, $cpassword);

						$vkey = md5(time().$fname);

						$password = md5($password);

					$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password,vkey) values('$fname','$address','$city','$gender','$email','$password','$vkey')");
					if($query)
					{
						  $host = $_SERVER['HTTP_HOST'];
						  $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
						  $extra="./verify.php";		
						// header("Location: http://$host$uri/$extra");
							$to = $email;
							$subject = "Email Verification";
							$message = "<a href='http://$host$uri$extra?vkey=$vkey'>Register Account</a>";
							$headers = "From: caremed@gmail.com \r\n";
							$headers .= "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							mail($to,$subject,$message,$headers);
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
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		
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
		.button{
			display:inline;
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
								<input type="text" class="form-control" name="full_name" value="<?= isset($_POST['full_name']) ? $_POST['full_name'] : ''; ?>" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" value="<?= isset($_POST['address']) ? $_POST['address'] : ''; ?>" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city"  value="<?= isset($_POST['city']) ? $_POST['city'] : ''; ?>" placeholder="City" required>
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender"
									<?php if (isset($gender) && $gender =="female") echo "checked";?> value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender"
									 <?php if (isset($gender) && $gender =="male") echo "checked";?> value="male">
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
									<input type="email" class="form-control" title="Email" name="email" id="email" onBlur="userAvailability()" 
									 value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Email" required>
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
function userAvailability() {
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);},
error:function (){}
});
}
</script>	
	</body>
	<!-- end: BODY -->
</html>