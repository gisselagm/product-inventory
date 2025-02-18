<?php
$servername = "enter_servername";
$username = "enter_username";
$password = "enter_password";
$database = "enter_database";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
