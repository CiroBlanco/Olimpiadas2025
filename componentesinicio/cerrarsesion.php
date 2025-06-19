<?php
include('../componentes/conexion.php');
session_start();//iniciar sesion

//borramos los items del carrito
$consulta = "DELETE FROM carrito WHERE id_usuario='".$_SESSION['id_usuario']."'";
mysqli_query($conexion,$consulta);

session_unset();//limpiar la sesion
session_destroy();//destruir sesion
header("Location: ../index.php");// enviar al inicio
?>