<?php
    // Check if the request method is GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Database connection details
        $server_name = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "dbdocmed";

        // Establish connection to the database
        $conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the ID of the patient to be deleted
        $patient_id = $_GET['id']; // Make sure to validate and sanitize this value

        // Delete the patient from the database
        $delete_query = "DELETE FROM patients WHERE patient_id = $patient_id";
        $delete_result = mysqli_query($conn, $delete_query);

        // Check if the deletion was successful
        if (!$delete_result) {
            die("Error deleting record: " . mysqli_error($conn));
        }

        // Redirect to the main page or another page after deletion
        header("Location: index.php"); // Change 'index.php' to the preferred page name
        exit;
    }
?>
