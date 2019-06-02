<?php

$db_host = $_ENV['DB_HOST'];
$db_username = $_ENV['DB_USERNAME'];
$db_password = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_PROJECTNAME'];

try {
    $con = mysqli_connect($db_host,$db_username,$db_password,$db_name);
}catch (Exception $e){
    $error = $e->getMessage();
    echo $error;
}
?>