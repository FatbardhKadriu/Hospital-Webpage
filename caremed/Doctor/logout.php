<?php
session_start();
include('include/config.php');
$_SESSION['dlogin']=="";
date_default_timezone_set('Europe/Amsterdam');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE doctorslog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
?>
<script language="javascript">
document.location="index.php";
</script>
