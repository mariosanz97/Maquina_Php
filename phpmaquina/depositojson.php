<!DOCTYPE html>
<html>
<head>
<title>Maquina php</title>
</head>
<body bgcolor="#BCF9FB"">
	<div align="center">

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

<form method="post">
			<select name="cursos">
				<option value="nada">----</option>
				<option value="10">10 cent</option>
				<option value="20">20 cent</option>
				<option value="50">50 cent</option>
				<option value="100">1 €</option>
				<option value="200">2 €</option>
			</select> <input type="number" name="nota" min="0" value="value="
				<?php $mandag ?>> <input type="submit" name="a">
		</form>


	<?php
	if (isset ( $_POST ['a'] )) {
		$sql = "SELECT valor,cantidad FROM maquinr.deposito where valor = " . $_POST ['cursos'] . " ;";
		
		$result = $conn->query ( $sql );
		if ($result->num_rows > 0) {
			while ( $row = $result->fetch_assoc () ) {
				
				$mandagg = $_POST ['nota'] + $row ['cantidad'];
				$mandag = $row ['valor'];
				
				// echo $mandagg."-";
				// echo $mandag;
				
				$sql = "UPDATE `maquinr`.`deposito` SET `cantidad`=" . $mandagg . " WHERE `valor`=" . $mandag;
				
				if ($conn->query ( $sql ) === TRUE) {
					echo "PERFE";
				} else {
					echo "NO funciona";
				}
			}
		} else {
			echo "0 results";
		}
	}
	
	?>
<a href="principal.php">Volver a principal</a>
	</div>
</body>
</html>