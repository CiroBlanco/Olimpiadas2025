<?php
include('./php/componentes/conexion.php');
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio_unitario'];
 $insertar_producto= "INSERT INTO `productos`(`descripcion`,`precio_unitario') VALUES (
    '".$descripcion."',
    '".$precio_unitario."',
    '0')";
  $resultado_insercion =mysqli_query($conexion,$insertar_producto);
?>