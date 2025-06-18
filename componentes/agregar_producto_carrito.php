<?php
include('conexion.php');

var_dump($_POST);

$id_producto = $_POST['id_producto'];
$cantidad = $_POST ['cantidad'];
//$categoria = $_POST['categoria'];
//$descripcion= $_POST['descripcion'];
//$precio_unitario=$_POST['preciounitario'];
//$id_tipo=$_POST['idtipo'];
$agregar_producto= "INSERT INTO carrito(id_producto,cantidad) VALUES (
'".$id_producto."',
'".$cantidad."'
 )";
    $resultado_agregar = mysqli_query($conexion,$agregar_producto);
    if (!$resultado_agregar) {
    echo "Error al agregar producto: " . mysqli_error($conexion);
    }
exit;
?>