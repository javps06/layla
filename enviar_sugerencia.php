<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laylapet";

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

// Preparar la consulta para insertar los datos en la base de datos
$stmt = $conn->prepare("INSERT INTO sugerencias (correo, sugerencia) VALUES (?, ?)");
$stmt->bind_param("ss", $correo, $sugerencia);

// Ejecutar la consulta
$stmt->execute();

// Cerrar la conexión
$stmt->close();
$conn->close();

// Redirigir a la página de inicio después de enviar el formulario
header('Location: inicio.php');
exit;
?>