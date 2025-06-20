<?php
include('conexion.php');
session_start();
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

 $sql_insert = "INSERT INTO pedidos_entregados (id_usuario, monto, fecha_pedido) 
                           VALUES ('$id_usuario', '$monto', '$fecha_pedido')";
            mysqli_query($conexion, $sql_insert);

            $sql_delete = "DELETE FROM pedidos_pendientes WHERE id_pendientes = $id_pedido";
            mysqli_query($conexion, $sql_delete);
}
}else{
        $nuevo_estado_esc = mysqli_real_escape_string($conexion, $nuevo_estado);
        $sql_update = "UPDATE pedidos_pendientes SET estado = '$nuevo_estado_esc' WHERE id_pendientes = $id_pedido";
        mysqli_query($conexion, $sql_update);
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