<?php
// Incluir el archivo de configuración de la base de datos
include 'db_config.php';

// Consulta para obtener todos los doctores de la tabla
$query = "SELECT * FROM doctor";
$result = $conexion->query($query);

// Verificar si la consulta fue exitosa
if ($result) {
    // Obtener los datos y mostrarlos
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo '<p>Doctor: ' . $row['name'] . ' ' . $row['last_name'] . ' - Specialty: ' . $row['specialty'] . '</p>';
    }
} else {
    // Mostrar un mensaje de error si la consulta falla
    echo 'Error al ejecutar la consulta: ' . $conexion->lastErrorMsg();
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
