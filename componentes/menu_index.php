<?php
include_once('conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){ //si no hay sesion
    echo'<header class="header">
        <nav>
            <ul>
                <li><a href="index.php" class="active">INICIO</a></li>
                <li><a href="">PAQUETES TURISTICOS</a>}
                <ul>
                <li><a href="index.php" class="active">NACIONALES</a></li>
                <li><a href="index.php" class="active">INTERNACIONALES</a></li>
                </ul>
                </li>
                <li><a href="quienessomos.php">ESTADIAS</a></li>
                <li><a href="donar.php">ALQUILER VEHICULOS</a></li>
                <li><a href="formulario_registrarse.php">REGISTRARSE</a></li>
                <li><a href="formulario_iniciarsesion.php">INICIAR SESIÓN</a></li>
            </ul>
       </nav>
     </header>';

}else{ //si hay sesion
echo'<header class="header">
        <nav>
            <ul>
                <li><a href="index.php" class="active">INICIO</a></li>
                <li><a href="sedes.php">SEDES</a></li>
                <li><a href="quienessomos.php">QUIENES SOMOS</a></li>
                <li><a href="donar.php">DONAR</a></li>
                <li><a href="cerrarsesion.php">CERRAR SESION</a></li>
                <li><a href="perfilusuario.php" class="perfilboton"><img src="./css/iconos/logo_user.svg"id="logousuario"></a></li>
            </ul>
       </nav>
     </header>';
}
?>