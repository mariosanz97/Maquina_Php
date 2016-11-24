
<?php
// Conecto con la BBDD
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "maquinr";
$conn = new mysqli ( $servername, $user, $password, $dbname );

if ($conn->connect_error) {
	die ( "Error: " . $conn->connect_error );
} else
	// echo "Conexión con BBDD correcta";


$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$cantidad = $_GET['cantidad'];


$sql = "INSERT INTO `maquinr`.`dispensador` (`nombre`,`precio`, `cantidad`) VALUES ('" . $nombre . "','" . $precio . "', '" . $cantidad . "')";

if ($conn->query ( $sql ) === TRUE) {
	echo "<br>Insert realizado perfectamente";
} else {
	echo "Inserte adecuadamente los valores";
}

?> 