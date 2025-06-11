<?php
session_start();//iniciar sesion
session_unset();//limpiar la sesion
session_destroy();//destruir sesion
header ("Location: index.php");// enviar al inicio
?>