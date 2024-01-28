<?php
include 'connection.php';
$id = $_GET["id"];

$sql = "SELECT id, first_name, last_name FROM students WHERE id = $id";
$result = $mysqli->query($sql);

echo '<table border="1" width="800">';
    echo '<tr>
            <th bgcolor="#00FF00">ID</th>
            <th bgcolor="#00FF00">First Name</th>
            <th bgcolor="#00FF00">Last Name</th>
        </tr>';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        

        echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['last_name'] . '</td>';
            echo '</tr>';
    }
} else {
    echo "Student is not present in the database.";
}

$mysqli->close();

//get the student data entering the $id following
//http://localhost:8888/Eval_Module_6/06-afficher-un-etudiant.php?id=1