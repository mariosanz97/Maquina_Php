
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



	<?php
	$sql = "SELECT * FROM maquinr.dispensador";
	
	$array = array();
	
	$result = $conn->query ( $sql );
	if ($result->num_rows > 0) {
	echo "<table style='width:20%'>";
	echo "<th>Nombre</th><th>Precio</th><th>Cantidad</th>";
	while ( $row = $result->fetch_assoc () ) {
		$arr = array (
			'nombre' => $row ['nombre'],
			'precio' => $row ['precio'] ,
			'cantidad' => $row ['cantidad']
			);  

		echo "	<tr onclick='mostrar(this)'>";
		echo " <td>" . json_encode ( $arr ['nombre'] ) . "</td>";
		echo " <td>" . json_encode ( $arr ['precio'] ) . "</td>";
		echo " <td> " . json_encode ( $arr ['cantidad'] ) . "</td>";
		echo "</tr>";

			// echo json_encode ($arr['Nombre']);
			// echo json_encode ($arr['Cantidad']);

		
}
		echo " </table>";
	}
	
	?>