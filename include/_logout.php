<?php
  require '../config/connect.php';
  require '../config/session.php';

  // Remove every user info.
  session_start();
  session_unset();
  session_destroy();

  echo("Logout Successful");

  // Logged out, return home.
  // Header("Location: index.php");

?>
