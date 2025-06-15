<?php
include('conexion.php');
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
                <li><a href="../login_registro/formulario_iniciarsesion.php">Iniciar Sesion</a></li>
                <li><a href="../componentes/perfil.php" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
     </header>
<h1 class="titulos">¿Buscas un vuelo comodo y seguro?</h1>
<h2 class="titulos">Nosotros te ayudamos😉</h2>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?> 
</body>
</html>