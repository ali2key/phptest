<!DOCTYPE html>
<html>
	<body>
		<form action="zadanie2.php" method="post">
		<h2>Kalkulator BMI</h2>
		
		<label> Podaj swoją wagę (kg): <input type="txt" name="waga" /></label><br>
		<label> Podaj swój wzrost: <input type="txt" name="wzrost" /></label>
		<input type="submit" value="przeslij dane" /><br>
	</body>
</html>


<?php
$waga = $_POST ['waga'];
$wzrost = $_POST ['wzrost'];
$a = 100;
$BMI = ($waga)/(($wzrost*$wzrost)/($a*$a));



if($BMI <=18.5){
echo"Jestes za CHUDY ";
}

else if($BMI >25){
echo"Jesteś za GRUBY ";		
}

echo "Twoje BMi wynosi: $BMI";
		




?>