<?php
require '../config/connect.php';
require '../config/session.php';

require '../fn/db.php';

require "../meta/levels.php";

$uid = $_SESSION['userid'];
$level = $_SESSION['level'];
$hlevel = getField("gamedata", "hlevel", $uid);

if ($level != $hlevel)
{
  $_SESSION['score'] = $_SESSION['score'] - $hintCost[$level];
  $_SESSION['hints']++;
  $res = updateFields("gamedata", "score = " . $_SESSION['score'] . ", hints = " . $_SESSION['hints'] . ", hlevel = " . $level, $uid);

  if (!$res)
  {
    echo $hint[$level];
    echo "CS:" . $_SESSION['score'] . " " . "HU:" . $_SESSION['hints'];
  }
  else
  {
    echo "HintError:" . mysql_error();
  }
}
?>
