<?php
include('conexion.php');
session_start();

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_pedido'], $_POST['nuevo_estado'])) {
    $id_pedido = intval($_POST['id_pedido']);
    $nuevo_estado = $_POST['nuevo_estado'];

if ($nuevo_estado === 'entregado') {
 $sql_get = "SELECT * FROM pedidos_pendientes WHERE id_pendientes = $id_pedido";
 $res_get = mysqli_query($conexion, $sql_get);

 if ($pedido = mysqli_fetch_assoc($res_get)) {
  $id_usuario = $pedido['id_usuario'];
  $monto = $pedido['monto'];
  $fecha_pedido = $pedido['fecha_pedido'];

 $sql_insert = "INSERT INTO pedidos_entregados (id_usuario, monto, fecha_pedido) VALUES ('$id_usuario', '$monto', '$fecha_pedido')";
 mysqli_query($conexion, $sql_insert);
 $id_entregado = mysqli_insert_id($conexion);

 $sql_user = "SELECT nombre, email FROM usuario WHERE id_usuario = $id_usuario";
 $res_user = mysqli_query($conexion, $sql_user);
 $usuario = mysqli_fetch_assoc($res_user);
 $nombre = $usuario['nombre'];
 $email = $usuario['email'];

$contenido = "
<h3>Hola $nombre,</h3>
<p>Tu pedido con ID <strong>$id_pedido</strong> ha sido <strong>entregado</strong>.</p>
<p>Monto: $$monto<br>Fecha pedido: $fecha_pedido</p>
<p>Gracias por confiar en nosotros.</p>
            ";
$mail = new PHPMailer(true);
try {
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'tecnotravel2025@gmail.com';
$mail->Password   = 'fzcd vtdu kvdt jutp'; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;
$mail->setFrom('tecnotravel2025@gmail.com', 'Tecno Travel');
$mail->addAddress($email, $nombre);
$mail->isHTML(true);
$mail->Subject = 'Tu pedido ha sido entregado';
$mail->Body    = $contenido;
$mail->send();
$asunto = 'Pedido entregado';

$sql_insert_correo = "INSERT INTO correos_enviados (id_pedidos, id_usuario, asunto, cuerpo, fecha_envio)
                                     VALUES (?, ?, ?, ?, NOW())";
$stmt = mysqli_prepare($conexion, $sql_insert_correo);
mysqli_stmt_bind_param($stmt, "iiss", $id_entregado, $id_usuario, $asunto, $contenido);
mysqli_stmt_execute($stmt);
echo "Pedido entregado y correo enviado a $email.<br>";

} catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}<br>";
}

$sql_delete = "DELETE FROM pedidos_pendientes WHERE id_pendientes = $id_pedido";
mysqli_query($conexion, $sql_delete);

}else{
 echo "Pedido pendiente no encontrado.";
}
}else{
$nuevo_estado_esc = mysqli_real_escape_string($conexion, $nuevo_estado);
$sql_update = "UPDATE pedidos_pendientes SET estado = '$nuevo_estado_esc' WHERE id_pendientes = $id_pedido";
mysqli_query($conexion, $sql_update);

echo "Estado del pedido actualizado.";
}
}
$sql = "SELECT * FROM pedidos_pendientes";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Administrar Pedidos Pendientes</title>
    <link rel="stylesheet" href="../index.css" />
</head>
<body>
    <h2 class="titulos">Lista de Pedidos Pendientes</h2>
    <table>
        <tr>
            <th class="titulos">ID Pendiente</th>
            <th class="titulos">ID Usuario</th>
            <th class="titulos">Monto</th>
            <th class="titulos">Fecha pedido</th>
            <th class="titulos">Estado</th>
            <th class="titulos">Acción</th>
        </tr>
        <?php while ($pedido = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?= $pedido['id_pendientes'] ?></td>
            <td><?= $pedido['id_usuario'] ?></td>
            <td><?= $pedido['monto'] ?></td>
            <td><?= $pedido['fecha_pedido'] ?></td>
            <td><?= $pedido['estado'] ?? 'pendiente' ?></td>
            <td>
                <form method="post" action="">
                    <input type="hidden" name="id_pedido" value="<?= $pedido['id_pendientes'] ?>" />
                    <select name="nuevo_estado">
                        <option value="pendiente" <?= (($pedido['estado'] ?? '') === 'pendiente') ? 'selected' : '' ?>>Pendiente</option>
                        <option value="entregado">Entregado</option>
                    </select>
                    <button type="submit">Actualizar</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php mysqli_close($conexion); ?>
</body>
</html>