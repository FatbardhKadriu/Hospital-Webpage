<!DOCTYPE  html>
<html>
<head>
    <title>Request an Appointment</title>
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
  color: #777;
  background: #283290;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
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

a
{
    text-decoration: none;
}
a:hover
{
  color : #20d34a;
}

#pass
{
    padding: 8px;
    width:351px;
}
.button {
 color: #20d34a; /* Green */
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
.button2 {background-color: #283290;} /* Blue */
.button a:hover
{
  color: #20d34a;
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
button a{
  color: white;
}

    </style>
</head>
<body>
    <button class="button button2"><a href="../index.html">HOME</a></button>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3 style="color:#4682B4; text-align: center">Login</h3>
    
    <fieldset>
      <input placeholder="Username" type="text" name="Patient_Username" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id="pass" placeholder="Password" type="password" name="Patient_Password" tabindex="2" required>
    </fieldset>
   
    <fieldset style="margin-top : 15px">
    <input type="submit" name="submit" value="Login"/>
    </fieldset>
    <div style="text-align:right">
    <p>Don't have an account?</p>
    <p><a href="Create an account.html">Create one</a></p>
    </div>
  </form>
</div>
</body>
</html>