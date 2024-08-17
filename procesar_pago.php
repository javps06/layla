<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicio_sesion.php');
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$total = 0;

// Calcular total del carrito
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
}

// Insertar pedido
$sql = "INSERT INTO pedidos (usuario_id, total) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('id', $usuario_id, $total);

if ($stmt->execute()) {
    $pedido_id = $conexion->insert_id;

    // Insertar detalles del pedido
    $sql = "INSERT INTO pedido_detalles (pedido_id, producto_id, cantidad, precio) VALUES (?, ?, ?, ?)";
    $stmt_detalle = $conexion->prepare($sql);

    foreach ($_SESSION['carrito'] as $producto) {
        $precio = $producto['precio'] * $producto['cantidad'];
        $stmt_detalle->bind_param('iiid', $pedido_id, $producto['id'], $producto['cantidad'], $precio);
        $stmt_detalle->execute();
    }

    // Vaciar el carrito
    $_SESSION['carrito'] = [];

    // Redirigir a la página del carrito con un mensaje de éxito
    header('Location: carrito.php?mensaje=Compra realizada con éxito. Gracias por tu compra.');
    exit;
} else {
    echo "Error al realizar el pago: " . $conexion->error;
}
?>
