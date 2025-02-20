<?php
require_once("animal.php");

class apee extends animal {
    public $legs = "2";
    public function ape($sound){ echo "name :" .$this->name . "<br>"; 
        echo "legs : ".$this->legs .  "<br>"; 
        echo  "cold blooded: " .$this->cold_blooded . "<br>";

        echo "Yell : " .$sound . " <BR> <BR>";
    }
}
?>