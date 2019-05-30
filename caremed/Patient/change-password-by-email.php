<?php
$messageSuccess = "";
$messageError = "";
include('include/config.php');
if(isset($_GET['chPass']))
{
    $chPass = $_GET['chPass'];
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['password']) && ($_POST['password'] == $_POST['cpassword']))
        {
            $password = $_POST['password'];

            if (strlen($_POST["password"]) <= 8 || !preg_match("#[0-9]+#",$password) || !preg_match("#[A-Z]+#",$password) || !preg_match("#[a-z]+#",$password)) 
            {
                $messageError = "Your Password Must Contain At Least 8 Characters, 1 Number, 1 Capital Letter, 1 Lowercase Letter!";
            }
            else
            {
                $password = md5($password);
                $query = "SELECT * from users WHERE vkey = '$chPass' LIMIT 1";
                $result = mysqli_query($con, $query);
                if(mysqli_num_rows($result) == 1)
                {
                    $update = mysqli_query($con,"UPDATE users SET password = '$password' WHERE vkey = '$chPass' LIMIT 1");
                    if($update)
                    {
                         $messageSuccess = "Your password has been changed";
                    }
                }
                else
                {
                    $messageError =  "Cannot changed";
                }
            }
        }
        else
        {
            $messageError = "Your password don't match";
        }
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
        <div class='login-form col-md-4 offset-md-4'>
        <div class='jumbotron' style='margin-top:20px; padding-top:20px; padding-bottom:30px;'>
<h3 align='center'>Change your password</h3>
<span style="color:green;font-weight:bold;"><?php echo $messageSuccess; ?></span>
<span style="color:red;"><?php echo $messageError; ?></span>
    </br>
    <form method='post'>
    <div class='form-group'>
    <label>New password : </label>
    <input type='password' name='password' class='form-control' placeholder='Enter a new password' required>
    </br>
    <div class='form-group'>
    <label>Re-enter password : </label>
    <input type='password' name='cpassword' class='form-control' placeholder='Repeat new password' required>
    </br>
    </div>
    <div class="button home_button">
	<input type="submit" name="submit" value="Reset Password" class="btn btn-info" role="button"/>					
	</div> 
       </div>
 

    </form>
    </div>
    </div>
    </div>

</body>
</html>