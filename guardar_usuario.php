<?php
$serverName = "192.168.0.180\SOEX";
$connectionOptions = array(
    "Databaseaaaaa" => "CRUD",
    "Uid" => "sa",
    "PWD" => "Soex2018"
);

$conexion = sqlsrv_connect($serverName, $connectionOptions);

if (!$conexion) {
    die(print_r(sqlsrv_errors(), true));
}

$nombreCompleto = $_POST['nombreCompleto'];
$id = $_POST['id'];
$pass = $_POST['pass'];
$campaña = $_POST['campaña'];
$rut = $_POST['rut'];
$rutExtranjero = isset($_POST['checkboxRutExtranjero']) ? $_POST['rutExtranjero'] : null;
$supervisor = $_POST['supervisor'];

$sql = "INSERT INTO TB_USUARIOS_NEOTEL_CRUD ([NOMBRE COMPLETO], ID, Contraseña, Campaña, RUT, RutExtranjero, Supervisor) 
        VALUES ('$nombreCompleto', '$id', '$pass', '$campaña', '$rut', '$rutExtranjero', '$supervisor')";

$result = sqlsrv_query($conexion, $sql);

if ($result) {
    echo "Usuario agregado correctamente.";
} else {
    echo "Error al agregar usuario: " . print_r(sqlsrv_errors(), true);
}

sqlsrv_close($conexion);
?>


