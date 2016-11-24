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
	//echo "Conexión con BBDD correcta";
?>

	<?php
	$sql = "SELECT * FROM maquinr.deposito";
	
	$result = $conn->query ( $sql );
	if ($result->num_rows > 0) {
		while ( $row = $result->fetch_assoc () ) {
			echo "<div align='center'> De ".$row ['nombre']." hay ".$row ['cantidad']." monedas <br><br></div>";
			
		}
	} else {
		echo "0 results";
	}
	
	?>
	<div align="center">
	<a href="principal.php">Volver a principal</a>
   </div>
 	</body>
</html>