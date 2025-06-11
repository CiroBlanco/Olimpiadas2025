<?php
include_once('conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){ //si no hay sesion
   echo'<header class="header">
        <nav>
            <ul>
                <li><a href="index.php" class="active">Paquetes Turisticos</a></li>
                <li><a href="sedes.php">Alquiler Vehiculos</a></li>
                <li><a href="quienessomos.php">Estadias</a></li>
                <li><a href="donar.php">Paasajes Aereos</a></li>
                <li><a href="formulario_registrarse.php">Registrarse</a></li>
                <li><a href="formulario_iniciarsesion.php">Inicar Sesion</a></li>
            </ul>
       </nav>
     </header>';
}
?>