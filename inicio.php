<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - Laila Pet</title>
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


  <!-- Carrusel -->
  <section id="inicio">
    <h1>Bienvenidos a Laila Pet</h1>
    <p>Les damos el amor y el respeto que se merecen.</p>

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="3.jpg" class="d-block w-100" alt="...">
        </div>

        
        <div class="carousel-item">
          <img src="perrito.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="family.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="pijama.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images.jpg" class="d-block w-100" alt="...">
        </div>




      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- Fin del Carrusel -->

  <!-- Inicio de servicios-->
  <section id="servicios" class="servicios">
    <h2>Nuestros Servicios</h2>
    <div class="servicios-container">
      <div class="servicio">
        <img src="juguetes.jpg" alt="Servicio 1" class="servicio-img">
        <a href="servicios.php?servicio=juguetes" class="btn btn-primary">Juguetes</a>
      </div>
      <div class="servicio">
        <img src="farmacia.jpg" alt="Servicio 2" class="servicio-img">
        <a href="servicios.php?servicio=farmacia" class="btn btn-primary">Farmacia</a>
      </div>
      <div class="servicio">
        <img src="especialidades.jpg" alt="Servicio 3" class="servicio-img">
        <a href="servicios.php?servicio=especialidades" class="btn btn-primary">Especialidades</a>
      </div>
      <div class="servicio">
        <img src="citas.jpg" alt="Servicio 4" class="servicio-img">
        <a href="servicios.php?servicio=citas" class="btn btn-primary">Citas</a>
      </div>
      <!-- Agrega más servicios aquí -->
    </div>
  </section>
  <!-- Fin de servicios -->

  <!-- Contenedor para las secciones -->

  <div class="container" >
    <!-- Comentarios -->
    <section class="comentarios-ayuda">
      <div class="caja-comentarios">
        <h2>Comentarios</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required placeholder="Nombre">
          </div>
          <div class="mb-3">
            <label for="comentario" class="form-label">Comentario</label>
            <textarea id="comentario" name="comentario" class="form-control" required rows="5" placeholder="Escribe tu comentario aquí..."></textarea>
          </div>
          <label for="foto" class="btn btn-primary">
            Subir imagen
            <input type="file" id="foto" name="foto" accept="image/*" style="display: none;">
          </label>
          <button type="submit" class="btn btn-primary">Enviar comentario</button>
        </form>
        <?php
        // Procesar el formulario
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Verificar si los campos del formulario están definidos y no son nulos
          if (isset($_POST['nombre']) && isset($_POST['comentario']) && isset($_FILES['foto'])) {
            // Conectar a la base de datos
            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "laylapet";

            $conexion = new mysqli($server, $user, $pass, $db);

            if ($conexion->connect_error) {
              die("Error de conexión: " . $conexion->connect_error);
            }

            // Insertar el comentario en la base de datos
            $nombre = $_POST['nombre'];
            $comentario = $_POST['comentario'];
            $foto = $_FILES['foto'];

            // Guardar la foto en un directorio
            $directorio = 'fotos/';
            $nombre_foto = $foto['name'];
            $ruta_foto = $directorio . $nombre_foto;
            move_uploaded_file($foto['tmp_name'], $ruta_foto);

            // Insertar el comentario en la base de datos
            $sql = "INSERT INTO comentarios (nombre, comentario, foto) VALUES ('$nombre', '$comentario', '$ruta_foto')";
            $conexion->query($sql);

            // Mostrar todos los comentarios
            $sql = "SELECT * FROM comentarios";
            $resultado = $conexion->query($sql);

            while ($fila = $resultado->fetch_assoc()) {
              echo "<p>Nombre: " . $fila['nombre'] . "<br>
              Comentario: " . $fila['comentario'] . "<br>
              Foto: <img src='" . $fila['foto'] . "' width='100' height='100'><br>
              <hr>";
            }
          } else {
            // Manejar el caso en el que los campos no están definidos o son nulos
            echo "Por favor, complete todos los campos del formulario.";
          }
        }
        ?>
      </div>
      <hr class="linea-separadora">

      <div class="ayudanos-mejorar">
        <h2>Ayúdanos a Mejorar</h2>
        <p>Queremos ofrecer el mejor servicio posible y tu opinión es crucial para nosotros. Por favor, comparte tus sugerencias y comentarios para ayudarnos a mejorar.</p>
        <form action="enviar_sugerencia.php" method="post">
          <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
          </div>
          <div class="mb-3">
            <label for="sugerencia" class="form-label">Sugerencia</label>
            <textarea class="form-control" id="sugerencia" name="sugerencia" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar Sugerencia</button>
        </form>
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
