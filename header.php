<?php
  include_once 'includes/dbh.inc.php';

  session_start();
?>

<!--
  Assignment: Doctor Who
  Author: Matthew Baugh
  Date: 11/27/2020
  Purpose: This page will input Patient info from a form and place it into the 
  doctorWho database after checking for the assistant's username and password.
-->
<!DOCTYPE html>
<html>

  <head>
    <title>Doctor Who Assignment</title>

    <!-- stylesheet -->
    <link href="css/styles.css" rel="stylesheet" type="text/css" /> 

    <!-- JavaScript -->
    <script src="js/scripts.js"></script>

  </head>

  <body>

    <div id="header">
      <!-- Navigation Bar -->
      <nav id="navigation">
        <a href="addPatient.php">Add Patients</a>
        <a href="getPatient.php">Show Patients</a>
        <a href="getRecords.php">Show Database Tables</a>

      <!-- Login/Sign in: This will show Login link if not logged in and the
          user name if logged in. -->
      <?php
        if (!isset($_SESSION["userID"])) {
          echo "<a href='addPatient.php'>Login</a>";
        } else {
          echo "Welcome, ".$_SESSION["username"]."! <a href='includes/logout.inc.php'>log out</a>";
        }
      ?>

      </nav>
    </div>