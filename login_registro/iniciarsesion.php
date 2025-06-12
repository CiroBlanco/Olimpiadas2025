<?php
include('../componentes/conexion.php');
session_start();

if (isset($_SESSION['usuario'])) {
    echo'<script>
       alert("Para ingresar a esta pagina, no debe tener una sesion activa");
       window.location("index.php");
       </script>';
}
else
{
    $nombre_usuario=$_POST['nombre_usuario'];
    $contrasena=$_POST['contrasena'];
    $contra_encriptada=md5($contrasena); //ENCRIPTACION DE CONTRASEÑA DE FORMULARIO
    $sql="SELECT * FROM usuario WHERE nombre_usuario='".$nombre_usuario."'"; //CONSULTAMOS SI EXISTE EL USUARIO
    $resultado=mysqli_query($conexion,$sql);

    if(mysqli_num_rows($resultado)>0)
    { //SI EXISTE LA CUENTA
        $datos=mysqli_fetch_assoc($resultado);
        var_dump($contra_encriptada );
        var_dump($datos['contrasena'] );
        if ($contra_encriptada==$datos['contrasena'])
        { //SI LAS CONTRASEÑAS COINCIDEN
         $_SESSION['usuario']=$datos['usuario']; //INICIAMOS SESION
         $_SESSION['admin']=$datos['admin'];
         var_dump($_SESSION);
         header("Location: index.php");
        }
        else
        {
            //si las contraseñas no coinciden
            echo'<script>
            alert("contraseña incorrecta, por favor intente de nuevo");
            </script>';
        }
    }
    else {
        //no existe la cuenta
        echo'<script>
            alert("Usuario ingresado no existe, por favor, verifique la cuenta o registrese ");
            window.location("formulario_registrarse.php");
            </script>';
    }
}
?>
