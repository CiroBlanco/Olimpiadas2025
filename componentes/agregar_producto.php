<?php
include('conexion.php');
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio_unitario = $_POST['precio_unitario'];
$tipo = $_POST ['tipo']
 $insertar_producto= "INSERT INTO `productos`(`nombre`,`descripcion`,`precio_unitario`,`tipo`) VALUES (
    '".$nombre."',
    '".$descripcion."',
    ".$precio_unitario."
    ".$tipo."
    )";
  $resultado_insercion =mysqli_query($conexion,$insertar_producto);
  header("Location: ../index.php");
exit;
?>