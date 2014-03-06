<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  // Quick Access DB Functions
  require_once "fn/db.php";

  // Functions used in creating levels
  require_once "fn/level-help.php" ;

  // Harry Potter Nostalgia
  require_once "meta/harry.php";

  // Metadata about levels; hints, score, cost
  require_once "meta/levels.php";

  // The current level
  require "include/anscheck.php";

  // Sets Respnse headers; Begins HTML; Loads CSS
  require "include/header.php";

  // Main navigation bar
  require "include/nav.php";

  // Bootstrap modal dialogs
  require "include/navmod.php";

  // Load the right level
  if ($_SESSION['loggedin'] == 1)
    require "include/1".$_SESSION['level']."/main.php" ;
  else
    require "include/default/main.php" ;

  // Ends HTML; Loads JS
  require "include/footer.php";
?>
