<!DOCTYPE html>
<html>
	<body>
		<form action="zadanie6.php" method="post">
		<h2>Obliczanie czy trókąt jest Pitagorejski</h2>
		
		<label> Podaj bok a: <input type="txt" name="a" /></label><br><br>
		
		<label> Podaj bok b: <input type="txt" name="b" /></label><br><br>
		
		<label> Podaj bok c: <input type="txt" name="c" /></label><br><br>
		
		<input type="submit" value="Prześlij dane" /><br>
	</body>
</html>

<?php
$a = $_POST ['a'];
$b = $_POST ['b'];
$c = $_POST ['c'];

if ($a**2 + $b**2 == $c**2){
	echo "Trójkat jest pitagorejski";
}
elseif($b**2 + $c**2 == $a**2){
	echo "Trójkat jest pitagorejski";
}	
elseif($a**2 + $c**2 == $b**2){
	echo "Trójkat jest pitagorejski";
}	
else{
	echo"Trójkat nie jest pitagorejski";
}	

?>