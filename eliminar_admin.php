<?php  

if (!isset($_GET["iden"])) {

    header('Location: index_admin.php?mensaje=Error');
    exit;  
}

include_once "./Conexion/conexion.php";

$codigo = $_GET['iden'];

$sentencia = $bd->prepare("DELETE FROM usuarios WHERE Identificacion = ?;");

$resultado = $sentencia->execute([$codigo]);


if ($resultado === TRUE) {
    header('Location: index_admin.php?mensaje=Eliminado');
} else {
    header('Location: index_admin.php?mensaje=Error');
}


?>