<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estética - Laila Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    .tarjetas-estetica {
      display: flex;
      justify-content: space-around;
      padding: 20px;
    }
    .tarjeta {
      text-align: center;
      width: 30%;
    }
    .icono-tarjeta {
      width: 250px; /* Ajusta el tamaño de las imágenes aquí */
      height: auto; /* Mantiene la relación de aspecto */
      margin-bottom: 10px;
    }
  </style>
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

  <!-- SECCIÓN DE ESTÉTICA -->
  <div class="estetica-seccion">
    <img src="estetica.jpg" alt="Descripción de la imagen" class="imagen-estetica">
    <div class="cuadro-estetica">
      <h2 class="titulo-estetica">Servicio de Estética</h2>
      <p class="texto-estetica">Nuestra especialidad es la salud y bienestar de tu mascota, además de mimarlos y ponerlos guapos.</p>
    </div>
  </div>
  <!-- FIN DE SECCIÓN DE ESTÉTICA -->

  <!-- SECCIÓN DE TARJETAS -->
  <div class="tarjetas-estetica">
    <div class="tarjeta">
      <img src="estetica1.jpg" alt="Groomer" class="icono-tarjeta">
      <h3>Groomer</h3>
      <p>Number one<br>Llama a cualquiera de nuestros hospitales para agendar una cita con nosotros de forma sencilla.</p>
    </div>
    <div class="tarjeta">
      <img src="estetica2.jpg" alt="Fleas" class="icono-tarjeta">
      <h3>Fleas</h3>
      <p>Number two<br>Realizamos una revisión visual y física de tu mascota, y revisamos la vigencia de las vacunas (rabia y séxtuple).</p>
    </div>
    <div class="tarjeta">
      <img src="estetica3.png" alt="Dog" class="icono-tarjeta">
      <h3>Dog</h3>
      <p>Number three<br>Al final te confirmamos el servicio que se realizará y la hora en la que puedes pasar a recoger a tu mascota.</p>
    </div>
  </div>
  <!-- FIN DE SECCIÓN DE TARJETAS -->

  <!-- Rectángulo con información adicional -->
  <div class="info-adicional">
    <div class="contenido-info">
      <h2 class="titulo-info">Higiene y Estética</h2>
      <p class="texto-info">Las estéticas caninas son centros especializados en higiene y estética que tienen como finalidad la preservación de la salud de tu mascota, el personal no sólo se ocupa de los cuidados propiamente estéticos, como pueden ser el peinado o el corte de pelo, sino también realiza una inspección de su salud.</p>
      
      <div class="subseccion-info">
        <h3 class="titulo-subseccion">Hospital de Especialidades</h3>
        <p class="texto-subseccion">Sabemos lo importante que son, todas las decisiones las tomas tú.</p>
        <p class="texto-subseccion">Los servicios son programados de acuerdo con las necesidades de los clientes, las visitas se coordinan acorde con la agenda disponible en el establecimiento, en VETME agendamos tu cita para que sea más exacto el tiempo de recibimiento y de entrega, pero de igual manera puedes llegar sin cita y si hay espacio con gusto te atendemos. En el caso de los gatos es forzoso que sea por medio de cita, se requiere el carnet de vacunación vigente y una revisión express para ver el estado físico de la mascota. En muchas ocasiones es necesario sedar a los gatos porque son mascotas que se ponen muy nerviosas por el ruido de la secadora, el baño, etc.</p>
      </div>
    </div>
    
    <!-- Imagen adicional -->
    <img src="bano-ozono-perros.jpg" alt="Imagen Adicional" class="imagen-adicional">
    
    <!-- Rectángulo con borde y texto adicional -->
    <div class="info-extra">
      <p>Durante la inspección, revisamos de manera minuciosa de algún problema presente o futuro, como quistes, problemas de la piel e infecciones del oído, todo escondido debajo del pelo.</p>
    </div>
  </div>
  <!-- fin Rectángulo con información adicional -->

  <!-- Pautas generales de estética -->
  <div class="pautas-estetica">
    <div class="texto-pautas-container">
      <div class="texto-pautas-left">
        <p>El servicio puede incluir lo siguiente:</p>
        <ul class="lista-pautas">
          <li>Baño y corte de pelo</li>
          <li>Deslanado</li>
          <li>Secado</li>
          <li>Limpieza del canal auditivo</li>
          <li>Limpieza de glándulas anales</li>
          <li>Recorte de uñas</li>
          <li>Shaving</li>
        </ul>
      </div>
      <div class="texto-pautas-right">
        <p class="texto-libro">Toma en cuenta el carácter de tu mascota, le podría resultar un poco estresante el recibir este tipo de servicios, sobre todo si es su primera vez.</p>
      </div>
    </div>
  </div>

  <!-- Ubicación -->
  <section id="ubicacion" class="ubicacion">
    <h2>Ubicación</h2>
    <p>Encuentra nuestra ubicación en el mapa y visita nuestras instalaciones.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.557862106406!2d-99.28658188577408!3d19.24743698628516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1b6d80ecda855%3A0xd6bfe749a5412a9c!2sSanta%20Mar%C3%ADa%20Atarasquillo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1698105817060!5m2!1ses!2smx"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>

  <!-- Pie de página -->
  <footer class="footer">
    <p>Manzana 035, 52044 Toluca, México.</p>
    <p>&copy; 2024 Laila Pet. Todos los derechos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Db6MYaBFhFz58H9n6ohgl29+eo5gzDpuwojVO9+8yLzlf6d/JKhkE0+V+bSvLzS2d" crossorigin="anonymous"></script>
</body>

</html>
