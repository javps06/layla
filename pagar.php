<?php
session_start();
include('conexion.php');

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicio_sesion.php');
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$total = 0;

// Calcular total del carrito
$sql = "SELECT (p.precio * c.cantidad) AS total 
        FROM carrito c
        JOIN productos p ON c.producto_id = p.id
        WHERE c.usuario_id = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param('i', $usuario_id);
$stmt->execute();
$resultado = $stmt->get_result();

while ($row = $resultado->fetch_assoc()) {
    $total += $row['total'];
}

// Insertar pedido
$sql = "INSERT INTO pedidos (usuario_id, total) VALUES (?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param('id', $usuario_id, $total);

if ($stmt->execute()) {
    $pedido_id = $conexion->insert_id;

    // Insertar detalles del pedido
    $sql = "SELECT producto_id, cantidad, (p.precio * c.cantidad) AS precio
            FROM carrito c
            JOIN productos p ON c.producto_id = p.id
            WHERE c.usuario_id = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $usuario_id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    while ($row = $resultado->fetch_assoc()) {
        $sql_detalle = "INSERT INTO pedido_detalles (pedido_id, producto_id, cantidad, precio)
                        VALUES (?, ?, ?, ?)";

        $stmt_detalle = $conexion->prepare($sql_detalle);
        $stmt_detalle->bind_param('iiid', $pedido_id, $row['producto_id'], $row['cantidad'], $row['precio']);
        $stmt_detalle->execute();
    }

    // Vaciar el carrito
    $sql = "DELETE FROM carrito WHERE usuario_id = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $usuario_id);
    $stmt->execute();

    // Redirigir a la página de confirmación de pago
    header('Location: confirmacion_pago.php?mensaje=Pago exitoso');
    exit;
} else {
    echo "Error al realizar el pago: " . $conexion->error;
}
?>
