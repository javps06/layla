<?php
include('conexion.php'); // Incluye el archivo de conexión

$email = 'admin123@gmail.com';
$new_password = '132';
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT); // Encriptar la contraseña

$sql = "UPDATE usuarios SET password = '$hashed_password' WHERE email = '$email'";

if ($conexion->query($sql) === TRUE) {
    echo "Contraseña actualizada exitosamente.";
} else {
    echo "Error actualizando la contraseña: " . $conexion->error;
}
?>
