<?php
session_start();
include('conexion.php');

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicio_sesion.php');
    exit;
}

// Recuperar mensaje de sesión si existe
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : 'Pago realizado con éxito.';

// Vaciar el carrito si se está confirmando el pago
$usuario_id = $_SESSION['usuario_id'];

// Utilizar consultas preparadas para evitar inyecciones SQL
$sql = "DELETE FROM carrito WHERE usuario_id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('i', $usuario_id);
$stmt->execute();
$stmt->close();

// Redirigir a la página principal después de unos segundos (esto puede ser opcional)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                </div>
            </ul>
        </nav>
    </header>

    <main class="container mt-4">
        <h1>Confirmación de Pago</h1>
        <div class="alert alert-success">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
        <p>Serás redirigido a la página principal en unos segundos...</p>
        <p>Si no eres redirigido automáticamente, <a href="inicio.php">haz clic aquí</a> para ir a la página principal.</p>
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
