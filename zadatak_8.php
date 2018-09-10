<?php 

$ime = "Endrina";
$prezime = "Eskic";

$prvo_slovo_imena = substr($ime, 0, 1);

$slova_prezimena = substr($prezime, 0, 1);

for($i=1;$i<5;$i++){
	$slova_prezimena .= substr($prezime, $i, 1);
}

echo strtolower($prvo_slovo_imena . $slova_prezimena);

?>