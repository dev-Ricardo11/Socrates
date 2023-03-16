<?php  

if (!isset($_POST['ident'])) {
    header('Location: Index_admin.php?mensaje=error');

}

include_once "./Conexion/conexion.php";

$Ident = $_POST['ident'];
$identidad = $_POST['txtIdentificacion'];
$Nomb = $_POST['txtNombre'];
$Apell = $_POST['txtApellidos'];
$ussua= $_POST['txtUsuario'];
$clavve = $_POST['txtClave'];
$perfil = $_POST["txtPerfil"];

$sentencia = $bd->prepare("UPDATE usuarios SET Nombre = ?, Apellidos = ?, Usuario = ?, Clave = ?, Perfil = ? WHERE Identificacion = ?;");
$resultado = $sentencia->execute([$Nomb, $Apell, $ussua, $clavve, $perfil, $Ident]);



if ($Resultado === TRUE) {
    header('Location: index_admin.php?mensaje=Error');
} else {
    header("Location: index_admin.php?mensaje=Modificado");
    exit;
}

?>