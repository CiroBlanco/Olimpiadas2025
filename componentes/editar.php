<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['admin'])) {
   header("Location: ../index.php");
    exit();
}

if (isset($_POST['id_producto'])) {
    $id_producto = (int) $_POST['id_producto'];
} 


if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['precio_unitario'])) {
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
$precio_unitario = mysqli_real_escape_string($conexion, $_POST['precio_unitario']);

$query = "UPDATE productos SET 
    nombre = '$nombre',
    descripcion = '$descripcion',
    precio_unitario = '$precio_unitario'
    WHERE id_producto = $id_producto";

$resultado = mysqli_query($conexion, $query);
header("Location: ../index.php");
}
$query = "SELECT * FROM productos WHERE id_producto = $id_producto";
$resultado = mysqli_query($conexion, $query);
$producto = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    
<h2 class="titulos">Editar Producto</h2>
<div class="form">
<form method="POST">
    <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">
    <div class="campo">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br><br>
    </div>
    <div class="campo">
        <label>Descripción:</label><br>
        <textarea name="descripcion" required><?= htmlspecialchars($producto['descripcion']) ?></textarea><br><br>
    </div>
    <div class="campo">
        <label>Precio Unitario:</label><br>
        <input type="number"  name="precio_unitario" value="<?= $producto['precio_unitario'] ?>" required><br><br>
    </div>
    <input type="reset" value="Cancelar">
    <input type="submit" value="Guardar cambios">
</form>
</div>
</body>
</html>

 
