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
                <li><a href="../login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="#">Iniciar Sesion</a></li>
                 <li><a href="" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
     </header>
    <center><h1 class="titulos">Iniciar Sesion</h1></center>  
    <div class="form">
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?> 
</body>
</html>