<?php
session_start();

// Configuración de la base de datos
$host = "localhost";
$user = "root";
$pass = "";
$db   = "datos";

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
