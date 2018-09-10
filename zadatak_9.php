<?php 

$ime = "Endrina";
$prezime = "Eskic";

$zajedno = $ime . " " . $prezime;


for($i=0;$i<strlen($zajedno);$i++){
	echo substr($zajedno, $i, 1). "<br>";
}

?>