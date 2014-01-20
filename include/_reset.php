<?php
  // Todo: Remove RESET functionality on post-production
  require '../config/connect.php';
  require '../config/session.php';

  $uid = $_SESSION['userid'];
  $result = mysql_query("UPDATE gamedata SET level = '1', score = '1000', reached = '" . time() ."', qlevel = '0', hints = 0, hlevel = 0 WHERE userid = $uid");
  if ($result)
  {
    echo("Reset Successful");
  }
  else
  {
    echo(mysql_error());
  }
?>
