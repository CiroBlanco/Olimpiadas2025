<?php
session_start(); // Asegurate de tener la sesión iniciada
include('conexion.php');
// ID del usuario (esto depende de cómo manejes login)
$id_usuario = $_SESSION['id_usuario'] ?? null;

if ($id_usuario) {
    // Eliminar todos los productos del carrito del usuario
    $sql = "DELETE FROM carrito WHERE id_usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    
    if ($stmt->execute()) {
        echo "Carrito vaciado correctamente.";
    } else {
        echo "Error al vaciar el carrito: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Usuario no identificado.";
}

$conexion->close();
?>