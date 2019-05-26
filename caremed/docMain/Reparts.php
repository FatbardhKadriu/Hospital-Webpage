<!DOCTYPE html>
    <head>
        <title>
            Doctor's reparts
        </title>
        <style>
        body
        {
            background: url(../images/doc.jpg);
            background-attachment: fixed;
        }
            .staff{ 
    margin-left: 440px;
    margin-top: 250px; 
    text-align: center;
    width: 700px;
    font-weight:bold;
    letter-spacing: 1px;
    background-color: rgba(0,0,205, 0.9);
    border-radius: 10px;
    border: 1px white solid;
    font-family: cursive;
    color: white;
	}

.staff p{
    margin-top: 0.35em;
	margin-right: 6em;
	margin-bottom: 4em;
	
	font-size: 18px;
	
}
.staff1
{
    margin-top:40px;
    margin-right:-70px;
    font
}

        </style>
    </head>
    <body>

    <div class="staff">
        <div class="staff1">
    <p>
    <?php
        abstract class Staff
        {
            public $type;
            public $name;
            public $repart;

            public function __construct($sType, $sName, $sRepart)
            {
                $this->type = $sType;
                $this->name = $sName;
                $this->repart = $sRepart;
            }

            public static function compare($a, $b)
            {
                if($a->name < $b->name) return -1;
                else if($a->name == $b->name) return 0;
                else return 1;
            }

            public function __toString()
            {
                return "$this->name that is a $this->type works in $this->repart repart!";
            }

        }
    ?>
    <?php
        class Doctor extends Staff
        {
            public function __construct($name)
            {
                parent::__construct("Doctor", $name, "Dermatology");
            }
        }
        class Nurse extends Staff
        {
            public function __construct($name)
            {
                parent::__construct("Nurse", $name, "Stomatology");
            }
        }
        class Janitor extends Staff
        {
            public function __construct($name)
            {
                parent::__construct("Janitor", $name, "Logopedy");
            }
        }
        
        $staff1 = array(
            new Doctor("Fatbardh Gashi"),
            new Nurse("Nurse 1"),
            new Janitor("Janitor 1")
        );

        usort($staff1, array("Staff", "compare"));

        foreach($staff1 as $Staff) echo "$Staff<br>\n";
    
    ?>
    </p>
    </div>
    </div>
    </body>
</html>