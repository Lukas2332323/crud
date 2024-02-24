<!DOCTYPE html>
<html lang="es">
<?php
session_start()
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Presentacion/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="mb-4">Bienvenido a nuestra página</h1>
            <div class="logo-container">
                <img src="img/neotel.jpeg" alt="Logo de tu empresa" class="logo img-fluid">
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div id="success-alert" class="alert alert-success mt-3" style="display: none;">
                    Has iniciado sesión exitosamente.
                </div>
                <div id="alert-container" class="alert alert-danger mt-3" style="display: none;">
                    Usuario o contraseña incorrecta.
                </div>
                <form action="validar_usuario.php" method="POST" class="mx-auto">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Nombre de usuario:</label>
                        <input type="text" id="correo" name="correo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="btn-boton">INGRESAR</button>
                    </div>
                </form>


                <p class="mt-3 text-center">
                    ¿No tienes una cuenta? <a href="http://192.168.110.11/callcenter/" target="_blank">Regístrate aquí</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="ajax_sesion.js"></script>
</body>

</html>