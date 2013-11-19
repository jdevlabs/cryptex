<?php

session_start();

if($_SESSION['loggedin'] != 1)
{
   $_SESSION['loggedin'] = 25;
   $_SESSION['user'] = "Anon";
   $_SESSION['level'] = 0;
   $_SESSION['score'] = 0;
   $_SESSION['hints'] = 0;
}

?>

