<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if (!isset($_SESSION['email']) ) {
        header("Location: login.php");  // Corregí la URL de redirección
        exit();
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="Presentacion/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="contenedor-header">

        <div class="contenedor-header">
            <div class="logo">
                <img src="img/neotel.jpeg" alt="" srcset="">
                <h1 class="sombra">Gestion de registros</h1>
            </div>
        </div>

        <div class="count-user">
            <div class="nombre">
                <?php
                    include("Negocio/get-nombre.php");
                    echo $nombre. " " . $apellido;
                ?>
                <a href="Datos/logout.php">Salir</a>
            </div>
            <div class="perfil">

            </div>
        </div>


    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>