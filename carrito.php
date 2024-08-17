<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicio_sesion.php');
    exit;
}

$usuario_id = $_SESSION['usuario_id'];

// Verifica si el carrito está en la sesión
if (isset($_SESSION['carrito'])) {
    $productos_en_carrito = $_SESSION['carrito'];
} else {
    $productos_en_carrito = [];
}

// Mostrar mensaje de éxito si existe
$mensaje = '';
if (isset($_GET['mensaje'])) {
    $mensaje = htmlspecialchars($_GET['mensaje']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito - Laila Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

  <main class="container mt-4">
    <h1>Carrito</h1>
    
    <!-- Mostrar mensaje de éxito si existe -->
    <?php if ($mensaje): ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        <?php echo $mensaje; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if (empty($productos_en_carrito)): ?>

      <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
  <p>El carrito está vacío.</p>
        
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($productos_en_carrito as $item) {
                    $subtotal = $item['precio'] * $item['cantidad'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['nombre']); ?></td>
                    <td>$<?php echo htmlspecialchars(number_format($item['precio'], 2)); ?></td>
                    <td><?php echo htmlspecialchars($item['cantidad']); ?></td>
                    <td>$<?php echo htmlspecialchars(number_format($subtotal, 2)); ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td>$<?php echo htmlspecialchars(number_format($total, 2)); ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Botón para vaciar el carrito -->
        <form action="vaciar_carrito.php" method="post">
            <button type="submit" class="btn btn-danger">Vaciar carrito</button>
        </form>

        <!-- Botón para pagar -->
        <form action="procesar_pago.php" method="post">
            <button type="submit" class="btn btn-success">Pagar</button>
        </form>
    <?php endif; ?>
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
