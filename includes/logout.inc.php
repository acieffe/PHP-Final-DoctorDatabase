<?php

session_start(); // start a session
session_unset(); // clear session
session_destroy(); // end session

header("Location: ../addPatient.php");
exit();