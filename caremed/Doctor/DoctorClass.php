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
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="../styles/responsive.css">
        <?php
    }
    public function showHeader()
    {
        include("../header.php");
    }

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
        $this->showHeader();
        $this->showMain();
//        $this->showFooter();

        echo "</body></html>";
        
    }
}

?>