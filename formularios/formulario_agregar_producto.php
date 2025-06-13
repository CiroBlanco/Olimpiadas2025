<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
</head>

<?php
include('../componentes/conexion.php');
?>

<body>
    <h1 class="titulos">Agregar Producto</h1>
    <div class="form">
    <form action="../componentes/agregar_producto.php" method="POST">

     <div class="campo">
        <label for="nombre">Nombre:</label>
        <input required type="text" name="nombre" id="nombre" placeholder="" required autocomplete="off">
     </div>
    <div class="campo">
        <label for="descripcion">Descripcion:</label>
        <input required type="text" name="descripcion" id="descripcion" placeholder="" required autocomplete="off">
     </div>

     <div class="campo">
        <label for="precio_unitario">Precio Unitario:</label>
        <input required type="text" name="precio_unitario" id="precio_unitario" placeholder="" required autocomplete="off">
     </div>
    <div class="campo">
        <label for="tipo">Tipo Producto:</label>
        <select name="tipo" id="tipo">
            <?php $sql = "SELECT * FROM tipo_producto";
            $resultado = mysqli_query($conexion,$sql);
            while ($tipo = mysqli_fetch_assoc($resultado)) {
               echo "<option value=".$tipo['id_tipo'].">".$tipo['nombre']."</option>";
            }?>
        </select>
     </div>

     <input type="reset" value="Cancelar">
     <input type="submit" value="Agregar">
    </div>
    </form>
</body>
</html>