<?php

  $arr = array(1, 2, 3, 4,5,6,7,8,9,10,11,12,13);

  $file = $_SERVER['DOCUMENT_ROOT']."/cryptex/include/".$_GET['pid']."/main.php" ;
  $bool = file_exists($file);

  //Note: Any level can be accessed by passing the correct pid.
  //Note: What is the use of 'pid' anyway?

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

      $query  = "SELECT `level` FROM `gamedata` WHERE `userid` = $current_userid";

      if (mysql_num_rows(mysql_query($query)) < 1)
      {
        $q="INSERT INTO `gamedata`(`userid`, `level`) VALUES ( $current_userid, 1)";

        mysql_query($q);
        $result = mysql_query($query);
        //echo mysql_error();
      }
      else
      {
        $result = mysql_query($query);
      }


      $row = mysql_fetch_row($result);

      $_SESSION['level'] = $row[0];

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

          // Reload From Database.
          // Note: Equal to $_SESSION['level']++ ?
          $_SESSION['level'] = intval(getField("gamedata", "level", $current_userid));
        }
      }

      include "".$_SESSION['level']."/main.php" ;
    }
    else
    {
      include "default/main.php" ;
    }
  }

  // if(isset($_GET['debug']))
  //     print_r($_SESSION);
?>
