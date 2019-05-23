<?php
session_start();
echo "<h1>Thank you for your registration ".$_SESSION['fullName']."</h1>";
echo "<h1>Login now!</h1>";

?>
<a href="user-login.php">Login</a>