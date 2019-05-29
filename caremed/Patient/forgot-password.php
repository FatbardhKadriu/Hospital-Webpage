<?php

if(isset($_POST['email']))
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
            }
    }
    else{
        echo "This email do not exists";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
</head>
<body>
<form method="post">
<label>Email: </label><input type="email" name="email" placeholder="Enter your email"/>
<input type="submit" value="Send"/>
</form>
    
</body>
</html>