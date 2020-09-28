<!DOCTYPE html>
<html>
	<body>
	
	<h3>Witaj w kalkulatorze!</h3>
		<form action="zadanie1.php" method="post">
			<label> Podaj pierwsza liczbe: <input type="number" name="liczba1" />
			</label><br><br />
			
			<label> Podaj druga liczbe: <input type="number" name="liczba2" />
			</label><br><br />
			
			<label for=""znak> Wybierz znak:</label>
			<select id="znak" name="znak">
				<option value="mnozenie">Mnożenie</option>
				<option value="dzielenie">Dzielenie</option>
				<option value="dodawanie">Dodawanie</option>
				<option value="odejmowanie">Odejmowanie</option>
			</select>
			
			
			<input type="submit" value="wyslij" />
		</form>
	</body>
</html>

<?php      
$a = $_POST ['liczba1'];
$b = $_POST ['liczba2'];
$znak = $_POST ['znak'];


switch($znak){
	case 'mnozenie':
		$wynik =($a * $b);
	break;
	case 'dzielenie':
		$wynik =($a / $b);
	break;
	case 'dodawanie':
		$wynik =($a + $b);
	break;
	case 'odejmowanie':
		$wynik =($a - $b);
	break;
}
	echo "Wynik wynosi: $wynik";
		
?>