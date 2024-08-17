<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicio_sesion.php');
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$sql = "DELETE FROM carrito WHERE usuario_id = '$usuario_id'";

if ($conexion->query($sql) === TRUE) {
    echo "Carrito vaciado.";
    header('Location: carrito.php');
} else {
    echo "Error al vaciar el carrito: " . $conexion->error;
}
?>
