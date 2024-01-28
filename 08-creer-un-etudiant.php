<?php
include 'connection.php';

$isAdmin = 0;
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $CV = $_POST['CV'];
    $dt_birth = $_POST['dt_birth'];
    $isAdmin = $_POST['isAdmin'];

    if ($isAdmin == '') {
        $isAdmin = 0;
    }

    // Insert the data into the database
    $sql = "INSERT INTO students (first_name, last_name, email, CV, dt_birth, isAdmin)
    VALUES ('$first_name', '$last_name', '$email', '$CV', '$dt_birth', '$isAdmin')";

    $result = $mysqli->query($sql);

    if ($result) {
        // Redirect to the success page
        echo"Your profile is successfully created";
        exit;
    } else {
        echo "There was an error updating the student profile.";
    }
}

$mysqli->close();
