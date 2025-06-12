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
   include ('../componentes/menu_index.php')
    ?>
    <center><h1>Olimpiadas-2025</h1></center>  
    <div class="form">
        <h1>Inicio de Sesión</h1>
        <form action="iniciarsesion.php" method="POST">
            <div class="campo">
             <label>Nombre de Usuario:</label>
             <input type="text"name="email" required autocomplete="off">
            </div>
            <div class="campo">
             <label>Contraseña:</label>
             <input type="password" name="contra" required autocomplete="off">
            </div>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>