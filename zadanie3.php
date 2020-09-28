<!DOCTYPE html>
<html>
	<body>
		<form action="zadanie3.php" method="post">
			<label> Podaj swój wiek: <input type="number" name="liczba" />
			</label><br><br />
			<input type="submit" value="wyslij" />
		</form>
	</body>
</html>

<?php
$a = $_POST ['liczba'];
if ($a >= 1 and $a <= 5){
	echo "Bobas";
}
else if ($a >= 6 and $a <= 10){
	echo "Dziecko";
}
else if ($a >= 11 and $a <= 15){
	echo "Wieksze dziecko";
}	

else if ($a >= 16 and $a <= 20){
	echo "Mysli, ze jest dorosly" ;
}	

?>