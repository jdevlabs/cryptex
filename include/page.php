<?php

  $arr = array(1, 2, 3, 4,5,6,7,8,9,10,11,12,13);

  $file = $_SERVER['DOCUMENT_ROOT']."/cryptex/include/".$_GET['pid']."/main.php" ;
  $bool = file_exists($file);

  //Todo: Only allow pid access to leaderboard/facebook etc.
  if (isset($_GET['pid']))
  {
    if($bool)
      {
      foreach ($arr as $value)
        if ($value == $_GET['pid'])
        {
          $flag = 1 ;
          break;
        }
        if ($flag)
          include "404/main.php" ;
        else
          include "".$_GET['pid']."/main.php" ;
      }
    else
      include "404/main.php" ;
  }
  else
  {
    if ($_SESSION['loggedin'] == 1)
    {
      $current_userid = $_SESSION['userid'];

      //Form submitted. Check whether answer is correct.
      if (isset($_POST['answer']))
      {
        $postAns = trim($_POST['answer']);

        $ans = getField("gamedata", "ans", $current_userid);

        if ($postAns == $ans)
        {
          // echo("Level Cleared");

          // Update the current level
          updateField("gamedata", "level", $_SESSION['level'] + 1, $current_userid);

          // Update Score
          if ($_SESSION['level'] < 4)
          {
            updateField("gamedata", "score", $_SESSION['score'] + 1000, $current_userid);
          }
        }
      }

      // No problem in loading values from db
      $_SESSION['level'] = intval(getField("gamedata", "level", $current_userid));
      $_SESSION['score'] = intval(getField("gamedata", "score", $current_userid));

      include "".$_SESSION['level']."/main.php" ;
    }
    else
    {
      include "default/main.php" ;
    }
  }

  //Todo: Remove on Post-Production.
  if(isset($_GET['debug']))
    print_r($_SESSION);
?>
