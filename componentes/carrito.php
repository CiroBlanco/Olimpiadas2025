<?php 
include('conexion.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
<header class="header">
        <nav>
             <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="../componentes/paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="../componentes/paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
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
                <li><a href="../componentes/perfil.php" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="#" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
</header>
<h2 class="titulos">Tu Carrito</h2>
<p class="texto">Tus Productos</p>
<form action="agregar_producto_carrito.php" method="post">
<input type="hidden" name="id_producto" value="Producto">
<?php
if (isset($_SESSION['id_usuario'])){
    //cargar pedidos del usuario
    $id_usuario = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM carrito WHERE Id_usuario='".$id_usuario."'";
} else{
     echo 'No se han encontrado productos, añada un carrito al producto por favor.';
    }
   if ($fila = mysqli_fetch_assoc($sql)) {
    echo "Tus pedidos" . $fila['id_usuario'] . "<br>";
    echo "Producto N°: " . $fila['id_producto'] . "<br>";

}


?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</form>
</body>
</html>