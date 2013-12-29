<?php
  require '../config/_connect.php';
  require '../config/_dbFunctions.php';
  require '../config/_session.php';

  updateField("gamedata", "level", '1', $_SESSION['userid']);
  updateField("gamedata", "score", '1000', $_SESSION['userid']);
  updateField("gamedata", "qlevel", '', $_SESSION['userid']);

  // Note: What if an error occurs in SQL
  echo("Reset Successful");
?>
