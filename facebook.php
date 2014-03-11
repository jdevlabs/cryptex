<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require_once "fn/db.php";
  require 'fn/facebook.php';

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";

  if (time() < 1394551800)
  {
    echo("<center><h3>You can't register before Tuesday, March 11, 2014 9:00:00 PM</h3></center>");
    require "include/footer.php";
  }
  else
  {
    define('APP_ID', '585698748162793');
    define('APP_SECRET', 'd10588327cfd864f16d4bafda58d4f44');

    $facebook = new Facebook(array('appId' => APP_ID,'secret' => APP_SECRET,));

    $user = $facebook->getUser();

    if ($user)
    {
      try
      {
        $user_profile = $facebook->api('/me');
      }
      catch (FacebookApiException $e)
      {
        $user = null;
      }

      if (!empty($user_profile))
      {
        // User does not already exists!
        $result = mysql_query("SELECT `userid`,`username` FROM user WHERE `email` = '".$user_profile['email']."'");
        if (mysql_num_rows($result) == 0)
        {
          $q = "INSERT INTO `user`(`username`, `pass` , `email` , `name`, `gender`, `admin`) VALUES ('".$user_profile['first_name']." ".$user_profile['last_name']."','".$user."' , '".$user_profile['email']."' , '".$user_profile['first_name']." ".$user_profile['last_name']."', '' , '0')";
          $r1 =  mysql_query($q);

          $q = "INSERT INTO `gamedata`(`level`, `score`, `reached`, `hints`, `qlevel`, `hlevel`, `ques`, `ans`) VALUES ('1', '1000', " . time() . ", '0', '0', '0', '', '')";
          $r2 =  mysql_query($q);

          login($user_profile['email']);

          postMsg("I am playing Cryptex! Think you can beat me?","http://cryptex.feeltherhythm.in/");
        }
        else
        {
          login($user_profile['email']);
        }
      }
    }
    else
    {
      $login_url = $facebook->getLoginUrl(array( 'scope' => 'email,publish_stream'));
      echo('<meta http-equiv="refresh" content="0; URL='.$login_url.'"><center><h5>Initializing the awesome...</h5></center>');
    }

    require "include/footer.php";
  }

  function login($email)
  {
    $result = mysql_query("SELECT `userid`,`username` FROM user WHERE `email` = '".$email."'");
    if (mysql_num_rows($result) > 0)
    {
      $row = mysql_fetch_row($result);

      $_SESSION['loggedin'] = 1;
      $_SESSION['userid'] = $row[0];
      $_SESSION['user'] = $row[1];

      $uid = $_SESSION['userid'];

      $result = mysql_query("SELECT level, score, hints FROM gamedata WHERE userid = '$uid'");
      $row = mysql_fetch_row($result);

      $_SESSION['level'] = $row[0];
      $_SESSION['score'] = $row[1];
      $_SESSION['hints'] = $row[2];

      echo '<meta http-equiv="refresh" content="0; URL=index.php"><center><h5>Almost done!</h5></center>' ;
    }
    else
    {
      echo "Login Failed!";
      return 0;
    }
  }

  function postMsg($msg, $link)
  {
    try
    {
      $ret_obj = $facebook->api('/me/feed', 'POST', array('link' => $link,'message' => $msg));
      echo "Published to wall sucessfully ! ";
    }
    catch(FacebookApiException $e)
    {
      $login_url = $facebook->getLoginUrl(array('scope' => 'publish_stream'));
      echo 'Please <a href="' . $login_url . '">login.</a>';
    }
  }

?>
