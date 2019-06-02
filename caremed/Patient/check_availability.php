<?php 
require_once("include/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$result =mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
		$count=mysqli_num_rows($result);
	if($count>0)
	{	
	echo "<span style='color:red'> Email already exists .</span>";
	echo "<script>$('#submit').prop('disabled',true);</script>";
	} 
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo "<span style='color:red'>Please enter a valid email address.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	}
	else
	{
		echo "<span style='color:green'> Email available for Registration.</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}


?>
