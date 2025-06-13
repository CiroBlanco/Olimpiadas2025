<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h1 class="titulos">Agregar Producto</h1>
    <form action="agregar_producto.php" method="POST">

     <div class="campo">
        <label for="nombre">Nombre Producto:</label>
        <input type="text" name="nombre" id="nombre" placeholder="" required autocomplete="off">
     </div>

     <div class="campo">
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" placeholder="" required autocomplete="off">
     </div>

     <div class="campo">
        <label for="precio_unitario">Precio Unitario:</label>
        <input type="text" name="precio_unitario" id="precio_unitario" placeholder="" required autocomplete="off">
     </div>

     <input type="reset" value="Cancelar">
     <input type="submit" value="Agregar">
    
    </form>
</body>
</html>