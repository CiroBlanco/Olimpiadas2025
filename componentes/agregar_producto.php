<?php
include('conexion.php');
$descripcion = $_POST['descripcion'];
$precio_unitario = $_POST['precio_unitario'];
 $insertar_producto= "INSERT INTO `productos`(`descripcion`,`precio_unitario`) VALUES (
    '".$descripcion."',
    ".$precio_unitario."
    )";
  $resultado_insercion =mysqli_query($conexion,$insertar_producto);
  header("Location: paquetesturisticos.php");
exit;
?>