<?php
include('conexion.php');
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$usuarios = mysqli_query($conexion, "
    SELECT DISTINCT u.id_usuario, u.nombre, u.email, pp.id_pendientes, pp.fecha_pedido
    FROM usuario u
    JOIN pedidos_pendientes pp ON u.id_usuario = pp.id_usuario
");

if (!$usuarios) {
    die("Error en consulta de usuarios: " . mysqli_error($conexion));
}

while ($usuario = mysqli_fetch_assoc($usuarios)){
    $id_usuario = $usuario['id_usuario'];
    $nombre = $usuario['nombre'];
    $email = $usuario['email'];
    $id_pendientes = $usuario['id_pendientes'];
    $fecha_pedido = $usuario['fecha_pedido'];
    $pedidos_query = mysqli_query($conexion, "SELECT * FROM pedidos_pendientes WHERE id_usuario = $id_usuario");
    if (!$pedidos_query) {
        die("Error en consulta de pedidos: " . mysqli_error($conexion));
    }
    $productos = mysqli_query($conexion, "
        SELECT pr.nombre AS productos
        FROM detalle_pedido dp
        JOIN productos pr ON dp.id_productos = pr.id_producto
        WHERE dp.id_pendientes = $id_pendientes
    ");
}
    $contenido = "<h3>Hola $nombre, estos son tus pedidos pendientes:</h3><ul>";
  while ($pedido = mysqli_fetch_assoc($detalle_query)) {
        $producto = htmlspecialchars($pedido['producto']);

        $contenido .= "<li>$producto -</li>";
    $contenido .= "</ul><p>Gracias por tu compra.</p>";;

    // Envío del correo
$mail = new PHPMailer(true);
try{
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'tecnotravel2025@gmail.com'; 
    $mail->Password   = 'fzcd vtdu kvdt jutp';       //(contraseña de aplicación)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('tecnotravel2025@gmail.com', 'Tecno Travel');
    $mail->addAddress($email, $nombre);
    $mail->isHTML(true);
    $mail->Subject = 'Resumen de tus pedidos pendientes';
    $mail->Body    = $contenido;

    $mail->send();
    echo "Correo enviado a $email<br>";
    } catch (Exception $e) {
        echo "Error al enviar a $email: {$mail->ErrorInfo}<br>";
    }
}
?>