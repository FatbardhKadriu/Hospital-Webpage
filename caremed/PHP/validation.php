<?php

session_start();

$con = mysqli_connect("localhost", 'root', 'root');

mysqli_select_db($con, 'caremed');
$Patient_Username = $_POST['Patient_Username'];
$Patient_Password = md5($_POST['Patient_Password']);

$s = " select * from patient where username = '$Patient_Username' && password = '$Patient_Password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $Patient_Username;
    header('location: pat.php');
}
else{
    header('location: login.php');
}


?>