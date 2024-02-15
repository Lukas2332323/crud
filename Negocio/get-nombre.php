<?php
    include("Datos/conexion.php");

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $id_usuario = $_SESSION['id_user'];

    $query = "SELECT * FROM iniciar_sesion WHERE idLogin = ?";

    $resultados = $conexion->prepare($query);
    $resultados->bindParam(1, $id_usuario);
    $resultados->execute();
    $consulta = $resultados->fetch(PDO::FETCH_ASSOC);


    $nombre = "<p>"."Hola,"." ".$consulta['nombre']."</p>";

    $apellido = "<p>"."Hola,"." ".$consulta['apellido']."</p>";


?>