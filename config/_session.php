<?php

session_start();

if($_SESSION['loggedin'] != 1)
{
  $_SESSION['loggedin'] = 0;
  $_SESSION['user'] = "Anon";
  $_SESSION['userid'] = 0;
  $_SESSION['level'] = 0;
  $_SESSION['score'] = 0;
  $_SESSION['hints'] = 0;
}

?>

