<html>
    <head>
        <title>OOP</title>
    </head>

    <link rel="stylesheet" href="style.css" type="text/css";
    <body>
<?php


class Doctor
{
    private $name;

    public function __construct($name)
    {
        echo ("The doctor's name is : $name");
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    //DESTRUKTORI********************
    // public function __destruct()
    // {
    //     echo 'Destruction of the object!';
    // }


}

$doc1 = new Doctor("Doctor1<br/>");

echo $doc1->get_name();

?>

<script type="text/javascript">
function myFunction()
{
    document.getElementById("demo").innerHTML = "<?php echo "Now the doctor's name is :".$doc1->set_name("Doctor2");	
                                                            echo $doc1->get_name();?>";
}
</script>
<button class="DocNameBtn" type="button" onclick="myFunction()">See Doctor's Name: </button>

<p id="demo"></p>

</body>
</html>