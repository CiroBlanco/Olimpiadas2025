<?php
include('conexion.php');
session_start();
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_pendientes'], $_POST['id_pedidos'])) {
    $id_pendientes = intval($_POST['id_pedidos']);
    $pedidos_entregados = mysqli_real_escape_string($conexion, $_POST['id_pedidos']);

    $sql_update = "UPDATE pedidos_entregados SET id_pedidos = ' $pedidos_entregados' WHERE id = $id_pendientes";
    mysqli_query($conexion, $sql_update);
}

// Obtener pedidos
$sql = "SELECT * FROM pedidos_pendientes";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administar Pedidos Pendientes</title>
     <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h2 class="titulos">Lista de Pedidos</h2>
<table>
    <tr>
        <th class="titulos">ID Pendientes:</th>
        <th class="titulos">ID Usuario:</th>
        <th class="titulos">Monto:</th>
        <th class="titulos">Fecha pedido:</th>
    </tr>
 <?php
while($id_pendientes = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $id_pendientes['id-pendientes']; ?></td>
            <td><?php echo $id_pendientes['id_usuario']; ?></td>
            <td><?php echo $id_pendientes['monto']; ?></td>
            <td><?php echo $id_pendientes['fecha_pedido']; ?></td>
            <td>
                <form method="post" action="">
                    <input type="hidden" name="id_pedido" value="<?php echo $id_pendientes['id_pendientes']; ?>">
                    <select name="nuevo_estado">
                        <option value="pendiente" <?php if ($pedido['estado'] === 'pendiente') echo 'selected'; ?>>Pendiente</option>
                        <option value="entregado" <?php if ($pedido['estado'] === 'entregado') echo 'selected'; ?>>Entregado</option>
                    </select>
                    <button type="submit">Actualizar</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
<?php
// Cerrar conexión
mysqli_close($conexion);
?>
</body>
</html>
