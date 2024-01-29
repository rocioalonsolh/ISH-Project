<?php
    // Connect to the database
    $server_name = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "dbdocmed";

    // Create a connection to the database
    $conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get patient_id from the URL
    $patient_id = $_GET['id'];

    // Create a query to retrieve patient data from the database
    $query = "SELECT * FROM patients WHERE patient_id = $patient_id";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die("Error running query: " . mysqli_error($conn));
    }

    // Fetch patient data
    $patient_data = mysqli_fetch_assoc($result);

    // Close the connection
    mysqli_close($conn);
?>
