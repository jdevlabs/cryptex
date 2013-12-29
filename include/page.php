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
