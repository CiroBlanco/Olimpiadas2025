<?php
include_once('conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){ //si no hay sesion
   echo'<header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../componentes/paquetesturisticos.php">Paquetes Turisticos</a></li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
            </ul>
       </nav>
     </header>';
}
?>