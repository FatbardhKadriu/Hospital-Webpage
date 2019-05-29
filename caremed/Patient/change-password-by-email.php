<?php
$message = "";
include('include/config.php');
if(isset($_GET['chPass']))
{
    $chPass = $_GET['chPass'];
    
    if(isset($_POST['password']))
    {
        $password = $_POST['password'];

        $query = "SELECT * from users WHERE vkey = '$chPass' LIMIT 1";

        $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1)
    {
        $update = mysqli_query($con,"UPDATE users SET password = '$password' WHERE vkey = '$chPass' LIMIT 1");
        if($update)
        {
            $message = "<h1>Your password has been changed</h1>";
        }
    }else{
        $message =  "<h1>Cannot changed</h1>";
    }
}

}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Forgot Password</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
}
<body id='body-bg'>
<div class='container' style='position: relative; margin: auto; align-items: center; margin-left: 40%; margin-top:3%'>
        <div class='login-form col-md-4 offset-md-4'>
        <div class='jumbotron' style='margin-top:20px; padding-top:20px; padding-bottom:30px;'>
<h3 align='center'>Change your password</h3></br>
    </br>
    <form method='post'>
    <div class='form-group'>
    <label>New password : </label>
    <input type='email' name='email' class='form-control' placeholder='Enter a new password'>
    </br>
    <div class='form-group'>
    <label>Re-enter password : </label>
    <input type='email' name='email' class='form-control' placeholder='Repeat new password''>
    </br>
    </div>
    <div class="button home_button">
	<a href="change-password-by-email.php" class="btn btn-info" role="button">Reset password</a>							
	</div> 
       </div>
 

    </form>
    </div>
    </div>
    </div>

</body>
</html>