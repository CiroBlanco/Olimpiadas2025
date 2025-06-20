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
                <li><a href="../componentes/perfil.php" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="#" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
</header>
<h2 class="titulos">Tu Carrito</h2>
<div class="contenedorcarrito">
<p class="titulos">Tus Productos</p>
<form action="agregar_producto_carrito.php" method="post">
<input type="hidden" name="id_producto" value="Producto">
<a href="ayuda.php"class="boton-ayuda" title="Ayuda">?</a>
<?php
if (!isset($_SESSION['id_usuario'])) {
    echo
    " <div class= perfil> Para comprar en el sitio, debes registrarte e iniciar sesion</div>";
    echo"<a class=btnperfil href=../login_registro/formulario_registrarse.php>Registrate Ahora 😊</a>";
    exit;
}?>
<?php
$id_usuario = $_SESSION['id_usuario'];
$consulta = mysqli_query($conexion, "SELECT * FROM carrito WHERE id_usuario = $id_usuario");
if (mysqli_num_rows($consulta)>0) {
    //hay productos, imprimo las tarjetas
    while ($resultados = mysqli_fetch_assoc($consulta)) {
        $consulta_item = "SELECT * FROM productos WHERE id_producto ='".$resultados['id_producto']."'";
        $resultado_item = mysqli_query($conexion,$consulta_item);
        $producto = mysqli_fetch_assoc($resultado_item);
        echo"
        <div class='tarjeta'>
        <h3>Producto#".$resultados['id_producto']."</h3>
        <p><strong>Nombre: ".$producto['nombre']."</p>
        <p><strong>Descripción: ".$producto['descripcion']."</p>
        <p class='precio'><strong>Precio Unitario:</strong> $".$producto['precio_unitario']."</p>
        </div>
        </div>";
 

    }
}else {
    //no hay productos
    echo "sin productos en el carrito";
}
?>
</form> 
<form action="pedidos_pendientes.php" method="POST">
<input type="submit" value="Finalizar Compra">
</form>
<form action="enviarcorreo.php" method="POST">
<input type="submit" value="correo">
</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>