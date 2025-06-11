<?php
include_once('conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){ //si no hay sesion
    echo'<header class="header">
        <nav>
            <ul>
                <li><a href="index.php" class="active">INICIO</a></li>
                <li><a href=".php"></a></li>
                   <li><a href=".php">PAQUETES TURISTICOS</a>
                <ul>
                <li><a href=".php" class="active">PAQUETES INTERNACIONALES</a></li>
                <li><a href=".php">PAQUETES NACIONALES</a></li>
                  </ul>
                   </li>
                <li><a href=".php">ESTADIAS</a></li>
                <li><a href=".php">ALQUILER VEHICULOS</a></li>
                <li><a href=".php">REGISTRARSE</a></li>
                <li><a href=".php">INICIAR SESIÓN</a></li>
            </ul>
       </nav>
     </header>';

}else{ //si hay sesion
    echo'<header class="header">
        <nav>
            <ul>
                <li><a href=".php" class="active">INICIO</a></li>
                 <li><a href=".php"></a></li>
                   <li><a href=".php">PAQUETES TURISTICOS</a>
                <ul>
                <li><a href=".php" class="active">PAQUETES INTERNACIONALES</a></li>
                <li><a href=".php">PAQUETES NACIONALES</a></li>
                  </ul>
                   </li>
                <li><a href=".php">ESTADIAS</a></li>
                <li><a href=".php">ALQUILER VEHICULOS</a></li>
                <li><a href="cerrarsesion.php">CERRAR SESION</a></li>
                <li><a href="perfilusuario.php" class="perfilboton"><img src="./css/iconos/logo_user.svg"id="logousuario"></a></li>
            </ul>
       </nav>
     </header>';
}
?>