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
    <title>Document</title>
</head>
<body>
  <header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../componentes/paquetesturisticos.php">Paquetes Turisticos</a></li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="#">Pasajes Aereos</a></li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
            </ul>
       </nav>
     </header>
<h1 class="titulos">¿Buscas un vuelo comodo y seguro?</h1>
<h2 class="titulos">Nosotros te ayudamos😉</h2>
<div class="Pasajes">

</div>
  <div class="contenedor">
    <?php while($producto = mysqli_fetch_assoc($resultado)): ?>
    <div class="tarjeta">
        <h3>Producto #<?= $producto['id_producto'] ?></h3>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($producto['nombre']) ?></p>
        <p><strong>Descripción:</strong> <?= htmlspecialchars($producto['descripcion']) ?></p>
        <p class="precio"><strong>Precio Unitario:</strong> $<?= number_format($producto['precio_unitario'], 2) ?></p>
    </div>
<?php endwhile; ?>
    </div> 
</body>
</html>