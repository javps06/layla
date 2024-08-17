<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiénes Somos - Layla Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <a href="inicio.php">
      <img src="logo.png" alt="Layla Pet Logo" class="contrayendo">
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

  <section id="quienes-somos" class="quienes-somos">
    <img src="quienes-somos.jpg" alt="Descripción de la imagen" style="width: 500%; height: 250px;">
  
    <h2>Quiénes Somos</h2>
    <p class="descripcion">
      <span class="nombre">Layla Pet</span> comenzó como un innovador proyecto de la Universidad Tecnológica del Valle de Toluca en 2015. Somos una empresa 100% mexicana dedicada a la medicina veterinaria de perros y gatos, con la misión de revolucionar la atención veterinaria en México. Nuestro objetivo es combinar la calidez humana con una atención especializada de primer nivel, ofreciendo un entorno en el que los mejores especialistas colaboran para brindar alternativas y tratamientos óptimos para cada uno de nuestros pacientes.
      <br><br>
      <span class="nombre">Layla Pet</span> es sinónimo de dedicación, innovación y compromiso con el bienestar de tus mascotas. Cada día trabajamos para ofrecer el mejor cuidado, integrando tecnología avanzada y conocimientos especializados para asegurar la salud y felicidad de tus animales.
    </p>
    <div class="logo-container">
      <img src="logo.png" alt="Layla Pet Logo">
    </div>
  
    <div class="linea-separadora"></div>
  
    <div class="grid-container">
      <div class="mision">
        <h3>MISIÓN</h3>
        <hr class="linea-separadora">
        <p>
          Brindar con calidad humana y profesionalismo la mejor atención a nuestros pacientes y sus propietarios, asegurando un entorno de cuidado y respeto para cada animal que entra en nuestras instalaciones.
        </p>
      </div>
  
      <div class="vision">
        <h3>VISIÓN</h3>
        <hr class="linea-separadora">
        <p>
          Ser el mejor sistema de salud veterinaria en nuestra región, destacándonos por nuestra especialización, capacitación constante de nuestros médicos, y la combinación de tecnología y conocimiento para avanzar en la Medicina Veterinaria.
        </p>
      </div>
  
      <div class="valores">
        <h3>VALORES</h3>
        <hr class="linea-separadora">
        <ul>
          <li>Honestidad</li>
          <li>Compromiso</li>
          <li>Innovación</li>
          <li>Respeto</li>
        </ul>
      </div>
    </div>
  </section>

  <hr class="linea-separadora">

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
