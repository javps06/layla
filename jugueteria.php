<?php
include('conexion.php');


// Obtener productos de la categoría 'Juguetería'
$sql = "SELECT * FROM productos WHERE categoria_id = 2"; // Asumiendo que 2 es el ID de 'Juguetería'
$resultado = $conexion->query($sql);
?>

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
        <h1>Juguetería</h1>
        <div class="row">
            <?php while ($producto = $resultado->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="productos/<?php echo htmlspecialchars($producto['imagen']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                        <div class="card-body">
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