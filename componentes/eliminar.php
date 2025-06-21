<?php
include('conexion.php'); // conecta a la base de datos
session_start();
if (!isset($_SESSION['admin'])) {
   header("Location: ../index.php");
    exit();
}
// Verifica si se envió el formulario
if (isset($_POST['id_producto'])) {
 $id = $_POST['id_producto'];

 $sql = "DELETE FROM productos WHERE id_producto = $id";
 $resultado = mysqli_query($conexion, $sql);

if ($resultado){
    echo "Producto eliminado correctamente.";
    header('location ../index.php');
}else{
    echo "Error al eliminar el producto: " . mysqli_error($conexion);
}
}
?>