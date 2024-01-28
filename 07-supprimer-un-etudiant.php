<?php
include 'connection.php';

$id = $_GET["id"];

$sql = "DELETE FROM students WHERE id = $id";
$result = $mysqli->query($sql);

if (mysqli_affected_rows($mysqli) == 1) {
    echo "Student profile has been deleted successfully.";
} else {
    echo "Student profile could not be detected.";
}

$mysqli->close();

//Try to delete entering the $id following
//http://localhost:8888/Eval_Module_6/07-supprimer-un-etudiant.php?id=10