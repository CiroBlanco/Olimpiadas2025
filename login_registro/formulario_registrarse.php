<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Olimpiadas2025</title>
  
</head>
<body>
  <header class="header">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../componentes/paquetesturisticos.php">Paquetes Turisticos</a></li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
                <li><a href="../componentes/pasajesaereos.php">Pasajes Aereos</a></li>
                <li><a href="#">Registrarse</a></li>
                <li><a href="../login_registro/formulario_iniciarsesion.php">Inicar Sesion</a></li>
                 <li><a href="" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
     </header>
   <h1 class="titulos">Registrarse</h1>
   <div class="form">
<form action="registrarse.php" method="POST">
  <div class="campo">
    <label for="nombre">Nombre Completo:</label>
    <input type="text" name="nombre" id="nombre" placeholder="" required autocomplete="off">
  </div>

  <div class="campo">
    <label for="email">Correo Electrónico:</label>
    <input type="email" name="email" id="email" placeholder="" required autocomplete="off">
  </div>

  <div class="campo">
    <label for="nombre_usuario">Usuario:</label>
    <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="" required autocomplete="off">
  </div>

  <div class="campo">
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" id="contrasena" placeholder="" required autocomplete="off">
  </div>

  <input type="reset" value="Cancelar">
  <input type="submit" value="Registrarse">
</form> 
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?> 
</body>
</html>