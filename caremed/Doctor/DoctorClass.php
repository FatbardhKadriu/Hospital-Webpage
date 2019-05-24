<?php
class DoctorClass
{
    public $title = "Doctors";

    public function showTitle()
    {
        echo "<title> $this->title</title>";
    }

    public function showCSS()
    {
        ?>
        <link href="DoctorClassCSS.css" type="text/css" rel="stylesheet" media="screen"/>
        <?php
    }
/*    public function showHeader()
    {
        include("header.php");
    }
*/
    public function showMain()
    {
        include("DocHTML.html");   
    }
    
/*    public function showFooter()
    {
        include("footer.php");
    }
*/
    public function showContent()
    {
        echo "<html> <head>";
        $this->showTitle();
        $this->showCSS();

        echo "</head><body>";
//        $this->showHeader();
        $this->showMain();
//        $this->showFooter();

        echo "</body></html>";
        
    }
}

?>