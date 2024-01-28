<?php
  include 'connection.php';

  $sql = "SELECT * FROM students";
  $result = $mysqli->query($sql);

  echo '<table border="1" width="800">';
    echo '<tr>
            <th bgcolor="#00FF00">ID</th>
            <th bgcolor="#00FF00">First Name</th>
            <th bgcolor="#00FF00">Last Name</th>
            <th bgcolor="#00FF00">E-mail</th>
            <th bgcolor="#00FF00">CV</th>
            <th bgcolor="#00FF00">Date of Birth</th>
            <th bgcolor="#00FF00">Is Admin</th>
            <th bgcolor="#00FF00"> Updated Date </th>
        </tr>';

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        

        echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['last_name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['CV'] . '</td>';
            echo '<td>' . $row['dt_birth'] . '</td>';
            echo '<td>' . $row['isAdmin'] . '</td>';
        echo '<td>' . $row['dt_mis_a_jour'] . '</td>';
            echo '</tr>';
    }
} else {
    echo "Student is not present in the database.";
}

  // Close the connection to the database
  $mysqli->close();


//http://localhost:8888/Eval_Module_6/05-afficher-tout-etudiant.php