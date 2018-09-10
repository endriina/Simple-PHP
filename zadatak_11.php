<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zadatak 11</title>
</head>

<body>
<p>Računanje dva broja:</p>
<?php 
if(isset($_POST["submit"])){
	
	switch($_POST["operacija"]){
		case "+";
			$rezultat = $_POST["broj_prvi"] + $_POST["broj_drugi"];
		break;
		case "-";
			$rezultat = $_POST["broj_prvi"] - $_POST["broj_drugi"];
		break;
		case "/";
			$rezultat = $_POST["broj_prvi"] / $_POST["broj_drugi"];
		break;
		case "*";
			$rezultat = $_POST["broj_prvi"] * $_POST["broj_drugi"];
		break;
	}
	
	echo "<h1>" . $_POST["broj_prvi"] . " " . $_POST["operacija"] . " " . $_POST["broj_drugi"] . " = " . $rezultat . "</h1>";
}else{
?>
<form id="form1" name="form1" method="post" action="">
  <label>
    <input type="text" name="broj_prvi" id="broj_prvi" />
  </label>
  <label>
    <select name="operacija" id="operacija">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>
      <option value="*">*</option>
    </select>
  </label>
  <br>
  <br>
<label>
  <input type="text" name="broj_drugi" id="broj_drugi" />
</label>
<input type="submit" name="submit" id="submit" value="Izračunaj" />
</form>
<?php 
}
?>
<p>&nbsp;</p>
</body>
</html>