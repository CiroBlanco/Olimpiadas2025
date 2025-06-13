<?php
include('conexion.php');
$sql = "SELECT id_producto, descripcion, precio_unitario FROM productos";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Olimpiadas2025</title>
</head>
 <header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="#">Paquetes Turisticos</a></li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
            </ul>
       </nav>
</header>
<body>
   <div class="contenedor">
<?php while($producto = mysqli_fetch_assoc($resultado)): ?>
    <div class="tarjeta">
        <h3>Producto #<?= $producto['id_producto'] ?></h3>
        <p><strong>Descripción:</strong> <?= htmlspecialchars($producto['descripcion']) ?></p>
        <p><strong>Precio Unitario:</strong> $<?= number_format($producto['precio_unitario'], 2) ?></p>
    </div>
<?php endwhile; ?>
</div>
</body>
</html>