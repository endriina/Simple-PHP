<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>


<body>

<form action="" method="post">
	Na put sam krenuo/la <br>
	<input name="datum_start" type="text" size="20" value="<?php echo @$_POST["datum_start"] ?>"> <small>(YYYY-MM-DD HH:MM)</small><br>
	Vratio/la se <br>
	<input name="datum_stop" type="text" size="20" value="<?php echo @$_POST["datum_stop"] ?>"> <small>(YYYY-MM-DD HH:MM)</small><br>
    <input type="submit" name="submit" value="Izračunaj">
</form><br>
<br>


<?php

if(isset($_POST["submit"]) && $_POST["submit"] == "Izračunaj"){

$prvi_datum=strtotime($_POST["datum_start"]);
$drugi_datum=strtotime($_POST["datum_stop"]);
$razlika=$drugi_datum-$prvi_datum;
$broj_sati=$razlika/3600; //3600=sekunde*sati=60*60

echo "Broj sati provedenih na putu:" . $broj_sati . " sati" ."<br>";

$d=$broj_sati/24;

//echo floor($d); //floor zaokružuje na najmanji broj

//zadatak a
$iznos_dnevnice=floor($d)*150;
//echo $iznos_dnevnice;

//zadatak b
$d=$d-floor($d);

if($d>0.5){
	$iznos_dnevnice+=150;
}
echo "Iznos dnevnice:" . $iznos_dnevnice . " kn";





}


?>



</body>
</html>



