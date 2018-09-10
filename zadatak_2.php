<?php 

$ime = "Oskar";
$prezime = "Bajs";

$godine = 23;

$razlika = $godine - 18;

if($razlika == 1){
	$padez = "godinu";
}elseif($razlika == 2 || $razlika == 3 || $razlika == 4){	
	$padez = "godine";
}else{	
	$padez = "godina";
}

echo "Imam " . $godine . " što znači da sam punoljetan već " . $razlika . " " . $padez;
?>