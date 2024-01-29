<?php
// Conectar a la base de datos
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "medfiledb";

$conn = new mysqli($server_name, $db_username, $db_password, $db_name);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recopilar datos utilizando consultas preparadas
$patient_name = mysqli_real_escape_string($conn, $_POST["patient_name"]);
$age = mysqli_real_escape_string($conn, $_POST["age"]);
$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
$date_of_birth = mysqli_real_escape_string($conn, $_POST["date_of_birth"]);
$diagnosis = mysqli_real_escape_string($conn, $_POST["diagnosis"]);
$prescriptions = mysqli_real_escape_string($conn, $_POST["prescriptions"]);
$allergies = mysqli_real_escape_string($conn, $_POST["allergies"]);
$primary_care_physician = mysqli_real_escape_string($conn, $_POST["primary_care_physician"]);

$loged_user = $_COOKIE['loged_user'];

$query = "INSERT INTO patients (patient_name, age, gender, date_of_birth, diagnosis, prescriptions, allergies, primary_care_physician) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Utilizar consultas preparadas para seguridad
$stmt = $conn->prepare($query);
$stmt->bind_param("sissssss", $patient_name, $age, $gender, $date_of_birth, $diagnosis, $prescriptions, $allergies, $primary_care_physician);

// Ejecutar la consulta preparada
$result = $stmt->execute();

if (!$result) {
    die("Error running query: " . $stmt->error);
} else {
    header("Location: protected-content.php");
    exit;
}
?>
