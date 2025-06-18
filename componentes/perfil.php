<?php
include('conexion.php');
include('menu_index.php');
if (!isset($_SESSION['usuario'])){ // header("Location: ../login_registro/formulario_iniciarsesion.php");
    $id_usuario = $_SESSION['id_usuario']; //el cual debes tener al validar el login
//realizo la consulta
$sql= "SELECT * FROM usuarios WHERE id = :id"; 
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h1 class="titulos">Perfil</h1>
    <div class="perfil">
        <p><strong>Nombre:</strong> </p>
        <p><strong>Email:</strong> </p>
        <p><strong>Usuario:</strong> </p>
        <p><strong>Pedidos Pendientes:</strong> <? ?></p>
        <a class="btnperfil"href="../componentesinicio/cerrarsesion.php"><strong>Cerrar Sesión</strong></a>
    </div>
</body>
</html>