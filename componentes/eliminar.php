<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="../index.css">
</head>
<body>
    
</body>
</html>
<?php
session_start();
include('conexion.php');
if (!isset($_SESSION['admin'])) {
   header("Location: login_registro/formulario_iniciarsesion.php");
    exit();
}
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $query = "DELETE FROM productos WHERE id = $id";

if (mysqli_query($conexion, $query)) {
        echo "Producto eliminado correctamente.";
}else{
    echo "Error al eliminar el producto: " . mysqli_error($conexion);
}
header("Location: ../index.php"); 
 exit();
}
$resultado = mysqli_query($conexion, "SELECT * FROM productos");

while ($producto = mysqli_fetch_assoc($resultado)) {
    echo "<div>";
    echo "<h3>" . $producto['nombre'] . "</h3>";
    echo "<p>" . $producto['descripcion'] . "</p>";
      echo "<p>" . $producto['precio_unitario'] . "</p>";
        echo "<p>" . $producto['id_tipo'] . "</p>";
    echo "<form method='POST' action='eliminar_producto.php'>";
    echo "<input type='hidden' name='id_producto' value='" . $producto['id_producto'] . "'>";
    echo "<input type='submit' value='Eliminar' onclick='return confirm(\"¿Seguro que querés eliminar este producto?\")'>";
    echo "</form>";
    echo "</div>";
}
?>

