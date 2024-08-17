<?php
// Incluye el archivo de conexión a la base de datos
include 'conexion.php'; // Asegúrate de que el archivo de conexión se llama 'conexion.php'

// Obtén los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subscribe = isset($_POST['subscribe']) ? 1 : 0; // Verifica si se marcó la casilla de suscripción

// Escapa los datos para evitar inyecciones SQL
$name = $conexion->real_escape_string($name);
$email = $conexion->real_escape_string($email);
$phone = $conexion->real_escape_string($phone);
$message = $conexion->real_escape_string($message);

// Consulta SQL para insertar datos en la base de datos
$sql = "INSERT INTO formulario_contacto (name, email, phone, message, subscribe)
        VALUES ('$name', '$email', '$phone', '$message', '$subscribe')";

// Ejecuta la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Formulario enviado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
// Redirigir a la página de inicio después de enviar el formulario
header('Location: contacto.php');
exit;
?>
