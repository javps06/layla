<?php
session_start();

// Verifica si el producto_id está presente en la solicitud
if (isset($_POST['producto_id'])) {
    $producto_id = intval($_POST['producto_id']); // Asegúrate de que el ID es un entero
    
    // Conecta a la base de datos
    include('conexion.php');
    
    // Consulta para obtener los detalles del producto
    $sql = "SELECT * FROM productos WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $producto_id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows > 0) {
        $producto = $resultado->fetch_assoc();
        
        // Inicializa el carrito en la sesión si no existe
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
        
        // Verifica si el producto ya está en el carrito
        if (isset($_SESSION['carrito'][$producto_id])) {
            // Asegúrate de que el valor sea un array antes de incrementar
            if (is_array($_SESSION['carrito'][$producto_id])) {
                $_SESSION['carrito'][$producto_id]['cantidad'] += 1;
            } else {
                // Si no es un array, reinicializa
                $_SESSION['carrito'][$producto_id] = [
                    'id' => $producto['id'],
                    'nombre' => $producto['nombre'],
                    'precio' => $producto['precio'],
                    'cantidad' => 1
                ];
            }
        } else {
            // Agrega el producto al carrito
            $_SESSION['carrito'][$producto_id] = [
                'id' => $producto['id'],
                'nombre' => $producto['nombre'],
                'precio' => $producto['precio'],
                'cantidad' => 1
            ];
        }
        
        // Depuración: Mostrar el contenido del carrito antes de redirigir
        echo '<pre>';
        print_r($_SESSION['carrito']);
        echo '</pre>';
        
        // Redirige al carrito o a la página anterior
        header('Location: carrito.php');
        exit;
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "No se ha enviado el ID del producto.";
}
?>
