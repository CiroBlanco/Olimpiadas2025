<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Olimpiadas2025</title>
  
</head>
<body>
    <?php
    //incluimos el menu
    include('../componentes/menu_index.php');
    ?>
   <h1 class="titulos">Registrarse</h1>
    <form action="registrarse.php" method="POST">
            <div class="campo">
            <input type="text" name= "nombre" id="nombre" placeholder=""required autocomplete= "off">
              <label for="nombre">Nombre Completo:</label>
            </div>
            <div class="campo">
               <input type="email" name="correoelectronico"id="correoelectronico"placeholder=""required autocomplete= "off">
             <label for="correoelectronico">Correo Electronico:</label>
            </div>
            <div class="campo">
              <input type="text" name="usuario" id="usuario" placeholder=""required autocomplete= "off">
             <label for="usuario">Usuario:</label>
            </div>
             <div class="campo">
            <input type="password" name="contrasena" id="contrasena" placeholder="" required autocomplete= "off">
            <label for="contrasena">Contraseña:</label>
            </div>
             <input type="reset" value="Cancelar">
             <input type="submit" value="Registrarse">
</div>
    </form>

  
</body>
</html>