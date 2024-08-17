<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - Laila Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlTCwM98WZRVI+5/Tvz3qW652CJhCqZf2XMRlueXBfIYCQQ6lY6kCQ8G8zq3lYKfBMLnjPZJknYvw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="path/to/fonts/fontawesome.css">
</head>

<body>
  <!-- Contenido de tu página -->

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
  <img src="contacta11.jpg" alt="Descripción de la imagen" style="width: 90%; height: 300px;">


         <!--contacto-->
         <div class="container">
  <div class="text-container">
    <p class="text-center text-muted-foreground">
      Si tiene una <span class="text-blue-600">URGENCIA</span>, por favor comuníquese vía telefónica o acuda a
      nuestro hospital.
    </p>
    <p class="text-center text-muted-foreground">
      Para solicitar una <span class="text-blue-600">CITA</span>, por favor comuníquese vía telefónica o acuda a
      nuestro hospital.
    </p>
  </div>

  <div class="grid-container">
    <a href="tel:5555369137" class="card card-urgencias">
      <div class="card-content">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon"
        >
          <path d="M11 2a2 2 0 0 0-2 2v5H4a2 2 0 0 0-2 2v2c0 1.1.9 2 2 2h5v5c0 1.1.9 2 2 2h2a2 2 0 0 0 2-2v-5h5a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-5V4a2 2 0 0 0-2-2h-2z"></path>
        </svg>
        <h2 class="text-xl font-bold">URGENCIAS</h2>
        <p class="mt-2 text-base">perros y gatos</p>
        <p class="mt-4 text-xl font-bold">55 5536 9137</p>
      </div>
    </a>
    <a href="tel:5555369137" class="card card-citas">
      <div class="card-content">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon"
        >
          <path d="M8 2v4"></path>
          <path d="M16 2v4"></path>
          <rect width="18" height="18" x="3" y="4" rx="2"></rect>
          <path d="M3 10h18"></path>
          <path d="m9 16 2 2 4-4"></path>
        </svg>
        <h2 class="text-xl font-bold">CITAS</h2>
        <p class="mt-4 text-xl font-bold">55 5536 9137</p>
      </div>
    </a>
  </div>
</div>

<!--fin de contacto-->

<!-- Sección de formulario -->
<div class="info-section">
  <p class="info-text">
    Si tiene una URGENCIA o quiere agendar una CITA, por favor comuníquese al <strong>55 5536 9137</strong>.
    Si tiene una duda, pregunta o consulta, déjenos sus datos y mensaje y nos pondremos en contacto con usted.
  </p>
  <div class="container">
    <div class="form-container">
      <form id="contact-form" class="contact-form" method="POST" action="procesar_formulario.php">
        <label for="name">*Nombre(s) y Apellido(s)</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">*Correo electrónico</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">*Teléfono</label>
        <input type="tel" id="phone" name="phone" required>
        
        <label for="message">*Mensaje</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        
        <label>
          <input type="checkbox" name="subscribe"> Quiero suscribirme a comunicaciones del Hospital Veterinario Delta
        </label>
        
        <div class="button-container">
          <button type="submit">ENVIAR</button>
          <button type="reset">LIMPIAR</button> <!-- Botón de limpiar -->
        </div>
      </form>
    </div>
    <div class="logo-and-social">
      <img src="logo.png" alt="Logo del hospital" class="logo">
      <div class="open-hours">Abierto 24 horas</div>
      <div class="social-icons">
      <a href="https://www.facebook.com/tu_perfil_de_facebook" target="_blank"><img src="facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/tu_perfil_de_instagram" target="_blank"><img src="instagram.png" alt="Instagram"></a>
        <a href="https://wa.me/tu_numero_de_whatsapp" target="_blank"><img src="whatsapp.png" alt="WhatsApp"></a>
        <a href="https://twitter.com/tu_perfil_de_twitter" target="_blank"><img src="twitter.png" alt="Twitter"></a>
        <a href="mailto:tu_correo_electronico@example.com" target="_blank"><img src="email.png" alt="Email"></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin de Sección de formulario -->

<div class="hospital-info">
  <h2>Hospital</h2>
  <hr class="red-line">
  <p>Urgencias perros y gatos, consultas generales nocturnas para perros y gatos, especialidades para perros y gatos, Fauna, Hospitalización y Cirugías.</p>
  
  <p><strong>Dirección:</strong> Manzana 035, 52044 Santa María Atarasquillo, Méx.</p>
  
  <p><strong>Horario:</strong> Todos los días, 24 horas</p>
  
  <p><strong>Teléfono:</strong> <a href="tel:+525555369137"><i class="fa-solid fa-phone"></i>55 5536 9137</a></p>
  
  <p><a href="https://www.google.com/maps?q=Manzana+035,+52044+Santa+Mar%C3%ADa+Atarasquillo,+M%C3%A9x." target="_blank"><i class="fa-solid fa-map"></i>Ver mapa</a></p>
  
  <p><a href="https://waze.com/ul?q=Manzana+035,+52044+Santa+Mar%C3%ADa+Atarasquillo,+M%C3%A9x." target="_blank"><i class="fa-brands fa-waze"></i>Ir con Waze</a></p>
  
  <p><a href="https://www.google.com/maps/dir//Manzana+035,+52044+Santa+Mar%C3%ADa+Atarasquillo,+M%C3%A9x." target="_blank"><i class="fa-solid fa-arrow-turn-right"></i>Ir con Google Maps</a></p>
  
</div>




    <section id="ubicacion">
        <h2>Ubicación</h2>
        <p>Encuentra nuestra ubicación en el mapa y visita nuestras instalaciones.</p>
        <!-- Puedes agregar un mapa interactivo aquí -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.557862106406!2d-99.28658188577408!3d19.24743698628516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1b6d80ecda855%3A0xd6bfe749a5412a9c!2sSanta%20Mar%C3%ADa%20Atarasquillo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1698105817060!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body >
</html>
