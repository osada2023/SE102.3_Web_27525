<html>
<head>
  <title>Form Submission Result</title>
</head>
<body>
  <h2>Form Submission Result</h2>
  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      echo '<table border="1">';
      
      echo '<tr><td><h3>First Name:</h3></td>';
      echo '<td>' . $_POST["firstName"] . '</td></tr>';

      echo '<tr><td><h3>Last Name:</h3></td>';
      echo '<td>' . $_POST["lastName"] . '</td></tr>';

      echo '<tr><td><h3>Username:</h3></td>';
      echo '<td>' . $_POST["username"] . '</td></tr>';

      echo '<tr><td><h3>Password:</h3></td>';
      echo '<td>' . str_repeat('*', strlen($_POST["password"])) . '</td></tr>';

      echo '<tr><td><h3>Gender:</h3></td>';
      echo '<td>' . $_POST["gender"] . '</td></tr>';

      echo '<tr><td><h3>Academic Year:</h3></td>';
      echo '<td>' . str_replace(" ", "_", $_POST["academicYear"]) . '</td></tr>';

      echo '<tr><td><h3>Phone No:</h3></td>';
      echo '<td>' . $_POST["phoneNo"] . '</td></tr>';
      
      echo '</table>';
    }
  ?>
</body>
</html>