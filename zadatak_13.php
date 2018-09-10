<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zadatak 5</title>
</head>

<body>
<?php 

$redova = isset($_GET["r"]) ? $_GET["r"] : 6;
$kolona = isset($_GET["k"]) ? $_GET["k"] : 6;

// Varijanta 1
/*echo "<table cellpadding='0' cellspacing='0'>";

for($i=1;$i<=$redova;$i++){
	echo "<tr>";
	for($j=1;$j<=$kolona;$j++){
		
		echo "<td><img src='slika_" . rand(1,36) . ".jpg'></td>";
	}
	echo "</tr>";
}
*/
// Varijanta 2: bez ponavljanja slika

for($i=1;$i<=36;$i++){
	$slike_arr[] = "slika_" . $i . ".jpg";
}

shuffle($slike_arr);

$counter = 0;
echo "<table cellpadding='0' cellspacing='0'>";

for($i=1;$i<=$redova;$i++){
	echo "<tr>";
	for($j=1;$j<=$kolona;$j++){
		
		echo "<td><img src='slike/" . $slike_arr[$counter] . "'></td>";
		$counter++;
	}
	echo "</tr>";
}


?>
</table>
<p>&nbsp;</p>
</body>
</html>