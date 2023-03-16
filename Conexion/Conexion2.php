<?php 

$host ="localhost";
$usuario = "root";
$clave = "";
$bd = "socrates";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
$conexion -> set_charset ("utf8");


?>