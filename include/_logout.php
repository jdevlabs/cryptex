<?php
  require '../config/_connect.php';
  require '../config/_session.php';

  // Todo: Make sure all the user data is stored into db before exiting.
  // Remove every user info.
  session_start();
  session_unset();
  session_destroy();

  echo("Logout Successful");

  // Logged out, return home.
  // Header("Location: index.php");

?>
