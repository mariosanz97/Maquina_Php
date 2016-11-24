
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


$sql = "UPDATE `maquinr`.`dispensador` SET `precio`=".$precio.", `cantidad`=".$cantidad." WHERE `nombre`='".$nombre."';";
//UPDATE `maquinr`.`dispensador` SET  `precio`='23432', `cantidad`='23' WHERE `nombre`='38';

if ($conn->query ( $sql ) === TRUE) {
	echo "Update realizado perfectamente ";
} else {
	echo "Inserte adecuadamente los valores";
}

?> 