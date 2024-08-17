<?php
// Incluye el archivo de conexión a la base de datos
include 'conexion.php'; // Asegúrate de que el archivo de conexión se llama 'conexion.php'

// Obtén los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$message = $_POST['message'];

// Escapa los datos para evitar inyecciones SQL
$name = $conexion->real_escape_string($name);
$email = $conexion->real_escape_string($email);
$phone = $conexion->real_escape_string($phone);
$service = $conexion->real_escape_string($service);
$message = $conexion->real_escape_string($message);

// Consulta SQL para insertar datos en la base de datos
$sql = "INSERT INTO citas (name, email, phone, service, message)
        VALUES ('$name', '$email', '$phone', '$service', '$message')";

// Ejecuta la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Cita agendada con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
// Redirigir a la página de inicio después de enviar el formulario
header('Location: servicios.php');
?>
