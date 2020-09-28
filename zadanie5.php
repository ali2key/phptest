<!DOCTYPE html>
<html>
	<body>
		<form action="zadanie5.php" method="post">
		<h2>Rok przestępny</h2>
		<label> Podaj rok (rrrr)<input type="txt" name="rok" /></label>
		<input type="submit" value="Prześlij dane" /><br>
	</body>
</html>

<?php
$rok = $_POST ['rok'];

if ($rok%4==0){
	echo $rok." - jest rokiem przestępnym";
}
else{
	echo $rok." - nie jest rokiem przestepnym";
}

?>