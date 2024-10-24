<?php
$host = 'autorack.proxy.rlwy.net'; // Dominio privado de Railway
$port = '13046'; // Puerto para MySQL
$usuario = 'root'; // Usuario proporcionado
$password = 'CdkFmPnesKYevZUGMSjbcOHIrJwJywBS'; // Contraseña proporcionada
$dbname = 'railway'; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $dbname, $port);

// Verificar la conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// Resto de tu código para interactuar con la base de datos

?>
