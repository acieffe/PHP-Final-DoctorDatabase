<?php

  /* Must access the pages through login submit
      This page checks if user login information is
      correct and starts a session if it is.
  */
  if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $passwrd = $_POST["passwrd"];

    require_once 'dbh.inc.php';

    if(emptyInputLogin($username, $passwrd) !== false) {
      header("Location: ../addPatient.php?submit=empty");
      exit;
    }

    loginUser($conn, $username, $passwrd);
  } else {
      header("Location: ../addPatient.php");
      exit;
  }

  // ***Login Page Needed Functions***

  // Checks username input with database
  function userExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../addPatient.php?submit=noUser");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
    } else {
      $result = false;
      return $result;
    }

    mysqli_stmt_close($stmt);
  }

  // Returns errors if either input is left blank
  function emptyInputLogin($username, $passwrd) {
    $result;
    if (empty($username) || empty($passwrd)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // If everything is good, the user is logged in or errors out
  function loginUser($conn, $username, $passwrd) {
    $userExists = userExists($conn, $username);

    if ($userExists === false) {
      header("Location: ../addPatient.php?submit=noUser");
      exit();
    }

    $pwd = $userExists["passwrd"];
  
    if ($passwrd != $pwd) {
      header("Location: ../addPatient.php?submit=wrongPass");
      exit();
    } else if ($passwrd == $pwd) {
      session_start();
      $_SESSION["userID"] =  $userExists["userID"];
      $_SESSION["username"] =  $userExists["username"];
      header("Location: ../addPatient.php");
      exit();
    }
  }
