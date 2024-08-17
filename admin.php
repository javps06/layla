<?php
include('conexion.php');

// Manejo de subida de archivos y agregar productos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['imagen']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['categoria_id'])) {
        $nombre = $conexion->real_escape_string($_POST['nombre']);
        $descripcion = $conexion->real_escape_string($_POST['descripcion']);
        $precio = $conexion->real_escape_string($_POST['precio']);
        $categoria_id = $conexion->real_escape_string($_POST['categoria_id']);

        // Subir imagen
        $imagen = $_FILES['imagen']['name'];
        $imagen_tmp = $_FILES['imagen']['tmp_name'];
        $ruta_imagen = "productos/" . $imagen;

        if (move_uploaded_file($imagen_tmp, $ruta_imagen)) {
            // Insertar nuevo producto
            $sql = "INSERT INTO productos (nombre, descripcion, precio, categoria_id, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$categoria_id', '$imagen')";
            if ($conexion->query($sql) === TRUE) {
                echo "Producto agregado exitosamente.";
            } else {
                echo "Error al agregar el producto: " . $conexion->error;
            }
        } else {
            echo "Error al subir la imagen.";
        }
    } elseif (isset($_POST['eliminar_producto_id'])) {
        $producto_id = $conexion->real_escape_string($_POST['eliminar_producto_id']);
        
        // Eliminar producto
        $sql = "DELETE FROM productos WHERE id = '$producto_id'";
        if ($conexion->query($sql) === TRUE) {
            echo "Producto eliminado exitosamente.";
        } else {
            echo "Error al eliminar el producto: " . $conexion->error;
        }
    }
}

// Obtener categorías para el menú desplegable
$sql_categorias = "SELECT * FROM categorias";
$resultado_categorias = $conexion->query($sql_categorias);

if ($resultado_categorias === FALSE) {
    echo "Error al recuperar las categorías: " . $conexion->error;
}

// Obtener productos para listar
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Productos - Laila Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Tu encabezado aquí -->
    </header>

    <main class="container mt-4">
        <h1>Administrar Productos</h1>
        
        <!-- Formulario para agregar productos -->
        <div class="mb-4">
            <h2>Agregar Producto</h2>
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoría</label>
                    <select class="form-select" id="categoria_id" name="categoria_id" required>
                        <?php
                        // Mostrar las categorías en el menú desplegable
                        while ($categoria = $resultado_categorias->fetch_assoc()) {
                            echo "<option value='" . $categoria['id'] . "'>" . htmlspecialchars($categoria['nombre']) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </form>
        </div>
        
        <!-- Listado de productos -->
        <div>
            <h2>Listado de Productos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($producto = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto['id']); ?></td>
                            <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($producto['descripcion']); ?></td>
                            <td>$<?php echo htmlspecialchars($producto['precio']); ?></td>
                            <td>
                                <?php
                                $sql_categoria = "SELECT nombre FROM categorias WHERE id = " . $producto['categoria_id'];
                                $resultado_categoria = $conexion->query($sql_categoria);
                                if ($resultado_categoria) {
                                    $categoria = $resultado_categoria->fetch_assoc();
                                    echo htmlspecialchars($categoria['nombre']);
                                } else {
                                    echo "Categoría no encontrada";
                                }
                                ?>
                            </td>
                            <td><img src="productos/<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>" style="width: 100px;"></td>
                            <td>
                                <form action="admin.php" method="post" style="display:inline;">
                                    <input type="hidden" name="eliminar_producto_id" value="<?php echo htmlspecialchars($producto['id']); ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <!-- Tu pie de página aquí -->
    </footer>
</body>
</html>
