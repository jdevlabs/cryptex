<?php
  // Note: Remove Debug Functions

  require_once "config/connect.php";
  require_once "config/session.php";

  // Quick Access DB Functions
  require_once "fn/db.php";

  // Functions used in creating levels
  require_once "fn/level-help.php" ;

  // HP Nostalgia
  require_once "meta/harry.php";

  // Meta data about levels; hints, score, cost
  require_once "meta/levels.php";

  // Everything else depends on the current level, so this needs to be evaluated first.
  if ($_SESSION['loggedin'] == 1)
  {
    $userid = $_SESSION['userid'];

    //Form submitted. Check whether answer is correct.
    if (isset($_POST['answer']))
    {
      $postAns = trim($_POST['answer']);

      $ans = getField("gamedata", "ans", $userid);

      if ($postAns == $ans)
      {
        // Update the current level
        updateField("gamedata", "level", $_SESSION['level'] + 1, $userid);
        updateField("gamedata", "reached", time(), $userid);

        // Update Score
        if ($_SESSION['level'] <= 5)
        {
          updateField("gamedata", "score", $_SESSION['score'] + 1000, $userid);
        }
      }
    }

    // No problem in loading values from db
    $_SESSION['level'] = getField("gamedata", "level", $userid);
    $_SESSION['score'] = getField("gamedata", "score", $userid);
  }

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";

  // Todo: Remove the need of pid and then merge page.php here.
  require "include/page.php" ;
  require "include/footer.php";
?>
