<?php
  require '../config/_connect.php';
  require '../config/_session.php';
  require '../config/_dbFunctions.php';

  updateField("gamedata", "level", '1', $_SESSION['userid']);
  updateField("gamedata", "qlevel", '', $_SESSION['userid']);

  echo("Reset Successful");
?>
