<?php 

include_once './Conexion/Conexion2.php';

$tabla="";
$query="SELECT * FROM requerim ORDER BY id";

if(isset($_POST['requerim']))
{
	$q=$conexion->real_escape_string($_POST['requerim']);
	$query="SELECT * FROM requerim WHERE 
		id LIKE '%".$q."%' OR
		producto LIKE '%".$q."%' OR
		servicio LIKE '%".$q."%' OR
		marcacion LIKE '%".$q."%' OR
        identitular LIKE '%".$q."%' OR
		nomtitular LIKE '%".$q."%' OR
		estado LIKE '%".$q."%' OR
		observacionBack LIKE '%".$q."%'";
}

$buscar=$conexion->query($query);
if ($buscar->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID CASO</td>
			<td>SERVICIO</td>
			<td>CUENTA/MIN</td>
			<td>IDENTIFICACION</td>
			<td>NOMBRE TITULAR</td>
			<td>ESTADO</td>
			<td>OBSERVACIONES BACKOFFICE</td>
		</tr>';

	while($filacaso= $buscar->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filacaso['id'].'</td>
			<td>'.$filacaso['producto'].'</td>
			<td>'.$filacaso['servicio'].'</td>
			<td>'.$filacaso['identitular'].'</td>
			<td>'.$filacaso['nomtitular'].'</td>
			<td>'.$filacaso['estado'].'</td>
			<td>'.$filacaso['observacionBack'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;


?>

    </body>
</html>


