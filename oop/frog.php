<?php
require_once("animal.php");

class frog extends animal {
    public function yell($sound){ echo "name :" .$this->name . "<br>"; 
        echo "legs : ".$this->legs .  "<br>"; 
        echo  "cold blooded: " .$this->cold_blooded . "<br>";

        echo "Yell : " .$sound . " <BR> <BR>";
    }
}
?>