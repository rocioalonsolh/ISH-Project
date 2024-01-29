<?php

    // Connect to DB
    $server_name = "localhost";
    $db_username = "root";
    $db_password = "password";
    $db_name = "medfiledb";
    include 'navbarlogin.html';

    // Create connection to DB
    $conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Collect data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Create query to select the data
    $query = "SELECT * FROM doctors where username = '$username' AND password = '$password'";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if the user has an account
    if(mysqli_num_rows($result) > 0){
        // Doctors' full name
        $query_doctor = "SELECT full_name FROM doctors WHERE username = '$username' AND password = '$password'";
        //Execute query_doctor
        $result_doctor = mysqli_query($conn, $query_doctor);
        $row = mysqli_fetch_assoc($result_doctor);
        $full_name = $row['full_name'];

        //Cookies
        setcookie('loged_user', $full_name);

        header("Location: allPatients.php");
        exit;
    }else{
        $errors[] = 'Erro: Wrong credentials or needs to create an account';
        echo "<script>alert('Error: Wrong credentials or needs to create an account');</script>";
        echo "<script>setTimeout(function(){window.location.href='login.html'},500);</script>";
        exit;
    }

?>