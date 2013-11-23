<?php

  // Todo: Make sure all the info is stored into db before exiting.
  // Remove every user info.
  session_start();
  session_unset();
  session_destroy();

  // Logged out, return home.
  Header("Location: index.php");

?>
