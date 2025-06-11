<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    //incluimos el menu
    include('./php/componentes/menu_index.php');

    ?>
    <center><h1></h1></center>
  
     <h1>Registrarse</h1>
    <form action="registrarse.php" method="POST">
            <div class="">
            <input type="text" name= "nombre" id="nombre" placeholder=""required autocomplete= "off">
              <label for="nombre">Nombre:</label>
            </div>
            <div class="">
            <input type="text"name="apellido" id="apellido"placeholder=""required autocomplete= "off">
             <label for="apellido">Apellido:</label>
            </div>
            <div class="">
               <input type="email" name="correoelectronico"id="correoelectronico"placeholder=""required autocomplete= "off">
             <label for="correoelectronico">Correo Electronico:</label>
            </div>
            <div class="">
              <input type="text" name="usuario" id="usuario" placeholder=""required autocomplete= "off">
             <label for="usuario">Usuario:</label>
            </div>
             <div class="">
            <input type="password" name="contrasena" id="contrasena" placeholder="" required autocomplete= "off">
            <label for="contrasena">Contraseña:</label>
            </div>
             <input type="reset" value="Cancelar">
             <input type="submit" value="Registrarse">
</div>
    </form>

  
</body>
</html>