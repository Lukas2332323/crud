<?php

require 'Datos/conexion.php';
$conexion;
session_start();

$correo = $_POST['correo'];
$password = $_POST['contrasena'];

try {
    // Consulta para verificar credenciales
    $sql = "SELECT COUNT(*) AS count FROM iniciar_sesion WHERE correo = ? AND contrasena = ?";
    $consulta = $conexion->prepare($sql);
    $consulta->bindParam(1, $correo);
    $consulta->bindParam(2, $password);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($resultado['count'] > 0) {
        $_SESSION['email'] = $correo;

        // Evitar inyección de SQL utilizando consultas preparadas
        $resultados = $conexion->prepare("SELECT idLogin FROM iniciar_sesion WHERE correo = ?");
        $resultados->bindParam(1, $correo);
        $resultados->execute();
        $consulta = $resultados->fetch(PDO::FETCH_ASSOC);

        if ($consulta) {
            $_SESSION['id_app'] = $consulta['idLogin'];
        }
        header("Location: formulario.php");
        exit();
    } else {
        header("Location: error.php");
        exit();
    }
} catch (PDOException $e) {
    // En caso de error en la consulta
    header("Location: error.php");
    exit();
}
?>
