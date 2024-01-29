<?php
    // Database connection
    $server_name = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "medfiledb";

    $conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the patient ID to update
    $patient_id = $_GET['id']; // Ensure proper validation and sanitization

    // Retrieve current patient data
    $query = "SELECT * FROM patients WHERE patient_id = $patient_id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error running query: " . mysqli_error($conn));
    }

    $patient_data = mysqli_fetch_assoc($result);

    // Process the update form if submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get new data from the form
        $new_patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
        $new_gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $new_date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
        $new_medical_history = mysqli_real_escape_string($conn, $_POST['medical_history']);
        $new_medications = mysqli_real_escape_string($conn, $_POST['medications']);
        $new_procedures = mysqli_real_escape_string($conn, $_POST['procedures']);

        // Update data in the database
        $update_query = "UPDATE patients SET 
            patient_name = '$new_patient_name', 
            gender = '$new_gender', 
            date_of_birth = '$new_date_of_birth', 
            medical_history = '$new_medical_history', 
            medications = '$new_medications', 
            procedures = '$new_procedures' 
            WHERE patient_id = $patient_id";

        $update_result = mysqli_query($conn, $update_query);

        if (!$update_result) {
            die("Error updating record: " . mysqli_error($conn));
        }

        // Redirect to the page displaying the updated patient
        header("Location: patient_info.php?id=$patient_id");
        exit;
    }
?>
