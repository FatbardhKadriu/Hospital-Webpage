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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body>
<center>
    <?php echo $message;?>
</center>
<form method="post">
<label>Password: <input type="password" name="password"/><br/>
<label>Confirm Password: <input type="password" name="cpassword"/><br/>
<input type="submit" value="Change">
</form>
    
</body>
</html>