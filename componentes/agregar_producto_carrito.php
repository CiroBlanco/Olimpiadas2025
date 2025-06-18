<?php
session_start();
include('conexion.php');

$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_POST['id_producto'];

$agregar_producto = "INSERT INTO carrito (id_usuario,id_producto) VALUES ('".$id_usuario."','".$id_producto."')";

$resultado_agregar = mysqli_query($conexion,$agregar_producto);
    if (!$resultado_agregar) {
    echo "Error al agregar producto: " . mysqli_error($conexion);
    }
header("Location: carrito.php"); 
exit;
?>