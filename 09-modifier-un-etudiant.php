<?php
include 'connection.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $CV = $_POST['CV'];
    $dt_birth = $_POST['dt_birth'];
    $isAdmin = $_POST['isAdmin'];

    if ($isAdmin == '') {
        $isAdmin = 0;
    }

    // Modify the data into the database
    $sql = "UPDATE students
    SET first_name = '$first_name', last_name = '$last_name', email = '$email', CV = '$CV', dt_birth = '$dt_birth', isAdmin = '$isAdmin'
    WHERE id = $id";

    $result = $mysqli->query($sql);

    if ($result) {
        // Redirect to the success page
        echo "Your profile have been modified successfully";
        exit;
    } else {
        echo "There was an error updating the student profile.";
    }
}

$mysqli->close();
