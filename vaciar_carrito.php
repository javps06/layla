<?php
session_start();

// Vaciar el carrito
$_SESSION['carrito'] = [];

// Redirigir a la página del carrito con un mensaje de éxito
header('Location: carrito.php?mensaje=Carrito vaciado con éxito');
exit;
?>
