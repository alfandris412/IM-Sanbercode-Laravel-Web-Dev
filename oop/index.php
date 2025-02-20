<?php
    require_once("animal.php");

    require_once("frog.php");
    $sheep = new animal("shaun");

    require_once("ape.php");
$sheep = new animal("shaun");

echo "name :" .$sheep->name . "<br>"; 
echo "legs : ".$sheep->legs .  "<br>"; 
echo  "cold blooded: " .$sheep->cold_blooded . "<br><br>";

$kodok = new frog("buduk");
$kodok->yell("Hop Hop");


$monyet = new apee("kera sakti");
$monyet->ape("Auooo");
?>

