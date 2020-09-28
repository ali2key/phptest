<?php

$servername = "localhost";
$username = "maruda";
$password = "user";
$dbname = "zagroda";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Polaczenie sie nie udalo: " .$conn->connect_error);
}

echo "Polaczenie sie udalo";
echo "<br>";

$sql = "SELECT * FROM użytkownicy";
$result = $conn -> query($sql);


if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		
		echo "<br>";
		echo "ID: " .$row['id'];
		echo "<br/>";
		echo "UZYTKOWNIK: " .$row['uzytkownicy'];
		
	}
}
	

?>