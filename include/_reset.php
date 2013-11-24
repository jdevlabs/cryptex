<?php
  require '../../config/_connect.php';
  require '../../config/_session.php';


  echo("Successfully logged in");
  $_SESSION['loggedin'] = 0;
  $_SESSION['user'] = "Anon";
  $_SESSION['level'] = 0;
  $_SESSION['score'] = 0;
  $_SESSION['hints'] = 0;
  $_SESSION['userid'] = 0;
?>
