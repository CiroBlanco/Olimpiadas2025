<?php 
include('conexion.php');
session_start();
$id_producto = $_POST['id_producto'];
$id_usuario = $_SESSION['id_usuario'];
$cantidad = $_POST['cantidad'];


$sql_insert = 
$resultado_insert = mysqli_query($sql_insert,$conexion);
$sql_update =
$resultado_update = mysqli_query($sql_update,$conexion);
mysqli_close(); 
header("Location: ".$categoria.".php");
?>