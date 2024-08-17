<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "laylapet";

$conexion = new mysqli ($server , $user ,$pass, $db );

if($conexion->connect_error) {
  die("Error de conexión: ". $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$foto = $_FILES['foto'];

// Guardar la foto en un directorio
$directorio = 'fotos/';
$nombre_foto = $foto['name'];
$ruta_foto = $directorio . $nombre_foto;
move_uploaded_file($foto['tmp_name'], $ruta_foto);

// Guardar el comentario en la base de datos
$fecha = date('Y-m-d H:i:s');
$sql = "INSERT INTO comentarios (nombre, comentario, foto, fecha) VALUES ('$nombre', '$comentario', '$ruta_foto', '$fecha')";
$conexion->query($sql);

// Redirigir a la página de inicio después de enviar el formulario
header('Location: inicio.php');
exit;
?>