<?php
$servername = "localhost"; // Cambia si es necesario
$username = "tu_usuario"; // Tu nombre de usuario
$password = "tu_contraseña"; // Tu contraseña
$dbname = "yucatan_tourism";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
