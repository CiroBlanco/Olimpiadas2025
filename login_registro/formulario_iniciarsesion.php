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
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="../componentes/paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="../componentes/paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="../componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="../componentes/estadias.php">Estadias</a></li>
              <li class="dropdown">
                    <button class="dropbtn">Pasajes Aereos</button>
                    <div class="dropdown-contenido">
                        <a href="../componentes/pasajes_nacionales.php">Pasajes Nacionales</a>
                        <a href="../componentes/pasajes_internacionales.php">Pasajes Internacionales</a>
                    </div>
                </li>
                <li><a href="formulario_registrarse.php">Registrarse</a></li>
                <li><a href="#">Iniciar Sesion</a></li>
                <li><a href="../componentes/perfil.php" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="../componentes/carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
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
</body>
</html>