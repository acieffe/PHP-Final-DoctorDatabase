<?php include('header.php');

//Login Form will show if no one is logged in
if (!isset($_SESSION["userID"])) {
  include('userLogin.php');
} else {
/* Patient Table: If logged in, this table will show
      patient's data stored in the database. */
  include('databaseInfo.php');
}

include('footer.php') ?>