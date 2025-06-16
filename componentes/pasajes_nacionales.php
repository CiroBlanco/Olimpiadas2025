<?php
include('conexion.php');
include('../componentes/menu_index.php');
$sql = "SELECT * FROM productos WHERE id_tipo = 5";
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
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h1 class="titulos">Pasajes Nacionales</h1>
    <div class="contenedor">
   <?php while($producto = mysqli_fetch_assoc($resultado)):?>
    <div class="tarjeta">
        <h3>Producto #<?= $producto['id_producto'] ?></h3>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($producto['nombre']) ?></p>
        <p><strong>Descripción:</strong> <?= htmlspecialchars($producto['descripcion']) ?></p>
        <p class="precio"><strong>Precio Unitario:</strong> $<?= number_format($producto['precio_unitario'], 2) ?></p>
    </div>
<?php endwhile; ?>
    </div> 
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?>
     
</body>
</html>