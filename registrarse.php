<?php
session_start();
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $email = $conexion->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar contraseña

    // Verificar si el correo ya está registrado
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $error = "Ya existe un usuario con ese correo electrónico.";
    } else {
        // Insertar nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
        if ($conexion->query($sql) === TRUE) {
            echo "Registro exitoso.";
            header("Location: inicio_sesion.php");
            exit;
        } else {
            $error = "Error en el registro: " . $conexion->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Laila Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="inicio.php">
            <img src="logo.png" alt="Laila Pet Logo" class="contrayendo">
        </a>
        <nav>
            <ul>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary"><a href="inicio.php">Inicio</a></button>
                    <button type="button" class="btn btn-outline-primary"><a href="Quienes_somos.php">Quiénes Somos</a></button>
                    <button type="button" class="btn btn-outline-primary"><a href="servicios.php">Servicios</a></button>
                    <button type="button" class="btn btn-outline-primary"><a href="contacto.php">Contacto</a></button>
                    <button type="button" class="btn btn-outline-primary"><a href="inicio_sesion.php">Iniciar sesión</a></button>
                </div>
            </ul>
        </nav>
    </header>

    <div class="container mt-5">
        <h2>Registro de Usuario</h2>
        <?php if (isset($error)) { echo "<p class='text-danger'>$error</p>"; } ?>
        <form method="POST" action="registrarse.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
        <p class="mt-3">¿Ya tienes cuenta? <a href="inicio_sesion.php">Inicia sesión aquí</a></p>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>Manzana 035, 52044 Santa María Atarasquillo, Méx.</p>
        <p>Teléfono: +52 721 112 1974</p>
        <p>Email: <a href="mailto:lailapet12@gmail.com">lailapet12@gmail.com</a></p>
        <div class="social-media">
            <a href="https://www.facebook.com/lailapet12" target="_blank">
                <img src="facebook.png" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/lailapet12" target="_blank">
                <img src="instagram.png" alt="Instagram">
            </a>
            <a href="https://twitter.com/lailapet12" target="_blank">
                <img src="twitter.png" alt="Twitter">
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
