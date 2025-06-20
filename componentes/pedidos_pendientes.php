<?php
include('conexion.php');
session_start();
    // Insertar en pedidos_pendientes
    
$id_usuario = $_SESSION['id_usuario'];
$fechapedido = date('Y-m-d H:i:s');
$query = "INSERT INTO pedidos_pendientes (id_usuario, fecha_pedido)
    VALUES ($id_usuario, '$fechapedido')";
$resultado = mysqli_query($conexion, $query);
if ($resultado) {
    header("Location: ../index.php");
} else{
    echo "Error al insertar pedido:". mysqli_error($conexion);
}
?>
