<?php 
include('conexion.php');
include('menu_index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>

<h2>Tu Carrito</h2>
<?php

if (isset($_SESSION['id_usuario'])){
    //cargar pedidos del usuario
    $id_usuario = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM pedidos WHERE Id_usuario='".$id_usuario."'";

    if ($resultado = $conexion->query($sql)){
        while($fila = $res->fetch_assoc()){
        echo  "<img src='../".$fila['imagen']."' alt='pequenos_encantos' class='foto'>";
        echo "<br>";
        echo $fila['Nombre'];
        echo "<br>";
        echo "Precio: Usd $".$fila['Precio'];
        echo "<br>";
        echo $fila['Descripcion'];
    }
    }else{
        echo "No se han encontrado productos, añada un carrito al producto por favor.";
    }
}


?>
</body>
</html>