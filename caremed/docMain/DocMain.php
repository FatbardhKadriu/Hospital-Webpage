<?php
session_start();

include('../Doctor/include/config.php');
$query = "Select * from doctors";

$result = mysqli_query($con,$query);

?>
<html>
    <head>
    <style>
 body{
            background:url('../images/m3.jpg');    
            background-attachment: fixed;
            background-size:cover;


    }
#divContainer{
        margin-top:200px;
        margin-left:25px; 
        margin-bottom:850px;   
}
.our-team-main
{
    width:420px;
    height:215px;
    border-bottom:5px #323233 solid;
    background: white;
    text-align:center;
    border-radius:10px;
    overflow:hidden;
    position:relative;
    transition:0.5s;
    margin-bottom:25px;
    float: left;
    margin-left: 50;    
}
.our-team-main img
{
    border-radius:50%;
    margin-bottom:4px;
    margin-top : 15px;
    width: 120px;
}
.DocDiv
{
    width: 300px;
    height: 50px;
    background: #00008B;
    margin-left: 560px;
    margin-bottom: 60px;
    text-align: center;
    padding: 12px;
    color: white;
    border:1px white solid;
}
.DocDiv a
{
    text-decoration: none;
    color:white;
}
.DocDiv:hover
{
    background-color: #0000FF;
}
a.linkalign{
    margin-left:30px;
    font-size:25px;
}
</style>
</head>
<body>
<div id="divContainer">

</div>
        
<script>
    <?php
    while($num = mysqli_fetch_assoc($result))
    {
    ?>
        var div = document.createElement("div");
        div.setAttribute('class','our-team-main');
        var img = document.createElement("img");
        <?php if($num['gender'] == "male")
        {?>
        img.setAttribute("src", "../images/MaleDoctor.jpg");
        <?php
        }elseif($num['gender'] == "female")
        {
            ?>
         img.setAttribute("src", "../images/FemaleDoctor.jpg");
         <?php
        }
        ?>
        var link = document.createElement("a");
        link.appendChild(document.createTextNode("<?php echo $num['doctorName']?>"));
        link.setAttribute('href', "../Doctor/index.php?email=<?php echo $num['docEmail'];?>");
        link.setAttribute('class','linkalign');
        div.appendChild(img);
        div.appendChild(link);
        document.getElementById("divContainer").appendChild(div);
    <?php
    }?>
        
</script>
    
    <div class="DocDiv"><a href="Reparts.php">Show Doctor's Reparts</a></div>
        


</body>
</html>