<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URGENCIAS - Laila Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <a href="inicio.php">
      <img src="logo.png" alt="Laila Pet Logo" class="contrayendo">
    </a>
    <nav>
      <ul>
        <div class="btn-group" role="group" aria-label="Default button group">
        <button type="button" class="btn btn-outline-primary"><a href="inicio.php">Inicio</a></button>
          <button type="button" class="btn btn-outline-primary"><a href="Quienes_somos.php">Quiénes Somos</a></button>
          <button type="button" class="btn btn-outline-primary"><a href="servicios.php">Servicios</a></button>
          <button type="button" class="btn btn-outline-primary"><a href="contacto.php">Contacto</a></button>
          <button type="button" class="btn btn-outline-primary"><a href="inicio_sesion.php">Iniciar sesión</a></button>
          <button type="button" class="btn btn-outline-primary"><a href="carrito.php">Carrito</a></button>
          <button type="button" class="btn btn-outline-primary"><a href="bienvenida.php">Mi perfil</a></button>
        </div>
      </ul>
    </nav>
  </header>

  <script>
    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        document.querySelector('header').classList.add('scroll-down');
        document.body.classList.add('scroll-down');
      } else {
        document.querySelector('header').classList.remove('scroll-down');
        document.body.classList.remove('scroll-down');
        setTimeout(function () {
          document.querySelector('header').classList.remove('contrayendo');
        }, 300);
      }
    });
  </script>
  <!-- fin de encabezado -->

<!--SECCION DE URGENCIAS-->

<!--SECCION DE URGENCIAS-->
<div class="urgencias-container">
  <img src="quienes-somos.jpg" alt="Descripción de la imagen" class="urgencias-imagen">
  <div class="urgencias-texto">
    <h2>URGENCIAS VETERINARIAS</h2>
    <p>Veterinario 24 horas</p>
    <p>Abrimos las 24 horas, todos los días, incluyendo sábados, domingos y feriados.</p>
    <p>Atendemos emergencias y consultas generales sin cita para perros y gatos.</p>
    <p class="urgencias-abierto">ESTAMOS ABIERTOS AHORA</p>
    <p>Acude a nuestro hospital</p>
  </div>
</div>
<!--FIN DE SECCION DE URGENCIAS-->
<!-- CUADRO CON TELÉFONO Y TEXTO SOBRE LAYLAPET -->
<div class="contacto-urgencias">
  <div class="rectangulo-contacto">
    <img src="llamada-telefonica.png" alt="Teléfono" class="icono-telefono">
    <a href="tel:5555369137" class="texto-contacto">URGENCIAS perros y gatos: 55 5536 9137</a>
  </div>
</div>


<!-- TEXTO SOBRE LAYLAPET -->
<div class="laylapet-servicios">
  <h3>Nuestros servicios y especialidades</h3>
  <p>LaylaPet es un hospital veterinario dedicado a cuidar la salud integral de tu mascota con un equipo de veterinarios altamente capacitados que emplean tecnología de punta para ofrecerte un servicio de calidad.</p>
</div>



<!--FIN DE SECCION DE URGENCIAS-->

<!-- Tarjetas  -->

<div class="tarjetas-container">
  <div class="tarjeta">
    <img src="cirujia.jpg" alt="Cirugía" class="imagen-tarjeta">
    <div class="rectangulo-texto">
      <p>Cirugía</p>
    </div>
  </div>
  <div class="tarjeta">
    <img src="heridas.jpeg" alt="Manejo de Heridas" class="imagen-tarjeta">
    <div class="rectangulo-texto">
      <p>Manejo de Heridas</p>
    </div>
  </div>
  <div class="tarjeta">
    <img src="especialidades.jpg" alt="Especialidades" class="imagen-tarjeta">
    <div class="rectangulo-texto">
      <p>Especialidades</p>
    </div>
  </div>
</div>

<!-- FIN DE TARJETAS -->

<!-- texto-->

<div class="informacion-urgencias">
  <div class="texto-izquierda">
    <p>En el Hospital Veterinario de Alta Especialidad DELTA® sabemos la importancia de tener un servicio permanentemente preparado para atender cualquier urgencia respecto a la salud de su perro o gato. Por esta razón, contamos con Urgencias veterinarias 24 horas, los 365 días del año.</p>
    <p><span class="resaltado">Brindamos el máximo soporte médico y tecnológico para atender a sus mascotas en ese momento donde su vida puede correr peligro. </span></p>
  </div>
  <div class="lista-urgencias">
    <p>* Algunos padecimientos que requieren atención de urgencia:</p>
    <ul>
      <li>Intoxicaciones</li>
      <li>Quemaduras extensas</li>
      <li>Dolor severo</li>
      <li>Deshidratación</li>
      <li>Politraumatizados</li>
      <li>Convulsiones</li>
      <li>Hemorragias</li>
    </ul>
  </div>
</div>


<!-- FIN DE TEXTO-->

<!-- CUADRO CON TELÉFONO Y TEXTO SOBRE LAYLAPET -->
<div class="contacto-urgencias">
  <div class="rectangulo-contacto">
    <img src="llamada-telefonica.png" alt="Teléfono" class="icono-telefono">
    <a href="tel:5555369137" class="texto-contacto">URGENCIAS perros y gatos: 55 5536 9137</a>
  </div>
</div>

<!-- fin de cuadro -->
 
   <!-- Ubicación -->
<section id="ubicacion" class="ubicacion">
  <h2>Ubicación</h2>
  <p>Encuentra nuestra ubicación en el mapa y visita nuestras instalaciones.</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.557862106406!2d-99.28658188577408!3d19.24743698628516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1b6d80ecda855%3A0xd6bfe749a5412a9c!2sSanta%20Mar%C3%ADa%20Atarasquillo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1698105817060!5m2!1ses!2smx"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
</div>

<!-- Pie de página -->
<footer class="footer">
<p>Manzana 035, 52044 Santa María Atarasquillo, Méx.</p>
<p>Teléfono: +52 721 112 1974</p>
<p>Email: <a href="mailto:lailapet12@gmail.com">lailapet12@gmail.com</a></p>
<div class="social-media">
  <a href="https://www.facebook.com/lailapet12" target="_blank">
    <img src="facebook.png" alt="Facebook">
  </a>
  <a href="https://www.instagram.com/lailapet12" target="_blank">
    <img src="instagram.png" alt="Instagram">
  </a>
  <a href="https://twitter.com/lailapet12" target="_blank">
    <img src="twitter.png" alt="Twitter">
  </a>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO2O2z2z2VlgmRov6dL8iM7aW/18V6p3p6DqF1LhF81rShT0IYldK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ppqTkAvPbH8e8z8s3lXUq21+6lD1rR1QF+p+YFpDGMipN+9Re1f2E1eEOV7EdSU0" crossorigin="anonymous"></script>
</body>

</html>