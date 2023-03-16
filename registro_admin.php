<?php


if (empty ($_POST["oculto"]) || empty ($_POST["txtIdentificacion"]) || empty ($_POST["txtNombre"]) || empty($_POST["txtApellidos"]) || empty ($_POST["txtUsuario"]) || empty ($_POST["txtClave"]) || empty ($_POST["txtPerfil"])) {
    header('Location: index.php?mensaje=Falta');
    exit;
}

include_once './Conexion/conexion.php';

$Iden = $_POST["txtIdentificacion"];
$nombre = $_POST["txtNombre"];
$Apellidos = $_POST["txtApellidos"];
$Usuario = $_POST['txtUsuario'];
$Clave = $_POST['txtClave'];
$Perfil = $_POST['txtPerfil'];

$sentencia = $bd->prepare("INSERT INTO usuarios(Identificacion, Nombre, Apellidos, Usuario, Clave, Perfil) VALUES (?,?,?,?,?,?);");
$resultado = $sentencia-> execute([$Iden,$nombre,$Apellidos,$Usuario,$Clave,$Perfil]);

if ($resultado === TRUE) {
    header('Location: index_admin.php?mensaje=Registrado');
    
}else {
    header('Location: index.php?mensaje=error');
    exit;
}


?>