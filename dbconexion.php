<?php
$servername = "localhost";
$database = "dbchristus";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);
// Check connection

mysqli_set_charset($conexion, "utf8");

if ($conexion->connect_error) {
    die("Connection fallida: " . $conexion->mysqli_connect_error);
}
?>