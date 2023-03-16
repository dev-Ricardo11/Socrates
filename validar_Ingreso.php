<?php 

include ('./Conexion/Conexion2.php');

$usuario = $_POST["txtUsuario"];
$clave = $_POST["txtClave"];

session_start();
$_SESSION['txtUsuario'] = $usuario;


$query = "SELECT * FROM usuarios where Usuario = '$usuario' and Clave = '$clave' ";
$resultado = $conexion->query($query);

$filas = mysqli_fetch_array($resultado);

if ($filas['Perfil'] === 'Administrador') {
    header("location:administrador.php?mensaje=Bienvenido");
} else
if ($filas['Perfil'] === 'Agente') {
    header("location:agente.php?mensaje=Bienvenido");
} else
if ($filas['Perfil'] === 'BackOffice') {
    header("location:BackOffice.php?mensaje=Bienvenido");
} else
if ($filas['Perfil'] === 'Supervisor') {
    header("location:index_super.php?mensaje=Bienvenido");
} else {
    header("Location: index_ingreso.php?mensaje=error");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>