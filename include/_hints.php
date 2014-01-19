<?php
require '../config/connect.php';
require '../config/session.php';

require "../meta/levels.php";

$level = $_SESSION['level'];
$uid = $_SESSION['userid'];

// Todo: Update the session var in db
$_SESSION['score'] = $_SESSION['score'] - $hintCost[$level];
$_SESSION['hints']++;

/*
  if ($level != $hlevel)
  {

  }
*/

if (1)
{
  echo "HintText - " . $hint[$level] . "   " . $_SESSION['score'];
}
else
{
  echo "Hint Error Occurred";
}

/**
 * Modifies db and $_SESSION['hints']
 * Todo: PH - 'hints' in gamedata
 */

?>
