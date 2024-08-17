<?php
session_start();
include('conexion.php'); // Incluye el archivo de conexión a la base de datos

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario_id'])) {
    // Obtener el ID del usuario desde la sesión
    $usuario_id = $_SESSION['usuario_id'];
    
    // Si el formulario ha sido enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validación básica
        if ($password !== $confirm_password) {
            echo "<p class='text-danger'>Las contraseñas no coinciden.</p>";
        } else {
            // Actualizar información en la base de datos
            $sql = "UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssi', $nombre, $email, $usuario_id);

            if ($stmt->execute()) {
                // Si se ha proporcionado una nueva contraseña, actualizarla también
                if (!empty($password)) {
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);
                    $sql = "UPDATE usuarios SET password = ? WHERE id = ?";
                    $stmt = $conexion->prepare($sql);
                    $stmt->bind_param('si', $password_hash, $usuario_id);
                    $stmt->execute();
                }
                echo "<p class='text-success'>Perfil actualizado con éxito.</p>";
            } else {
                echo "<p class='text-danger'>Error al actualizar el perfil.</p>";
            }
        }
    }

    // Consultar la base de datos para obtener la información actual del usuario
    $sql = "SELECT nombre, email FROM usuarios WHERE id = '$usuario_id'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        // Mostrar el formulario de edición de perfil
        echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Editar Perfil - Laila Pet</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <header>
        <a href='inicio.php'>
            <img src='logo.png' alt='Laila Pet Logo' class='contrayendo'>
        </a>
        <nav>
            <ul>
                <div class='btn-group' role='group' aria-label='Default button group'>
                    <button type='button' class='btn btn-outline-primary'><a href='inicio.php'>Inicio</a></button>
                    <button type='button' class='btn btn-outline-primary'><a href='Quienes_somos.php'>Quiénes Somos</a></button>
                    <button type='button' class='btn btn-outline-primary'><a href='servicios.php'>Servicios</a></button>
                    <button type='button' class='btn btn-outline-primary'><a href='contacto.php'>Contacto</a></button>
                    <button type='button' class='btn btn-outline-primary'><a href='editar_perfil.php'>Editar perfil</a></button>
                    <button type='button' class='btn btn-outline-primary'><a href='carrito.php'>Carrito</a></button>
                    <button type='button' class='btn btn-outline-primary'><a href='bienvenida.php'>Mi perfil</a></button>
                </div>
            </ul>
        </nav>
    </header>
    <main class='container mt-5'>
        <h1>Editar Perfil</h1>
        <form action='editar_perfil.php' method='POST'>
            <div class='mb-3'>
                <label for='nombre' class='form-label'>Nombre</label>
                <input type='text' class='form-control' id='nombre' name='nombre' value='" . htmlspecialchars($usuario['nombre']) . "' required>
            </div>
            <div class='mb-3'>
                <label for='email' class='form-label'>Email</label>
                <input type='email' class='form-control' id='email' name='email' value='" . htmlspecialchars($usuario['email']) . "' required>
            </div>
            <div class='mb-3'>
                <label for='password' class='form-label'>Nueva Contraseña</label>
                <input type='password' class='form-control' id='password' name='password'>
                <small class='form-text text-muted'>Deja en blanco si no deseas cambiar la contraseña.</small>
            </div>
            <div class='mb-3'>
                <label for='confirm_password' class='form-label'>Confirmar Contraseña</label>
                <input type='password' class='form-control' id='confirm_password' name='confirm_password'>
            </div>
            <button type='submit' class='btn btn-primary'>Actualizar Perfil</button>
        </form>
    </main>
    <footer class='footer mt-5'>
        <p>Manzana 035, 52044 Santa María Atarasquillo, Méx.</p>
        <p>Teléfono: +52 721 112 1974</p>
        <p>Email: <a href='mailto:lailapet12@gmail.com'>lailapet12@gmail.com</a></p>
        <div class='social-media'>
            <a href='https://www.facebook.com/lailapet12' target='_blank'>
                <img src='facebook.png' alt='Facebook'>
            </a>
            <a href='https://www.instagram.com/lailapet12' target='_blank'>
                <img src='instagram.png' alt='Instagram'>
            </a>
            <a href='https://twitter.com/lailapet12' target='_blank'>
                <img src='twitter.png' alt='Twitter'>
            </a>
        </div>
    </footer>
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz4fnFO2O2z2z2VlgmRov6dL8iM7aW/18V6p3p6DqF1LhF81rShT0IYldK' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js' integrity='sha384-ppqTkAvPbH8e8z8s3lXUq21+6lD1rR1QF+p+YFpDGMipN+9Re1f2E1eEOV7EdSU0' crossorigin='anonymous'></script>
</body>
</html>";
    } else {
        echo "No se pudo obtener la información del usuario.";
    }
} else {
    echo "No has iniciado sesión.";
}
?>
