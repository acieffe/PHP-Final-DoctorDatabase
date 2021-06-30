<h1>Database Table Select</h1>

<!-- If switch to show tables of datebase -->

<div id="selectForm">
  <select name="" id="dataSelect" onclick="tableShow()">
    <option value="billing">Billing</option>
    <option value="insurance">Insurance</option>
    <option value="medications">Medications</option>
    <option value="patients">Patients</option>
    <option value="prescriptions">Prescriptions</option>
  </select>
</div>

<!-- Billing Table -->
<div id="billingData" style="display:none;">
  <table class="dbtable">
    <th>
      Billing ID
    </th>
    <th>
      Patient ID
    </th>
    <th>
      Prescription ID
    </th>
    <th>
      Cost
    </th>
    <th>
      Deduction
    </th>
    <th>
      Total Due
    </th>
    <th>
      Date Issued
    </th>
    <th>
      Date Paid
    </th>
    <?php
    $sql = "SELECT * FROM billing;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

    if($resultsCheck <= 0) {
      echo "<tr><td colspan='8'>No billing Information</a></td></tr>";
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".str_pad($row['billID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".str_pad($row['patientID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".str_pad($row['prescriptionID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>$".$row['cost']."</td>";
        echo "<td>$".$row['deduction']."</td>";
        echo "<td>$".$row['totalDue']."</td>";
        echo "<td>".$row['dateIssued']."</td>";
        echo "<td>".$row['datePaid']."</td></tr>";
      }
    }
    ?>
  </table>
</div>

<!-- Insurance Table -->
<div id="insuranceData" style="display:none;">
  <table class="dbtable">
    <th>
      Insurance ID
    </th>
    <th>
      Insurance
    </th>
    <th>
      Deductions
    </th>
    <?php
    $sql = "SELECT * FROM insurance;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

    if($resultsCheck <= 0) {
      echo "<tr><td colspan='3'>No Insurance Information</a></td></tr>";
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".str_pad($row['insureID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".$row['insure']."</td>";
        echo "<td>$".$row['deduction']."</td></tr>";
      }
    }
    ?>
  </table>
</div>

<!-- Medications Table -->
<div id="medicationData" style="display:none;">
  <table class="dbtable">
    <th>
      Medication ID
    </th>
    <th>
      Medication
    </th>
    <th>
      Price Per Dose
    </th>
    <?php
    $sql = "SELECT * FROM medications;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

    if($resultsCheck <= 0) {
      echo "<tr><td colspan='3'>No Medication Information</a></td></tr>";
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".str_pad($row['medicationID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".$row['medication']."</td>";
        echo "<td>$".$row['pricePerDose']."</td></tr>";
      }
    }
    ?>
  </table>
</div>

<!-- Patients Table -->
<div id="patientData" style="display:none;">
  <table class="dbtable">
    <th>
      Patient ID
    </th>
    <th>
      First Name
    </th>
    <th>
      Middle Initial
    </th>
    <th>
      Last Name
    </th>
    <th>
      Street
    </th>
    <th>
      Street Cont
    </th>
    <th>
      City
    </th>
    <th>
      State
    </th>
    <th>
      Zip Code
    </th>
    <th>
      Birthdate
    </th>
    <th>
      Gender
    </th>
    <th>
      Marital Status
    </th>
    <th>
      Insurance
    </th>
    <?php
    $sql = "SELECT * FROM patients;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

    if($resultsCheck <= 0) {
      echo "<tr><td colspan='13'><a href='addPatient.php'>Please add patients!</a></td></tr>";
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".str_pad($row['patientID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".$row['fname']."</td>";
        echo "<td>".$row['mname']."</td>";
        echo "<td>".$row['lname']."</td>";
        echo "<td>".$row['street1']."</td>";
        echo "<td>".$row['street2']."</td>";
        echo "<td>".$row['pcity']."</td>";
        echo "<td>".$row['pstate']."</td>";
        echo "<td>".$row['pzip']."</td>";
        echo "<td>".$row['birthdate']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['mstatus']."</td>";
        echo "<td>".$row['insure']."</td></tr>";
      }
    }
    ?>
  </table>
</div>

<!-- Prescriptions Table -->
<div id="prescriptionData" style="display:none;">
  <table class="dbtable">
  <th>
      Prescription ID
    </th>
    <th>
      Patient ID
    </th>
    <th>
      Medication ID
    </th>
    <th>
      Dose
    </th>
    <th>
      Frequency
    </th>
    <th>
      How Long
    </th>
    <th>
      Until
    </th>
    <?php
    $sql = "SELECT * FROM prescriptions;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);

    if($resultsCheck <= 0) {
      echo "<tr><td colspan='7'>No Prescription Information</a></td></tr>";
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".str_pad($row['prescriptionID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".str_pad($row['patientID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".str_pad($row['medicationID'], 8,'0', STR_PAD_LEFT)."</td>";
        echo "<td>".$row['dose']."</td>";
        echo "<td>".$row['frequency']."</td>";
        echo "<td>".$row['howLong']."</td>";
        echo "<td>$".$row['until']."</td></tr>";
      }
    }
    ?>
  </table>
</div>