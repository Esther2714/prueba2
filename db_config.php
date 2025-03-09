<?php
$servername = "mysqlserver";
$username = "daw";
$password = "feb2025";
$database = "inventario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
