<?php
session_start(); 
include('conexion.php');

$id_usuario = $_SESSION['id_usuario'] ?? null;

if ($id_usuario) {
    $sql = "DELETE FROM carrito WHERE id_usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    
    if ($stmt->execute()) {
        header('location: carrito.php');
    } else {
        echo "Error al vaciar el carrito: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Usuario no identificado.";
}

$conexion->close();
?>