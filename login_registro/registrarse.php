<?php
include('../componentes/conexion.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

$consultausuario="SELECT * FROM usuario WHERE email='".$email."'";
$resultado=mysqli_query($conexion,$consultausuario);

if (mysqli_num_rows($resultado)>0) {
   echo'<script>
            alert("Este usuario ya esta registrado.Por favor,inicie sesion);
            window.location("iniciarsesion.php");
        </script>';
} else {
    $contra_encriptada = md5($contrasena);
    $insertar_usuario= "INSERT INTO `usuario`(`nombre`,`email`,
     `nombre_usuario`, `contrasena`, `admin`) VALUES (
     '".$nombre."',
     '".$email."',
     '".$nombre_usuario."',
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