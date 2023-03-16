<?php

$contraseña = "";
$us = "root";
$bdnombre = "socrates";

try {
    $bd = new PDO (
        'mysql:host=localhost;
        dbname='.$bdnombre, $us,$contraseña,
        array (PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Problema con la conexion de la base".$e->getMessage();
}

?>