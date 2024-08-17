<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmacia - Laila Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
/* Asegurarse de que el contenedor de tarjetas tenga espacio suficiente */
.productos-row {
  display: flex;
  flex-wrap: wrap; /* Permite que las tarjetas se ajusten en varias filas */
  gap: 5rem; /* Ajusta el espacio entre las tarjetas */
}

/* Estilo general para las tarjetas */
.producto-card {
  flex: 1 1 calc(25% - 1rem); /* Ajusta el ancho de la tarjeta para 4 productos por fila. Cambia a calc(20% - 1rem) para 5 productos por fila */
  max-width: 300px; /* Limita el ancho máximo de la tarjeta */
  min-width: 250px; /* Establece un ancho mínimo para que las tarjetas no sean demasiado pequeñas */
  margin: 0; /* Elimina el margen para que el gap se maneje por el contenedor */
  overflow: hidden; /* Evita que el contenido se desborde fuera de la tarjeta */
  display: flex;
  flex-direction: column; /* Organiza el contenido en una columna vertical */
  border: 1px solid #ddd; /* Agrega un borde para mejor visibilidad */
  border-radius: 8px; /* Añade bordes redondeados */
  height: 400px; /* Establece una altura fija para todas las tarjetas */
}

/* Ajustar el tamaño de las imágenes dentro de las tarjetas */
.producto-img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor de la tarjeta */
  height: 200px; /* Establece una altura fija para la imagen */
  object-fit: cover; /* Asegura que la imagen cubra el contenedor sin deformarse */
}

/* Estilo para el cuerpo de la tarjeta */
.producto-body {
  display: flex;
  flex-direction: column; /* Organiza el contenido en una columna vertical */
  justify-content: space-between; /* Distribuye el espacio entre los elementos del cuerpo de la tarjeta */
  padding: 1rem; /* Añade un poco de espacio interno */
  flex: 1; /* Asegura que el cuerpo de la tarjeta tome el espacio restante */
}



/* Estilo general para las tarjetas */
.producto-card {
  flex: 1 1 calc(25% - 1rem); /* Ajusta el ancho de la tarjeta para 4 productos por fila. Cambia a calc(20% - 1rem) para 5 productos por fila */
  max-width: 300px; /* Limita el ancho máximo de la tarjeta */
  min-width: 250px; /* Establece un ancho mínimo para que las tarjetas no sean demasiado pequeñas */
  margin: 0 auto; /* Centra la tarjeta en el contenedor */
  overflow: hidden; /* Evita que el contenido se desborde fuera de la tarjeta */
  display: flex;
  flex-direction: column; /* Organiza el contenido en una columna vertical */
  border: 1px solid #ddd; /* Agrega un borde para mejor visibilidad */
  border-radius: 8px; /* Añade bordes redondeados */
  height: 400px; /* Establece una altura fija para todas las tarjetas */
}

/* Ajustar el tamaño de las imágenes dentro de las tarjetas */
.producto-img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor de la tarjeta */
  height: 200px; /* Establece una altura fija para la imagen */
  object-fit: cover; /* Asegura que la imagen cubra el contenedor sin deformarse */
}

/* Estilo para el cuerpo de la tarjeta */
.producto-body {
  display: flex;
  flex-direction: column; /* Organiza el contenido en una columna vertical */
  justify-content: space-between; /* Distribuye el espacio entre los elementos del cuerpo de la tarjeta */
  padding: 1rem; /* Añade un poco de espacio interno */
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

  <main class="container mt-4">
    <h1>Farmacia</h1>
    <div class="productos-row">
      <?php
      include('conexion.php');

      // Obtener productos de la categoría 'Farmacia'
      $sql = "SELECT * FROM productos WHERE categoria_id = 1"; // Asumiendo que 1 es el ID de 'Farmacia'
      $resultado = $conexion->query($sql);

      while ($producto = $resultado->fetch_assoc()):
      ?>
        <div class="col-md-3 mb-4">
          <div class="producto-card">
            <img src="productos/<?php echo htmlspecialchars($producto['imagen']); ?>" class="producto-img" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
            <div class="producto-body">
              <h5 class="card-title"><?php echo htmlspecialchars($producto['nombre']); ?></h5>
              <p class="card-text">$<?php echo htmlspecialchars($producto['precio']); ?></p>
              <form action="agregar_al_carrito.php" method="post">
                <input type="hidden" name="producto_id" value="<?php echo $producto['id']; ?>">
                <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
              </form>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </main>

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
