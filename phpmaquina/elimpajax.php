
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


$sql = "DELETE FROM `maquinr`.`deposito` WHERE `nombre`='" . $nombre ."';";

if ($conn->query ( $sql ) === TRUE) {
	echo "Delete realizado way";
} else {
	echo "NO funciona";
}

?> 