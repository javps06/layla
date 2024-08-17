<?php
session_start();
include('conexion.php'); // Incluye el archivo de conexión a la base de datos

$error = '';

// Procesar el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $conexion->real_escape_string($_POST['password']);

    // Verificar las credenciales del usuario
    $sql = "SELECT id, password FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        $hash = $usuario['password'];

        // Verifica la contraseña ingresada con el hash almacenado
        if (password_verify($password, $hash)) {
            // Guardar el ID del usuario en la sesión
            $_SESSION['usuario_id'] = $usuario['id'];
            // Redirigir a la página de bienvenida
            header("Location: bienvenida.php");
            exit;
        } else {
            $error = "Correo o contraseña incorrectos.";
        }
    } else {
        $error = "Correo o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Laila Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1; /* Esto asegura que el contenido ocupe todo el espacio disponible */
        }
        footer {
            background: #9cc8fa;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
            clear: both; /* Asegura que el footer se ubique al final de la página */
        }
    </style>
</head>
<body>
    <div class="wrapper">
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
                        <button type="button" class="btn btn-outline-primary"><a href="carrito.php">Carrito</a></button>
                        <button type="button" class="btn btn-outline-primary"><a href="bienvenida.php">Mi perfil</a></button>
                    </div>
                </ul>
            </nav>
        </header>

        <div class="container mt-5 content">
            <h2>Iniciar Sesión</h2>
            <?php if ($error) { echo "<p class='text-danger'>$error</p>"; } ?>
            <form method="POST" action="inicio_sesion.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
            <p class="mt-3">¿No tienes cuenta? <a href="registrarse.php">Regístrate aquí</a></p>
        </div>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO2O2z2z2VlgmRov6dL8iM7aW/18V6p3p6DqF1LhF81rShT0IYldK" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ppqTkAvPbH8e8z8s3lXUq21+6lD1rR1QF+p+YFpDGMipN+9Re1f2E1eEOV7EdSU0" crossorigin="anonymous"></script>
    </div>
</body>
</html>
