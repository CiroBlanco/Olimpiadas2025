<?php
 include('./php/componentes/menu_index.php');
?>
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

    <center><h1>Olimpiadas-2025</h1></center>
    
    <div class="form">
        <h1>Inicio de Sesión</h1>
        
        <form action="iniciarsesion.php" method="POST">
            <div class="form-group">
             <label>Nombre de Usuario:</label>
             <input type="text"name="email" required autocomplete="off">
            </div>
            <div class="form-group">
             <label>Contraseña:</label>
             <input type="password" name="contra" required autocomplete="off">
            </div>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>