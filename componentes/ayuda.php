<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Ayuda</title>
</head>
<body>
  <h1 class="titulos">Arma tu viaje soñado con Tecno Travel✈️</h1>
<button class="botonvideo"onclick="abrirModal()">Video del funcionamiento de Tecno Travel📽️</button>
<div id="miModal" class="modal">
    <div class="modal-contenido">
      <span class="cerrar" onclick="cerrarModal()">&times;</span>
      <video id="videoModal" controls>
        <source src="" type="video/mp4">
        Tu navegador no soporta el video.
      </video>
     
    </div>
  </div> 
  <div class="contenedorayuda"> 
  <p class="descripcionp">Aca encontraras toda la ayuda necesaria sobre nuestra pagina <br>
    🆘En la parte superior de la pantalla aparecera el boton "Video del funcionamiento de Tecno Travel" <br>
    🆘Al presionarlos te llevara al video-tutorial que armamos para que no te quedes con dudas <br>
    🆘Alli explica paso por paso como comprar,registrarse y ver tu perfil y carrito <br>
    </p>
    </div>
      <a  class="btnayuda"href="../index.php">INICIO</a>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <?php include('../componentesinicio/footer.php');?> 
<script>
    function abrirModal() {
      document.getElementById('miModal').style.display = 'block';
      document.getElementById('videoModal').play();
    }

    function cerrarModal() {
      const modal = document.getElementById('miModal');
      const video = document.getElementById('videoModal');
      modal.style.display = 'none';
      video.pause();
      video.currentTime = 0;
    }

    // Cerrar modal si se hace clic fuera del contenido
    window.onclick = function(event) {
      const modal = document.getElementById('miModal');
      if (event.target == modal) {
        cerrarModal();
      }
    }
  </script>
</body>
</html>