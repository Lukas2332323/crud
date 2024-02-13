<?php
// Datos de conexión
$servidor = "DESKTOP-MITVVHK";
$usuario = "sa";
$contrasena = "1234";
$base_datos = "CRUD";

try {
    // Conexión con PDO
    $conexion = new PDO("sqlsrv:Server=$servidor;Database=$base_datos", $usuario, $contrasena);
    
    // Habilitar errores de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opcional: Muestra un mensaje de conexión exitosa
    echo "Conexión establecida correctamente.<br>";

} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
    // Si hay un error en la conexión, terminamos la ejecución del script
    exit();
}
?>
