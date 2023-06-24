<?php

$conexion = mysqli_connect("localhost", "root", "", "smartuniversity");

?>


<!DOCTYPE html>
<html>

<head>
	<title>mostrar datos</title>
</head>

<?php
function mostrar()
{
	$sql = "SELECT * FROM contacto";
	$result = $this->conn->select($sql);
	$tabla = '<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>';
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$tabla .= '<tr> 
        <td><img src = "' . $row["foto"] . '" class="foto" alt = ""></td>
        <td>' . $row["empresa"] . '</td>
        <td>' . $row["contacto"] . '</td> 
        <td><button class="btn btn-primary" onclick="actualizar(\'' . $row["id"] . '\') "><img src = "imagenes/pen.png" style="max-width: 15px;"</button></td>
        <td><button class="btn btn-outline-primary" onclick="word(\'' . $row["id"] . '\') ">Descargar WORD</button></td>
        </tr>';
		}
	}
	$tabla .= '</tbody> </table>';
	return $tabla;
}
?>


<thead>
	<table class="table">
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>lt</td>
			<td>lg</td>
			
		</tr>
</thead>
<?php
$sql = "SELECT * from lobobicis";
$result = mysqli_query($conexion, $sql);

while ($mostrar = mysqli_fetch_array($result)) {
	?>

	<tr>
		<td>
			<?php echo $mostrar['id'] ?>
		</td>
		<td>
			<?php echo $mostrar['nom'] ?>
		</td>
		<td>
			<?php echo $mostrar['lt'] ?>
		</td>
		<td>
			<?php echo $mostrar['lg'] ?>
		</td>
		
	</tr>
	<?php
}
?>
</table>
</html>