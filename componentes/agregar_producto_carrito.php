<?php
session_start();
include('conexion.php');
// Verifica si hay sesión
if (!isset($_SESSION['usuario'])) {
    echo "<div class='perfil'>Para comprar en Tecno Travel, debes registrarte e iniciar sesion😉✈️</div>";
    echo"<a class=btnperfil href=../login_registro/formulario_registrarse.php>Registrate Ahora 😊</a>";
    exit;
}else {
if (!isset($_POST['id_producto'])) {
        echo "<div class='perfil'>No se recibió ningún producto</div>";
        exit;
}else{
        $id_usuario = $_SESSION['id_usuario'];
        $id_producto = $_POST['id_producto'];
        mysqli_query($conexion, "INSERT INTO carrito (id_usuario, id_producto) VALUES ($id_usuario, $id_producto)");
}
}
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}
$_SESSION['carrito'][] = $id_producto;
header("Location: carrito.php");
exit;
?>