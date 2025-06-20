<?php
session_start();
include('conexion.php');
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "No hay productos en el carrito para finalizar la compra.";
    exit;
}
$id_usuario = $_SESSION['id_usuario'];
$monto = 0;
foreach ($_SESSION['carrito'] as $id_producto) {
    // Consultar el precio de cada producto
    $consulta = "SELECT precio_unitario FROM productos WHERE id_producto = $id_producto";
    $resultado = mysqli_query($conexion, $consulta);
    if ($fila = mysqli_fetch_assoc($resultado)) {
        $monto += $fila['precio_unitario'];
    }
}
$fecha = date("Y-m-d");

$sql_pendiente = "INSERT INTO pedidos_pendientes(id_usuario, monto, fecha_pedido)
                  VALUES ('$id_usuario', '$monto', '$fecha')";
mysqli_query($conexion, $sql_pendiente);

$id_pendiente = mysqli_insert_id($conexion);

$productos = $_SESSION['carrito']; 
foreach ($productos as $id_producto) {
    $sql_detalle = "INSERT INTO detalle_pedido (id_productos, id_pendientes)
                    VALUES ('$id_producto', '$id_pendiente')";
    mysqli_query($conexion, $sql_detalle);
}

echo "Pedido confirmado correctamente.";
?>

