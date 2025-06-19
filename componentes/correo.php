<?php
session_start();
include('conexion.php');
$sql = "SELECT correo FROM idpedido";
$resultado = $conexio=mysql_query($sql);
if ($resultado->num_rows > 0) {
    // Recorremos todos los correos
    while ($row = $resultado->fetch_assoc()) {
        $correo_usuario = $row["idcorreo"];
         $sql_pedidos = "SELECT * FROM pedidos_entregados WHERE idpedidos = '$idpedidos'";
        $result_pedidos = $conexion->query($sql_pedidos);
        if ($result_pedidos->num_rows > 0)   {
            while ($pedido = $result_pedidos->fetch_assoc()) {
                $mensaje .= "Usuario: " . $id_usuario['usuario'] . "\n";
                $mensaje .= "Fecha del pedido: " . $fecha_pedido['cantidad'] . "\n";
                $mensaje .= "Fecha: " . $pedido['fecha'] . "\n\n";
            }

            $asunto = "Detalle de tu compra";
            $cabeceras = "From: tu_correo@tusitio.com";

            // Enviar correo
            if (mail($correo_usuario, $asunto, $mensaje, $cabeceras)) {
                echo "Correo enviado a $correo_usuario<br>";
            } else {
                echo "Error al enviar a $correo_usuario<br>";
            }
        } else {
            echo "No hay pedidos para $correo_usuario<br>";
        }
    }
} else {
    echo "No hay correos registrados.";
}

$conn->close();
?>
