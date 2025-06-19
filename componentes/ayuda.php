<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Ayuda</title>
</head>
<body>
    <h1>Ayuda</h1>
<?php
$seccion = $_POST['seccion'] ?? 'default';
switch ($seccion) {
  case 'alquilervehiculos':
    echo '<a href="alquilervehiculos.php">← Volver a Productos</a>';
    break;

  case 'estadias':
    echo "<p>Esta es la vista del carrito. Podés revisar, eliminar productos o finalizar la compra.</p>";
    echo '<a href="estadias.php">← Volver al Carrito</a>';
    break;

  case 'perfil':
    echo "<p>Desde tu perfil podés modificar tus datos personales, cambiar la contraseña y ver tus pedidos anteriores.</p>";
    echo '<a href="componentes/pasajesaereos.php">← Volver al Perfil</a>';
    break;
    case 'pasajes':
  echo "<p>En esta sección podés enviarnos tus dudas, sugerencias o reclamos. Usá el formulario.</p>";
  echo '<a href="pasejesiternacionales.php">← Volver a Contacto</a>';
  break;
}
?>
</body>
</html>