<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios - Laila Pet</title>
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


  <section id="Servicios" class="servicios">
  <img src="quienes-somos.jpg" alt="Descripción de la imagen" style="width: 100%; height: 250px;">

  <h2>Servicios</h2>

  <div class="linea-separadora"></div>

  <div class="grid-container">
    <div class="Farmacia">
      <h3>Farmacia</h3>
      <hr class="linea-separadora">
      <img src="farmacia-s.jpg" alt="">
      <p>
        Proporcionamos atención experta y compasiva para todos los animales, asegurando el mejor cuidado y respeto en un entorno profesional.
      </p>
      <a href="farmacia.php" class="btn btn-primary">Farmacia</a>
    </div>

    <div class="jugueteria">
      <h3>Juguetería</h3>
      <hr class="linea-separadora">
      <img src="juguetes-s.jpg" alt="">
      <p>
        Ofrecemos una selección de juguetes para mascotas, apoyando su bienestar y diversión con productos de alta calidad.
      </p>
      <a href="jugueteria.php" class="btn btn-primary">Juguetería</a>
    </div>

    <div class="estetica">
      <h3>Estética</h3>
      <hr class="linea-separadora">
      <img src="estetica.jpg" alt="">
      <p>
        Servicios de estética para mejorar la apariencia de tus mascotas con cuidado y precisión, utilizando técnicas avanzadas y productos de calidad.
      </p>
      <a href="estetica.php" class="btn btn-primary">Estética</a>
    </div>

    <div class="atencion">
      <h3>Urgencias</h3>
      <hr class="linea-separadora">
      <img src="atencion.jpg" alt="">
      <p>
        Servicio permanentemente preparado para atender cualquier urgencia que presente su mascota.
      </p>
      <a href="urgencias.php" class="btn btn-primary">Urgencias</a>
    </div>
  </div>
</section>

<!-- Sección de formulario de agendar citas -->
<div class="agendar-citas">
  <h2>Agendar Cita</h2>
  <p>Para agendar una cita, por favor complete el siguiente formulario.</p>
  <form id="appointment-form" class="appointment-form" method="POST" action="procesar_cita.php">
    <label for="name">*Nombre(s) y Apellido(s)</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">*Correo electrónico</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">*Teléfono</label>
    <input type="tel" id="phone" name="phone" required>
    
    <label for="service">*Tipo de Servicio</label>
    <select id="service" name="service" required>
      <option value="estetica">Estética</option>
      <option value="cirugia">Cirugía</option>
      <option value="manejo_de_heridas">Manejo de Heridas</option>
      <option value="especialidades">Especialidades</option>
    </select>
    
    <label for="message">*Mensaje</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    
    <div class="button-container">
      <button type="submit">ENVIAR</button>
      <button type="reset">LIMPIAR</button> <!-- Botón de limpiar -->
    </div>
  </form>
</div>
<!-- Fin de Sección de formulario de agendar citas -->



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