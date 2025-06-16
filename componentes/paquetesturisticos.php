<?php
include('conexion.php');
$sql = "SELECT * FROM productos";
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
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
                <li><a href="" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
    <a href="../formularios/formulario_agregar_producto.php" class="agregar"><ion-icon name="add-outline"></ion-icon></a>
</header>
<body>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?> 
</body>
</html>