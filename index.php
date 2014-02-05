<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  // Quick Access DB Functions
  require_once "fn/db.php";

  // Functions used in creating levels
  require_once "fn/level-help.php" ;

  // Harry Potter Nostalgia
  require_once "meta/harry.php";

  // Metadata about levels; hints, score, cost
  require_once "meta/levels.php";

  // Everything else depends on the current level, so this needs to be evaluated first.
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
        if ($level == 1)
          setcookie("ButBrutusIsAnHonourableMan", $ques, time()-1000);
        elseif ($level == 2)
          header_remove("ABBarPlusABarB");

        $wrongAns = 0;
      }
      else
      {
        $wrongAns = 1;
      }
    }

    // Play it safe - load values from db
    $_SESSION['level'] = getField("gamedata", "level", $uid);
    $_SESSION['qlevel'] = getField("gamedata", "qlevel", $uid);
    $_SESSION['score'] = getField("gamedata", "score", $uid);
  }

  // Sets Respnse headers; Begins HTML; Loads CSS
  require "include/header.php";

  // Main navigation bar
  require "include/nav.php";

  // Bootstrap modal dialogs
  require "include/navmod.php";

  // Load the right level
  if ($_SESSION['loggedin'] == 1)
    include "include/1".$_SESSION['level']."/main.php" ;
  else
    include "include/default/main.php" ;

  // Ends HTML; Loads JS
  require "include/footer.php";
?>
