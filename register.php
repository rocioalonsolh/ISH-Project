<?php
// Database connection (Make sure to use the correct credentials)
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "doctors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve registration form data (Add variable existence check)
if (isset($_POST['name'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['specialty'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $specialty = $_POST['specialty'];

    // Hash the password (Improve security)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database (Example, adjust according to your database schema)
    $sql = "INSERT INTO doctor (nombre, apellido, correo, contrasena, especialidad) VALUES ('$name', '$lastName', '$email', '$hashedPassword', '$specialty')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form data is incomplete";
}

// Close connection
$conn->close();
?>
