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
    echo "HintText:" . $hint[$level];
    echo "CurrentScore:" . $_SESSION['score'];
    echo "HintsUsed:" . $_SESSION['hints'];
  }
  else
  {
    echo "HintErrorOccurred:" . mysql_error();
  }
}
?>
