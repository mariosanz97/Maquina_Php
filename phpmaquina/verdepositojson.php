
<?php
	// Conecto con la BBDD
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "maquinr";
$conn = new mysqli ( $servername, $user, $password, $dbname );

if ($conn->connect_error) {
	die ( "Error: " . $conn->connect_error );
} 
		// echo "Conexión con BBDD correcta";

$sql = "SELECT * FROM maquinr.deposito";



$result = $conn->query ( $sql );
if ($result->num_rows > 0) {
	echo "<table style='width:20%'>";
	echo "<th>Nombre</th><th>Cantidad</th>";
	while ( $row = $result->fetch_assoc () ) {
		$arr = array (
			'Nombre' => $row ['nombre'],
			'Cantidad' => $row ['cantidad'] 
			);  

		echo "	<tr onclick='mostrar(this)'>";
		echo " <td>" . json_encode ( $arr ['Nombre'] ) . "</td>";
		echo " <td> " . json_encode ( $arr ['Cantidad'] ) . "</td>";
		echo "</tr>";

			// echo json_encode ($arr['Nombre']);
			// echo json_encode ($arr['Cantidad']);

		
}
		echo " </table>";
	}
		// echo json_encode ($ar);

	
	?>