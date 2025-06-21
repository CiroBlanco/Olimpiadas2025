<?php
session_start();
include('conexion.php');
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "No hay productos en el carrito para finalizar la compra.";
    exit;
}
$id_usuario = $_SESSION['id_usuario'];
$monto = 0;
foreach ($_SESSION['carrito'] as $id_producto) {
    $consulta = "SELECT precio_unitario FROM productos WHERE id_producto = $id_producto";
    $resultado = mysqli_query($conexion, $consulta);
    if ($fila = mysqli_fetch_assoc($resultado)) {
        $monto += $fila['precio_unitario'];
    }
}
$fecha = date("Y-m-d");

$sql_pendiente = "INSERT INTO pedidos_pendientes(id_usuario, monto, fecha_pedido)
                  VALUES ('$id_usuario', '$monto', '$fecha')";
mysqli_query($conexion, $sql_pendiente);

$id_pendiente = mysqli_insert_id($conexion);

$productos = $_SESSION['carrito']; 
foreach ($productos as $id_producto) {
    $sql_detalle = "INSERT INTO detalle_pedido (id_productos, id_pendientes)
                    VALUES ('$id_producto', '$id_pendiente')";
    mysqli_query($conexion, $sql_detalle);
}
echo "Pedido confirmado correctamente.";
?>

<<<<<<< HEAD
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Obtener usuarios con pedidos pendientes
$usuarios = mysqli_query($conexion, "
    SELECT DISTINCT u.id_usuario, u.nombre, u.email, pp.id_pendientes, pp.fecha_pedido
    FROM usuario u
    JOIN pedidos_pendientes pp ON u.id_usuario = pp.id_usuario
");

if (!$usuarios) {
    die("Error en consulta de usuarios: " . mysqli_error($conexion));
}

while ($usuario = mysqli_fetch_assoc($usuarios)) {
    $id_usuario = $usuario['id_usuario'];
    $nombre = $usuario['nombre'];
    $email = $usuario['email'];
    $id_pendientes = $usuario['id_pendientes'];
    $fecha_pedido = $usuario['fecha_pedido'];

    // Obtener productos de ese pedido
    $productos_query = mysqli_query($conexion, "
        SELECT pr.nombre AS producto
        FROM detalle_pedido dp
        JOIN productos pr ON dp.id_productos = pr.id_producto
        WHERE dp.id_pendientes = $id_pendientes
    ");

    if (!$productos_query) {
        echo "Error al obtener productos de $nombre: " . mysqli_error($conexion);
        continue;
    }

    // Construir contenido del email
    $contenido = "<h3>Hola $nombre, estos son tus pedidos pendientes (del $fecha_pedido):</h3><ul>";

    while ($producto = mysqli_fetch_assoc($productos_query)) {
        $nombre_producto = htmlspecialchars($producto['producto']);
        $contenido .= "<li>$nombre_producto</li>";
    }

    $contenido .= "</ul><p>Gracias por tu compra 🛒</p>";

    // Enviar correo con PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tecnotravel2025@gmail.com';
        $mail->Password   = 'fzcd vtdu kvdt jutp'; // contraseña de app
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('tecnotravel2025@gmail.com', 'Tecno Travel');
        $mail->addAddress($email, $nombre);

        $mail->isHTML(true);
        $mail->Subject = 'Resumen de tus pedidos pendientes';
        $mail->Body    = $contenido;

        $mail->send();
        echo "✅ Correo enviado a $email<br>";
    } catch (Exception $e) {
        echo "❌ Error al enviar a $email: {$mail->ErrorInfo}<br>";
    }
    
}
?>
=======
>>>>>>> 1421d0461492e8ab2e368c59b2bafe427f158f3e

