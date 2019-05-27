<?php
$message = "";
if(isset($_GET['vkey']))
{
    //Proccess Verification
    $vkey = $_GET['vkey'];

    include('include/config.php');

    $resultSet = mysqli_query($con, "SELECT verified, vkey FROM users WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");

    if(mysqli_num_rows($resultSet) == 1)
    {
        //Validate the Email
        $update = mysqli_query($con, "UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");

        if($update)
        {
            $message = "<h1>Your account has been verified. You can login now.</h1>";
        }
    }else{
        $message =  "<h1>This account invalid or already verified</h1>";
    }
}else{
    die('Something went wrong');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
    
    <style>
    body{
        background:url('assets/images/verified.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment: fixed;
    }
    h1{
        margin-top:550px;
        margin-left:790px;
        font-size:50px;
        color:blue;
    }
    a.button {
    margin-left:1100px;
    background-color:#004C99;
    padding:15px;
    width:70px;
    color:white;
    text-decoration: none;
    color: initial;
}
    </style>
</head>
<body>
<center>
    <?php echo $message;?>
</center>
<a href="user-login.php" class="button">Login</a>
    
</body>
</html>