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
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="#">Iniciar Sesion</a></li>
            </ul>
       </nav>
     </header>';
    <center><h1>Olimpiadas-2025</h1></center>  
    <div class="form">
        <h1>Inicio de Sesión</h1>
        <form action="iniciarsesion.php" method="POST">
            <div class="campo">
             <label>Nombre de Usuario:</label>
             <input type="text"name="nombre_usuario" required autocomplete="off">
            </div>
            <div class="campo">
             <label>Contraseña:</label>
             <input type="password" name="contrasena" required autocomplete="off">
            </div>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>