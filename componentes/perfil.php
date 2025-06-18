<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../index.css">
    <title>Document</title>
</head>
<body>
    <h1 class="titulos">Tu Perfil</h1>
</body>
</html>
<?php
include('conexion.php');
session_start();
if (!isset($_SESSION['id_usuario'])) {
    echo
    " <div class= perfil> Debes registrarte e iniciar sesión en el sitio </div>";
    echo"<a class=btnperfil href=../login_registro/formulario_registrarse.php>Registrate Ahora 😊</a>";
    exit;
}
$id_usuario = $_SESSION['id_usuario'];

$consulta = mysqli_query($conexion, "SELECT * FROM pedido_pendiente WHERE id = $id_usuario");

if ($fila = mysqli_fetch_assoc($consulta)) {
    echo "<h2>Perfil del Usuario</h2>";
    echo "Pedido Nº: " . $fila['id_pendientes'] . "<br>";
    echo "Monto: " . $fila['monto'] . "<br>";
    echo "Fecha pedido: " . $fila['fecha'] . "<br>";
} else {
    echo "Usuario no encontrado.";
}


?>