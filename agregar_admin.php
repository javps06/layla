<?php
include('conexion.php'); // Incluye el archivo de conexión

$email = 'admin123@gmail.com';
$nombre = 'Administrador';
$password = '132'; // Contraseña en texto plano
$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Encriptar la contraseña

// Insertar el nuevo usuario como administrador
$sql = "INSERT INTO usuarios (nombre, email, password, es_admin) VALUES ('$nombre', '$email', '$hashed_password', 1)";

if ($conexion->query($sql) === TRUE) {
    echo "Administrador agregado exitosamente.";
} else {
    echo "Error al agregar el administrador: " . $conexion->error;
}

$conexion->close(); // Cierra la conexión
?>
