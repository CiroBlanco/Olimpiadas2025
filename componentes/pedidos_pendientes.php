<?php
include('conexion.php');
session_start();
    
$id_usuario = $_SESSION['id_usuario'];
$fechapedido = date('Y-m-d H:i:s');

$query = "INSERT INTO pedidos_pendientes (id_usuario, fecha_pedido)
    VALUES ($id_usuario, '$fechapedido')";
$resultado = mysqli_query($conexion, $query);

if ($resultado){
$id_pedido = mysqli_insert_id($conexion);
}

   $carrito = $_SESSION['carrito'] ?? [];
   var_dump($carrito);
if(is_array($carrito) && count($carrito) > 0){
foreach ($carrito as $producto){
 $id_producto = $producto['id_producto'];
$insert_detalle = "INSERT INTO detalle_pedido (id_producto, id_pendientes) VALUES ($id_producto, $id_pedido)";
if (!mysqli_query($conexion, $insert_detalle)) {
echo "Error al insertar detalle: " . mysqli_error($conexion) . "<br>";
}
}
}

    exit();
?>
