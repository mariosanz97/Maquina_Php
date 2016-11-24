
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


$sql = "DELETE FROM `maquinr`.`dispensador` WHERE `nombre`='" . $nombre ."';";

if ($conn->query ( $sql ) === TRUE) {
	echo "<br>Delete realizado perfectamente";
} else {
	echo "Inserte adecuadamente los valores";
}

?> 