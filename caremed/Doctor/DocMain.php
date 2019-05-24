<?php
session_start();

include('include/config.php');
$query = "Select * from doctors";

$result = mysqli_query($con,$query);

?>
<html>
    <head>
    <style>
 body{
            background:url('../images/dna.jpg');    

    }
#divContainer{
        margin-top:200px;
        margin-left:25px; 
        margin-bottom:800px;   
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
        img.setAttribute("src", "../images/MaleDoctor.jpg");
        var h3 = document.createElement("h3");
        h3.appendChild(document.createTextNode("<?php echo $num['doctorName']?>"));
        div.appendChild(img);
        div.appendChild(h3);
        document.getElementById("divContainer").appendChild(div);
    <?php
    }?>
 
</script>

        


</body>
</html>