<?php
// Conecta a la base de datos
$server = "localhost";
$user = "root";
$pass = "";
$db = "laylapet";

$conexion = new mysqli ($server , $user ,$pass, $db );

if($conexion->connect_error) {
  die("Error de conexión: ". $conexion->connect_error);
}

// Consulta para mostrar los comentarios
$sql = "SELECT * FROM comentarios";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  while($comentarios = $result->fetch_assoc()) {
    echo "<p>Nombre: {$comentarios['nombre']}<br>
    <p>Comentario: {$comentarios['comentario']}<br>
    <p>Foto: <img src='{$comentarios['foto']}' width='100' height='100'><br>
    <hr>";
  }
} else {
  echo "No hay comentarios";
}
?>