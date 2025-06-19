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
    <title>Alquiler Vehiculos</title>
        <link rel="stylesheet" href="../index.css">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['usuario'])){
   echo' <header class="header">
        <nav>
             <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="#">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
              <li class="dropdown">
                    <button class="dropbtn">Pasajes Aereos</button>
                    <div class="dropdown-contenido">
                        <a href="../componentes/pasajes_nacionales.php">Pasajes Nacionales</a>
                        <a href="../componentes/pasajes_internacionales.php">Pasajes Internacionales</a>
                    </div>
                </li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Iniciar Sesion</a></li>
            </ul>
       </nav>
     </header>';
}else{ 
     echo' <header class="header">
        <nav>
             <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="#">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
              <li class="dropdown">
                    <button class="dropbtn">Pasajes Aereos</button>
                    <div class="dropdown-contenido">
                        <a href="../componentes/pasajes_nacionales.php">Pasajes Nacionales</a>
                        <a href="../componentes/pasajes_internacionales.php">Pasajes Internacionales</a>
                    </div>
                </li>
                
                <li><a href="../componentes/perfil.php" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
     </header>';
}
?>
   
       <h1 class="titulos"> Alquiler Vehiculos</h1>
    <div class="contenedor">
     <a href="../formularios/formulario_agregar_producto.php" class="agregar"><ion-icon name="add-outline"></ion-icon></a>
    <?php while($producto = mysqli_fetch_assoc($resultado)):?>
    <div class="tarjeta">
        <form action="editar.php" method="post">
            <input hidden type="number" name="id_producto" value=<?php echo "'".$producto['id_producto']."'"?>>
        <input type="submit" value="Editar">
        </form>
       <form action="eliminar.php" method="post">
        <input hidden type="number" name="id_producto" value=<?php echo "'".$producto['id_producto']."'"?>>
        <input type="submit" value="Eliminar ">
       </form>
        <h3>Producto #<?= $producto['id_producto'] ?></h3>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($producto['nombre']) ?></p>
        <p><strong>Descripción:</strong> <?= htmlspecialchars($producto['descripcion']) ?></p>
        <p class="precio"><strong>Precio Unitario:</strong> $<?= number_format($producto['precio_unitario'], 2) ?></p>
        <form action="agregar_producto_carrito.php" method="post">
            <input hidden type="number" name="id_producto" value=<?php echo "'".$producto['id_producto']."'"?>>
             <a href="agregar_producto_carrito.php" class="agregarcarrito"><ion-icon name="cart-outline"></ion-icon>Agregar al Carrito</a>
        </form>
      
    </div>
    
<?php endwhile; ?>
<a href="ayuda.php"class="boton-ayuda" title="Ayuda">?</a>
    </div> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?> 
</body>
</html>