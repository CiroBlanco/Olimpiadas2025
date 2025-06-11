<?php 
include('conexion.php');
session_start();
$id_producto = $_POST['id'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$id_usuario = $_SESSION['id_usuario'];

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