<?php
include('conexion.php');
$iddetalle_pedido = $_POST['id_detallepedido'];
// datos de detalle pedido
$consulta = mysqli_query($conexion, "SELECT * FROM detalle_pedido WHERE id = $idpedido");
if ($fila = mysqli_fetch_assoc($consulta)) {
    $id_pendientes = $fila['id_pendientes'];
    $id_usuario = $fila['id_usuario'];
    $monto = $fila['monto'];
    $fecha = $fila['fecha_pedido'];

    // Insertar en pedidos_pendientes
    mysqli_query($conexion, "INSERT INTO pedidos_pendientes (id_pendientes, id_usuario, monto, fecha_pedido) 
     VALUES ('$id_pendientes', '$id_usuario', '$monto', '$fecha')");

    // Eliminar de detalle_pedido
    mysqli_query($conexion, "DELETE FROM detalle_pedido WHERE id = $idpedido");

    echo "Pedido confirmado y movido.";
} else {
    echo "Pedido no encontrado.";
}
?>

