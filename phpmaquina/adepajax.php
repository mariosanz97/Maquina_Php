
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
$cantidad = $_GET['cantidad'];


$sql = "INSERT INTO `maquinr`.`deposito` (`nombre`, `cantidad`) VALUES ('" . $nombre . "', '" . $cantidad . "')";

if ($conn->query ( $sql ) === TRUE) {
	echo "Insert realizado";
} else {
	echo "NO funciona";
}

?> 