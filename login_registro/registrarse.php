<?php
include('./php/componentes/conexion.php');
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email=$_POST['correoelectronico'];

$consultausuario="SELECT * FROM usuario WHERE email='".$correo_electronico."'";
$resultado=mysqli_query($conexion,$consultausuario);

if (mysqli_num_rows($resultado)>0) {
   echo'<script>
            alert("Este usuario ya esta registrado.Por favor,inicie sesion);
            window.location("iniciarsesion.php");
        </script>';
} else {
    $contra_encriptada = md5($contrasena);
    $insertar_usuario= "INSERT INTO `usuario`(`nombre`, `apellido`,`email`,
     `usuario`, `contrasena`, `tipo_usuario`) VALUES (
    '".$nombre."',
    '·".$apellido."',
    '".$correo_electronico."',
    '".$usuario."',
    '".$contra_encriptada."',
    '0')";

    $resultado_insercion =mysqli_query($conexion,$insertar_usuario);

    var_dump($resultado_insercion);
    header("Location: formulario_iniciarsesion.php");
    //resultado
    //ifelse if($resultado_insercion)
        //si inserto redirigiar a donde?  -> header("Location: iniciarsesion.php")
        //si no inserto, tirar error
        
}
?>