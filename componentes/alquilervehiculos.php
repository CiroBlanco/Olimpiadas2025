<?php
include('conexion.php');
$sql = "SELECT * FROM productos WHERE id_tipo = 2";
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
    <title>Olimpiadas2025</title>
        <link rel="stylesheet" href="../index.css">
</head>
<body>
    <header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../componentes/paquetesturisticos.php">Paquetes Turisticos</a></li>
                <li><a href="#">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
                <li><a href="../componentes/carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
     </header>
       <h1 class="titulos"> Alquiler Vehiculos</h1>
    <div class="contenedor">
     <a href="../formularios/formulario_agregar_producto.php" class="agregar"><ion-icon name="add-outline"></ion-icon></a>
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