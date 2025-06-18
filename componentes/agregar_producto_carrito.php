<?php
session_start();
include('conexion.php');
// Verifica si hay sesión
if (!isset($_SESSION['id_usuario'])) {
    echo "<div class='perfil'>Para comprar en Tecno Travel, debes registrarte e iniciar sesion😉✈️</div>";
    echo"<a class=btnperfil href=../login_registro/formulario_registrarse.php>Registrate Ahora 😊</a>";
    exit;
}
$id_usuario = $_SESSION['id_usuario'];
// Verificamos que venga el id_producto por POST (o por GET si lo preferís)
if (!isset($_POST['id_producto'])) {
    echo "<div class='perfil'>No se recibió ningún producto</div>";
    exit;
}
$id_producto = $_POST['id_producto'];
// Insertar en la base de datos
mysqli_query($conexion, "INSERT INTO carrito (id_usuario, id_producto) VALUES ($id_usuario, $id_producto)");
header("Location: carrito.php");
exit;
?>