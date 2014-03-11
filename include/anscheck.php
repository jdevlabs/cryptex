<?php
if ($_SESSION['loggedin'] == 1)
{
  $uid = $_SESSION['userid'];
  $level = $_SESSION['level'];

  //Form submitted. Check whether the answer is correct.
  if (isset($_POST['answer']))
  {
    $ans = getField("gamedata", "ans", $uid);
    $qlevel = getField("gamedata", "qlevel", $uid);

    // The question was generated on this level and the answer matches
    if (($level == $qlevel) && (trim($_POST['answer']) == $ans))
    {
      // Update the current level
      updateField("gamedata", "level", $level + 1, $uid);
      updateField("gamedata", "reached", time(), $uid);
      updateField("gamedata", "score", $_SESSION['score'] + $levelScore[$level], $uid);
      // mysql_query("UPDATE gamedata SET level = '1', score = '1000', reached = '" . time() ."' WHERE userid = $uid");

      // Cleanup after levels
      if ($level == 5)
        setcookie("ButBrutusIsAnHonourableMan", $ques, time()-1000);
      elseif ($level == 6)
        header_remove("ABBarPlusABarB");

      $wrongAns = 0;
    }
    else
    {
      $wrongAns = 1;
    }
  }

  // For level 4: Dom Editing
  if ($level == 4)
  {
    if (isset($_POST['prophecy'], $_POST['horcrux'], $_POST['moto']))
    {
      if (($_POST['prophecy'] == "Trelawney") && ($_POST['horcrux'] == "7") && ($_POST['moto'] == "Titillandus"))
      {
        updateField("gamedata", "level", $level + 1, $uid);
        updateField("gamedata", "reached", time(), $uid);
        updateField("gamedata", "score", $_SESSION['score'] + $levelScore[$level], $uid);
        $wrongAns = 0;
      }
      else
      {
        $wrongAns = 1;
      }
    }
  }

  // Play it safe - load values from db
  $_SESSION['level'] = getField("gamedata", "level", $uid);
  $_SESSION['qlevel'] = getField("gamedata", "qlevel", $uid);
  $_SESSION['score'] = getField("gamedata", "score", $uid);
}

?>
