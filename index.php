<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>olimpiadas2025</title>
</head>
<body>
  <?php
  include('./componentes/conexion.php');
  session_start();
if(!isset($_SESSION['usuario'])){
  echo'<header class="header">
        <nav>
             <ul>
                <li><a href="#">Inicio</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="./componentes/paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="./componentes/paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="./componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="./componentes/estadias.php">Estadias</a></li>
              <li class="dropdown">
                    <button class="dropbtn">Pasajes Aereos</button>
                    <div class="dropdown-contenido">
                        <a href="./componentes/pasajes_nacionales.php">Pasajes Nacionales</a>
                        <a href="./componentes/pasajes_internacionales.php">Pasajes Internacionales</a>
                    </div>
                </li>
                <li><a href="./login_registro/formulario_registrarse.php">Registrarse</a></li>
                <li><a href="./login_registro/formulario_iniciarsesion.php">Iniciar Sesion</a></li>
            </ul>
       </nav>
</header>';
}else{
  echo'<header class="header">
        <nav>
             <ul>
                <li><a href="#">Inicio</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Paquetes Turísticos</button>
                    <div class="dropdown-contenido">
                        <a href="./componentes/paquetes_nacionales.php">Paquetes Nacionales</a>
                        <a href="./componentes/paquetes_internacionales.php">Paquetes Internacionales</a>
                    </div>
                </li>
                <li><a href="./componentes/alquilervehiculos.php">Alquiler Vehiculos</a></li>
                <li><a href="./componentes/estadias.php">Estadias</a></li>
              <li class="dropdown">
                    <button class="dropbtn">Pasajes Aereos</button>
                    <div class="dropdown-contenido">
                        <a href="./componentes/pasajes_nacionales.php">Pasajes Nacionales</a>
                        <a href="./componentes/pasajes_internacionales.php">Pasajes Internacionales</a>
                    </div>
                </li>
                <li><a href="./componentes/perfil.php" class="perfilboton"> <ion-icon name="person-circle-outline"></ion-icon></a></li>
                <li><a href="./componentes/carrito.php" class="carrito"> <ion-icon name="cart-outline"></ion-icon></a></li>
            </ul>
       </nav>
</header>';
}
?>
     <h1 class="titulos">Agencia de Viajes</h1> 
     <img src="imageneslogos/logo (2).png" alt="" class="logo">
     <h3 class="tituloimg">Disfruta de tus destinos favoritos con la mejor compañía y a precios increibles</h3> 

      <div class="container">

  <!-- imagenes anchas con texto -->
  <div class="mySlides">
    <div class="numbertext">1 / 10</div>
      <img src="imageneslogos/Presentación cultura y tradiciones de Colombia ilustrativo creativo azul y amarillo (1).png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 10</div>
      <img src="imageneslogos/Presentación cultura y tradiciones de Colombia ilustrativo creativo azul y amarillo.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 10</div>
      <img src="imageneslogos/Presentación cultura y tradiciones de España ilustrativo divertido rojo y amarillo.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 10</div>
      <img src="imageneslogos/Presentación historia y cultura de Argentina ilustrativo creativo azul.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 10</div>
      <img src="imageneslogos/Presentación historia y cultura de Chile fotográfico profesional azul rojo y blanco.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 10</div>
      <img src="imageneslogos/Presentación historia, tradiciones y cultura de Paraguay tradicional moderno azul y rojo.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">7 / 10</div>
      <img src="imageneslogos/Presentación historia y cultura de México divertido ilustrativo verde.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 10</div>
      <img src="imageneslogos/Presentación historia y cultura de México divertido ilustrativo verde (1).png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">9 / 10</div>
      <img src="imageneslogos/italia.png" style="width:100%">
  </div>

<div class="mySlides">
    <div class="numbertext">10 / 10</div>
      <img src="imageneslogos/eeuu.png" style="width:100%">
  </div>

  <!-- botones de sig y anterior -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- texto en imagenes-->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- imagenes de vista preliminar -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación cultura y tradiciones de Colombia ilustrativo creativo azul y amarillo (1).png" style="width:100%" onclick="currentSlide(1)" alt="Colombia">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación cultura y tradiciones de Colombia ilustrativo creativo azul y amarillo.png" style="width:100%" onclick="currentSlide(2)" alt="Alemania">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación cultura y tradiciones de España ilustrativo divertido rojo y amarillo.png" style="width:100%" onclick="currentSlide(3)" alt="España">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación historia y cultura de Argentina ilustrativo creativo azul.png" style="width:100%" onclick="currentSlide(4)" alt="Argentina">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación historia y cultura de Chile fotográfico profesional azul rojo y blanco.png" style="width:100%" onclick="currentSlide(5)" alt="Chile">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación historia, tradiciones y cultura de Paraguay tradicional moderno azul y rojo.png" style="width:100%" onclick="currentSlide(6)" alt="Paraguay">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación historia y cultura de México divertido ilustrativo verde.png" style="width:100%" onclick="currentSlide(7)" alt="México">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/Presentación historia y cultura de México divertido ilustrativo verde (1).png" style="width:100%" onclick="currentSlide(8)" alt="Japón">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/italia.png" style="width:100%" onclick="currentSlide(9)" alt="Italia">
    </div>
    <div class="column">
      <img class="demo cursor" src="imageneslogos/eeuu.png" style="width:100%" onclick="currentSlide(10)" alt="Estados Unidos">
    </div>
  </div>
</div>
    <?php
     include('./componentesinicio/footer.php')
     ?>
     <script src="js.js"></script>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>