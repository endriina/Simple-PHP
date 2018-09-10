<?php 


$ime = "Endrina";
$prezime = "Eskic";

echo substr($ime,(strlen($ime)-1),1) . " " . substr($prezime,(strlen($prezime)-1),1);

// ILI JEDNOSTAVNIJE

$duzina_imena = strlen($ime);
$duzina_prezimena = strlen($prezime);

//umanjimo za jedan jer substr počinje od nule
echo "<br><br>";

$duzina_imena = strlen($ime)-1;
$duzina_prezimena = strlen($prezime)-1;

echo substr($ime, $duzina_imena, 1) . " " . substr($prezime, $duzina_prezimena, 1);


?>