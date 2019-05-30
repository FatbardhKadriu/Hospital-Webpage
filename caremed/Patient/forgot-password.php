<?php

$messageSuccess = "";
$messageError = "";
if(isset($_POST['email']))
{
    if(!empty($_POST['email']))
    {
        $email = $_POST['email'];
        include('include/config.php');
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
        $num = mysqli_num_rows($query);
        $chPass = md5(time().$email);
        if($num > 0)
        {
            $update = mysqli_query($con, "UPDATE users SET vkey = '$chPass' WHERE email = '$email'");
            if($update)
                {
                    $to = $email;
                    $subject = "Password Reset";
                    $message = "<a href='http://localhost/PI18_19_Gr4/caremed/Patient/change-password-by-email.php?chPass=$chPass'>Click here to reset your password</a>";
                    $headers = "From: caremed@gmail.com \r\n";
                    $headers .= "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    mail($to,$subject,$message,$headers);	
                    $messageSuccess = "An email has sent to your gmail";
                }
        }
        else
        {
            $messageError = "This email address do not exists";
        }
    }
    else
    {
        $messageError = "Please enter your email address";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Forgot Password</title>
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
}
<body id='body-bg'>
<div class='container' style='position: relative; margin: auto; align-items: center; margin-left: 40%; margin-top:3%'>
        <div class='login-form col-md-4 offset-md-4' >
        <div class='jumbotron' style='margin-top:20px; padding-top:20px; padding-bottom:30px;'>
<h3 align='center'>Reset your password</h3></br>
<p>An e-mail will be send to you with instruction on how to reset your password.</p>
    </br>
    <form method='post'>
    <div class='form-group' >
    <p style="color:green"><?php echo $messageSuccess?></p>
    <p style="color:red"><?php echo$messageError?></p>
    <label>Email : </label>
    <input type='email' name='email' class='form-control' placeholder='Enter your e-mail address...'>
    </br>
    <div class="button home_button">
    <input type="submit" value="Receive new password by e-mail" class="btn btn-info" role="button"/>
	</div> 
    </div>
    </form>
    </div>
    </div>
    </div>

</body>
</html>