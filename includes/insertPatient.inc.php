<?php
  include_once 'dbh.inc.php';


if (!isset($_POST['submit'])) {
  header("Location: ../addPatient.php?submit=noSubmit");
} else {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $street1 = $_POST['street1'];
  $street2 = $_POST['street2'];
  $pcity = $_POST['pcity'];
  $pstate = $_POST['pstate'];
  $pzip = $_POST['pzip'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $mstatus = $_POST['mstatus'];
  $insure = $_POST['insure'];

  // error handling if any field is empty
  if (empty($fname) || empty($lname) || empty($street1) || empty($pcity) || 
    empty($pstate) || empty($pzip) || empty($birthdate) || empty($gender) || 
    empty($mstatus) || empty($insure)) {
    
      header("Location: ../addPatient.php?submit=empty");
  } else {
    // saving all input as an SQL INSERT statement into a variable $sql
    $sql = "INSERT INTO patients (fname, mname, lname, street1, street2, 
      pcity, pstate, pzip, birthdate, gender, mstatus, insure) VALUES ('$fname', 
      '$mname', '$lname', '$street1', '$street2', '$pcity', '$pstate', '$pzip', 
      '$birthdate', '$gender', '$mstatus', '$insure');";
    // Sending $sql statement to databate to save input
    mysqli_query($conn, $sql); 

    // Returns to page with message of success
    header("Location: ../addPatient.php?submit=success");
  }
}

?>