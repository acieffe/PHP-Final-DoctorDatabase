<h1>Patient Info</h1>

<?php
  $sql = "SELECT * FROM patients;";
  $result = mysqli_query($conn, $sql);
  $resultsCheck = mysqli_num_rows($result);

  if($resultsCheck <= 0) {
    echo "<h2 class='bad'><a href='addPatient.php'>Please add patients!</a></h2>";
  } else {
    echo '<table id="patientData"><tr><th>Patient ID</th><th>Last Name</th><th>First Name</th><th>Insurance</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".str_pad($row['patientID'], 8,'0', STR_PAD_LEFT)."</td>";
      echo "<td>".$row['lname']."</td>";
      echo "<td>".$row['fname']."</td>";
      echo "<td>".$row['insure']."</td></tr>";
    }
  }
  ?>
</table>