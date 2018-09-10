<?php 

$ime = "Maša";
$prezime = "Ešćić";

echo $ime . " " . $prezime . "<br>";

$ime = str_replace("š", "s", $ime);

$prezime = str_replace("š", "s", $prezime);

$prezime = str_replace("ć", "c", $prezime);

echo $ime . " " . $prezime;

?>