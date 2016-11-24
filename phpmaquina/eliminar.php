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
	echo "Conexión con BBDD correcta <br>";

?>
	 
	 <div align="center">
		¿Qué producto quieres eliminar? <br>
	</div>
	<form method="post">
	 
		<?php
		
		$sql = "SELECT * FROM maquinr.dispensador";
		
		$result = $conn->query ( $sql );
		if ($result->num_rows > 0) {
			echo "<div align='center'><select name='cursos'>";
			while ( $row = $result->fetch_assoc () ) {
				echo "<div align='center'> <option value='" . $row ['nombre'] . "'> " . $row ['nombre'] . "</option><br><br></div>";
			}
			echo "</select>";
		}
		
		?>
		<input type='submit' name='a' value='Eliminar'>
	</form>
	
	<?php
	if (isset ( $_POST ['a'] )) {
		$sql = "DELETE FROM `maquinr`.`dispensador` WHERE `nombre`= '" . $_POST ['cursos'] . "' ;";
		
		if ($conn->query ( $sql ) === TRUE) {
			echo "PERFE";
		} else {
			echo "NO funciona";
		}
	}
	?>
	<br>
	<br>
	<a href="principal.php">Volver a principal</a>

</body>
</html>