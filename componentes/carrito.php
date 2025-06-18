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
if (!isset($_SESSION['id_usuario'])) {
    echo
    " <div class= perfil> Para comprar en el sitio, debes registrarte e iniciar sesion</div>";
    echo"<a class=btnperfil href=../login_registro/formulario_registrarse.php>Registrate Ahora 😊</a>";
    exit;
}
 $id_usuario = $_SESSION['id_usuario'];
$consulta = mysqli_query($conexion, "SELECT * FROM  WHERE iduser = $id_usuario AND idproducto=$id_producto");
if ($fila = mysqli_fetch_assoc($consulta)) {
    echo "<h2>Tus Productos😍</h2>";
    echo "Usuario: " . $fila['id_usuario'] . "<br>";
    echo "Producto: " . $fila['id_producto'] . "<br>";
} else {
    //echo "Usuario no encontrado.";
}
?>
<form action="agregar_producto_carrito.php" method="post"> 
<input hidden type="number" name="id_usuario" value=<?php echo "'".$usuario['id_usuario']."'"?>>
<input hidden type="number" name="id_producto" value=<?php echo "'".$producto['id_producto']."'"?>>
 <input type="submit" value="Eliminar" class="btnperfil">
</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>