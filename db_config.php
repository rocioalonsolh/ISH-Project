<?php
$databasePath = 'C:\xampp\htdocs\mi_proyecto\doctors.db'; // Ruta completa al archivo SQLite
$conexion = new SQLite3($databasePath);

if (!$conexion) {
    die('Error de conexión a la base de datos.');
}
?>
