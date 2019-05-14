<?php

session_start();

require_once('config.php');
$con = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($con, $db_name);


$Patient_Username = $_POST['Patient_Username'];
$Patient_Password = md5($_POST['Patient_Password']);

$s = " select * from patient where username = '$Patient_Username' && password = '$Patient_Password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['Patient_Username'] = $Patient_Username;
    header('location: dashboard.php');
}
else{
    header('location: login.php');
}


?>