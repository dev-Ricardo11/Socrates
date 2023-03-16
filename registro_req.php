<?php

include_once './Conexion/conexion.php';

$id = $_POST["id"];
$prod = $_POST["producto"];
$serv = $_POST["servicio"];
$marca = $_POST["marcacion"];
$ident = $_POST["identificacion"];
$nombre = $_POST["nombre"];
$estrategia = $_POST["estrategia"];
$obser = $_POST["observacion"];

$sentencia = $bd->prepare("INSERT INTO requerim(id, producto, servicio, marcacion, identitular, nomtitular, estrategia, observaciones) VALUES (?,?,?,?,?,?,?,?)");
$Resul = $sentencia->execute([$id,$prod,$serv,$marca,$ident,$nombre,$estrategia,$obser]);

if ($resul === TRUE) {
    header('Location: index_agen.php?mensaje=Error');
}else {
    header('Location: index_agen.php?mensaje=Registrado');
    
}

?>