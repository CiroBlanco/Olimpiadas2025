<?php
include('conexion.php');
session_start();
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
                <li><a href="#" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="../componentes/carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
</header>
    <h1 class="titulos">Tu Perfil</h1>
    
<div class="contenedorperfil">
<?php
$id_usuario = $_SESSION['id_usuario'];
$consulta = mysqli_query($conexion, "SELECT * FROM pedidos_pendientes WHERE id_usuario ='".$id_usuario."'");

if (!isset($_SESSION['id_usuario'])) {
    echo
    "<p> Debes registrarte e iniciar sesión en el sitio </p>";
    echo"<a class=btnperfil href=../login_registro/formulario_registrarse.php>Registrate Ahora 😊</a>";
    exit;
}if( $fila = mysqli_fetch_assoc($consulta)){ 
    echo "<h2>Perfil del Usuario</h2>";
    echo "<h3>Pedidos Pendientes</h3>";
    echo "Pedido Nº: " . $fila['id_pendientes'] . "<br>";
    echo "Monto: " . $fila['monto'] . "<br>";
    echo "Fecha pedido: " . $fila['fecha_pedido'] . "<br>";
    

}else{ 
    echo'<p class="titulos"><strong>No tienes pedidos pendientes</strong></p>';
}
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
   echo'<a href="administrar_pedidos_pendientes.php" class="btnadministrar">Administrar Pedidos</a>';
   }
?>
<?php echo "<a class=btnperfil href='../componentesinicio/cerrarsesion.php'>Cerrar Sesion</a>";
?>
<a href="ayuda.php"class="boton-ayuda" title="Ayuda">?</a>
</div>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?>
</body>
</html>

