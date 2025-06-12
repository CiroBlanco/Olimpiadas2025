<?php 
include('conexion.php');
session_start();
$id_producto = $_POST['id_producto'];
$id_usuario = $_SESSION['id_usuario'];
$cantidad = $_POST['cantidad'];

//ingresar el producto y el usuario a la tabla pedidos
$sql_insert = 
$resultado_insert = mysqli_query($sql_insert,$conexion);

//si el resultado es igual a verdadero, restar la  cantidad  al stock del producto
$sql_update =
$resultado_update = mysqli_query($sql_update,$conexion);
//una vez reducido el stock lo redirigimos a la pagina de la categoria del producto
mysqli_close(); //cerramos la conexion
header("Location: ".$categoria.".php");//redirigimos
?>