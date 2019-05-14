<?php
session_start();

require_once('config.php');
$conn = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($conn, $db_name);

if(isset($_POST['submit']))
{
    $Patient_FullName = $_POST['Patient_fullName'];
    $Patient_Username = $_POST['Patient_Username'];
    $Patient_Password = md5($_POST['Patient_Password']);
    $Patient_Email = $_POST['Patient_Email'];
    $Patient_Adress = $_POST['Patient_Adress'];
    $Patient_Date_Of_Birth = $_POST['Patient_Date_Of_Birth'];
    $Patient_Gender = $_POST['gender'];
    $Patient_City = $_POST['Patient_City'];
    
    // $file = fopen("Patient/$Patient_FullName.txt","w+") or die("file not open");

    //  fputs($file,"FullName : ".$Patient_FullName."\nUsername : ".$Patient_Username."\nPassword : ".$Patient_Password
    //  ."\nEmail : ".$Patient_Email."\nCity : ".$Patient_City."\nAdress : ".$Patient_Adress."\nGender : ".$M) or die("Data not write");

    // fclose($file);


$s = "select * from patient where username = '$Patient_Username'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "<h1>Username already taken</h1>";
}
else{
  $reg="insert into patient(fullName,username,address,city,gender,email,password) values('$Patient_FullName','$Patient_Username','$Patient_Adress','$Patient_City','$Patient_Gender','$Patient_Email','$Patient_Password')";
  mysqli_query($conn, $reg);
  echo "Registration successful";
}
}

?>

<!DOCTYPE  html>
<html>
<head>
    <title>Create an account</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: white;
  background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)),
    url(image.jpg);
    background-size: cover;
    background-position: center;
  
}


.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
  font-size:16px;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 60px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
  background-color: transparent !important;

}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
{
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 3px solid rgb(4, 85, 85)	;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

input[type="submit"]{
  cursor: pointer;
  width: 100%;
  border: none;
  background: #283290;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;}
input[type="submit"]:hover{
    color:#20d34a;
    transition: background-color 0.3s ease-in-out;
}
input[type="submit"]:active{
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);

}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

.label1
{
    padding: 9px;
    width: 351px;
}
#datecss
{
    padding: 8px;
    width: 351px;
}
#select1
{
    padding: 8px;
}
#pass
{
    padding: 8px;
    width:351px;
    margin-top: 10px;
    margin-bottom: 4px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: 1px solid white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #283290;  background-color: transparent !important;
} /* Blue */
.button a:hover
{
  color: #20d34a;
}
button a{
  color: white;
  text-decoration: none;
}
a:hover
{
  color : #20d34a;
}

    </style>
</head>
<body>
        <button class="button button2"><a href="../index.php">HOME</a></button>
<div class="container">  
  <form id="contact" action="Create_an_account.php" method="post">
    <h3 style="color:white; text-align: center">Create an account</h3>
    
    <fieldset>
      <legend>Enter your personal details below:</legend>
      <input placeholder="Full Name" type="text" name="Patient_fullName"  required autofocus>
    </fieldset>
    <fieldset>
     <input placeholder="Adress" type="text" name="Patient_Adress"  >
    </fieldset>
    <fieldset>
      <input placeholder="City" type="text" name="Patient_City" >
    </fieldset>
    <fieldset>
      <input id="datecss" placeholder="Date of Birth (MM/DD/YY)" type="date" name="Patient_Date_Of_Birth"  required>
    </fieldset>
    <fieldset>
    Gender   
      <input type="radio" name="gender" value="Male" >Male</input>
      <input type="radio" name="gender" value="Female">Female</input>
    </fieldset>
  
   

    <fieldset>
      <legend>Enter your account details below:</legend>
        <input placeholder="Username" type="text" name="Patient_Username"  required autofo
    </fieldset>
      <fieldset>
      <input placeholder="Email" type="email" name="Patient_Email" >
    </fieldset>
  
    <fieldset>
     <input id="pass" placeholder="Password" type="password" name="Patient_Password" required>
    </fieldset>
    <fieldset>
     <input id="pass" placeholder="Password Again" type="password" name="Patient_CPassword" required>
    </fieldset>
   
    <fieldset style="margin-top : 15px">
    <input type="submit" name="submit" value="Create an account"/>
    </fieldset>
    <div style="text-align:right">
    <p>Do you have an account?</p>
    <p><a href="Login.php">Sign in</a></p>
    </div>

  </form>
</div>
</body>
</html>
