<?php include('header.php');

//Login Form will show if no one is logged in
if (!isset($_SESSION["userID"])) {
  include('userLogin.php');
} else {
/* Patient Form: If logged in, this form will take
      user input for patients. */
  include('patientForm.php');
}

include('footer.php') ?>