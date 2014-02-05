<?php

session_start();

if($_SESSION['loggedin'] == 1)
{
  $userid = $_SESSION['userid'];

  $result  = mysql_query("SELECT level, score, hints, qlevel FROM gamedata WHERE userid = $userid");
  $row = mysql_fetch_row($result);

  $_SESSION['level'] = $row[0];
  $_SESSION['score'] = $row[1];
  $_SESSION['hints'] = $row[2];
  $_SESSION['qlevel'] = $row[3];
}
else
{
  $_SESSION['loggedin'] = 0;
  $_SESSION['user'] = "Anon";
  $_SESSION['userid'] = 0;
  $_SESSION['level'] = 0;
  $_SESSION['qlevel'] = 0;
  $_SESSION['score'] = 0;
  $_SESSION['hints'] = 0;
}

?>

