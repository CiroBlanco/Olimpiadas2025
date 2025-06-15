<?php
include_once('conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){ //si no hay sesion
   echo'<header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turisticos</button>
                    <div class="dropdown-contenido">
                        <a href="../componentes/paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="../componentes/paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Iniciar Sesion</a></li>
            </ul>
       </nav>
     </header>';
}else{
    echo'<header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../componentes/paquetesturisticos.php">Paquetes Turisticos</a></li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
     </header>';
}
?>