<!DOCTYPE html>
<html>
<head>
<title>Maquina php</title>
</head>
<body bgcolor="#BCF9FB">

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
	
	?>
	<div align="center">
	<form name="nombre" method="post" action="Anadir.php">
		Nombre<br>  <input type="text" name="nombre" value=""><br> 
		Precio<br>  <input type="text" name="precio"><br>
		Cantidad<br><input type="text"name="cantidad"><br> <br>
			 <input type="submit" name="a">
	</form>
</div>
	<br>
	<br>

	
	<?php
	
	
	echo "<br>";
	if (isset ( $_POST ['a'] )) {
	$sql = "INSERT INTO `maquinr`.`dispensador` (`nombre`, `precio`, `cantidad`) VALUES ('" . $_POST ['nombre'] . "', '" . $_POST ['precio'] . "', '" . $_POST ['cantidad'] . "')";
	
	if ($conn->query ( $sql ) === TRUE) {
		echo "PERFE";
	} else {
		echo "NO funciona";
	}
	}
	?>

<div align="center">
<a href="principal.php">Volver a principal</a>
</div>

</body>
</html>