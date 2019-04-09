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
.button2 {background-color: #283290;} /* Blue */
.button a:hover
{
  color: #20d34a;
}
button a{
  color: white;
  text-decoration: none;
}

    </style>
</head>
<body>
        <button class="button button2"><a href="../index.html">HOME</a></button>
<div class="container">  
  <form id="contact" action="Create_an_account.php" method="post">
    <h3 style="color:#4682B4; text-align: center">Create an account</h3>
    
    <fieldset>
      <input placeholder="First Name" type="text" name="Patient_Name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Last Name" type="text" name="Patient_Surname" tabindex="2" required>
    </fieldset>
    <fieldset>
    <fieldset>
        <input placeholder="Username" type="text" name="Patient_Username" tabindex="1" required autofo
    </fieldset>
    <fieldset>
     <input id="pass" placeholder="Password" type="password" name="Patient_Password" tabindex="2" required>
    </fieldset>
      <input placeholder="Phone Number" type="tel" name="Patient_Phone_No" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" name="Patient_Email" tabindex="4" >
    </fieldset>
    <fieldset>
      <input id="datecss" placeholder="Date of Birth (MM/DD/YY)" type="date" name="Patient_Date_Of_Birth" tabindex="5" required>
    </fieldset>
    <fieldset>
    Gender   
      <input type="radio" name="Patient_Male" value="male" required>Male</input>
      <input type="radio" name="Patient_Male" value="female" required>Female</input>
    </fieldset>
    <fieldset>
     <input placeholder="Street Name" type="text" name="Patient_Street_Name" tabindex="7" >
    </fieldset>
    <fieldset>
      <input placeholder="City" type="text" name="Patient_City" tabindex="8">
    </fieldset>
</label><select class="label1" name="country" id="country"><option value="united-states">United States</option>
    <option value="afghanistan">Afghanistan</option><option value="aland-islands">Aland Islands</option>
    <option value="albania">Albania</option><option value="algeria">Algeria</option><option value="american-samoa">American Samoa</option>
    <option value="andorra">Andorra</option><option value="angola">Angola</option><option value="anguilla">Anguilla</option>
    <option value="antarctica">Antarctica</option><option value="antigua-and-barbuda">Antigua and Barbuda</option>
    <option value="argentina">Argentina</option><option value="armenia">Armenia</option><option value="aruba">Aruba</option>
    <option value="australia">Australia</option><option value="austria">Austria</option><option value="azerbaijan">Azerbaijan</option>
    <option value="bahamas">Bahamas</option><option value="bahrain">Bahrain</option><option value="bangladesh">Bangladesh</option>
    <option value="barbados">Barbados</option><option value="belarus">Belarus</option><option value="belgium">Belgium</option>
    <option value="belize">Belize</option><option value="benin">Benin</option><option value="bermuda">Bermuda</option>
    <option value="bhutan">Bhutan</option><option value="bolivia">Bolivia</option>
    <option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option>
    <option value="botswana">Botswana</option><option value="bouvet-island">Bouvet Island</option><option value="brazil">Brazil</option>
    <option value="british-indian-ocean-territory">British Indian Ocean Territory</option>
    <option value="brunei-darussalam">Brunei Darussalam</option>
    <option value="bulgaria">Bulgaria</option><option value="burkina-faso">Burkina Faso</option><option value="burundi">Burundi</option>
    <option value="cambodia">Cambodia</option><option value="cameroon">Cameroon</option>
    <option value="canada">Canada</option><option value="cape-verde">Cape Verde</option><option value="cayman-islands">Cayman Islands</option>
    </select></label>
    <fieldset style="margin-top : 15px">
    <input type="submit" name="submit" value="Create an account"/>
    </fieldset>

  </form>
</div>
</body>
</html>