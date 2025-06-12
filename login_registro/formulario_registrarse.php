<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Olimpiadas2025</title>
  
</head>
<body>
  '<header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../componentes/paquetesturisticos.php">Paquetes Turisticos</a></li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="#">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
            </ul>
       </nav>
     </header>';
   <h1 class="titulos">Registrarse</h1>
    <form action="registrarse.php" method="POST">
            <div class="campo">
               <label for="nombre">Nombre Completo:</label>
            <input type="text" name= "nombre" id="nombre" placeholder=""required autocomplete= "off">
            </div>
            <div class="campo">
                 <label for="correoelectronico">Correo Electronico:</label>
               <input type="email" name="correoelectronico"id="correoelectronico"placeholder=""required autocomplete= "off">
            </div>
            <div class="campo">
               <label for="usuario">Usuario:</label>
              <input type="text" name="usuario" id="usuario" placeholder=""required autocomplete= "off">
            </div>
             <div class="campo">
           <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="" required autocomplete= "off">
            </div>
             <input type="reset" value="Cancelar">
             <input type="submit" value="Registrarse">
</div>
    </form>

  
</body>
</html>