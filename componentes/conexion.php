<?php
$usuario= "root";
$contrasena="";
$basededatos="olimpiadas_2025";
$puerto="localhost";
$conexion=mysqli_connect($puerto,$usuario,$contrasena,$basededatos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>