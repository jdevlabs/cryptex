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
      if ((strtolower($_POST['prophecy']) == "trelawney") && ($_POST['horcrux'] == "7") && (strtolower($_POST['moto']) == "titillandus"))
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
  if( !function_exists('apache_request_headers') )
  {
    function apache_request_headers()
    {
      $arh = array();
      $rx_http = '/\AHTTP_/';
      foreach($_SERVER as $key => $val)
      {
        if( preg_match($rx_http, $key) )
        {
          $arh_key = preg_replace($rx_http, '', $key);
          $rx_matches = array();
          $rx_matches = explode('_', $arh_key);
          if( count($rx_matches) > 0 and strlen($arh_key) > 2 )
          {
            foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
            $arh_key = implode('-', $rx_matches);
          }
          $arh[$arh_key] = $val;
        }
      }
      return( $arh );
    }
  }
  if ($level == 15)
  {
    $head = apache_request_headers();
    // print_r($head);
    if ($head["ANSWER"] == "Elm") {
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

  // Play it safe - load values from db
  $_SESSION['level'] = getField("gamedata", "level", $uid);
  $_SESSION['qlevel'] = getField("gamedata", "qlevel", $uid);
  $_SESSION['score'] = getField("gamedata", "score", $uid);
}

?>
