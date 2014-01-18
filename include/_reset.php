<?php
  // Todo: Remove RESET functionality on post-production

  require '../config/_connect.php';
  require '../config/_dbFunctions.php';
  require '../config/_session.php';

  $uid = $_SESSION['userid'];
  $result = mysql_query("UPDATE gamedata SET level = '1', score = '1000', reached = ' " . time() ."', qlevel = '0' WHERE userid = $uid");
  if (!$result)
  {
    echo(mysql_error());
  }
  else
  {
    echo("Reset Successful");
  }
?>
