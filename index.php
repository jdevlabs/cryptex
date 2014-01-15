<?php
  // Note: Remove Debug Functions
  // require "config/_config.php";

  require_once "config/_connect.php";
  require_once "config/_dbFunctions.php";
  require_once "config/_session.php";

  require_once "include/_helpers.php" ;
  require_once "include/_hpWorld.php" ;

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
