<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require_once "fn/db.php";
  require 'fn/facebook.php';

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";

  if (time() < 1394548200)
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
        if(login($user_profile['email']) == 0 )
        {
          insert($user_profile);
        }
      }
    }
    else
    {
      $login_url = $facebook->getLoginUrl(array( 'scope' => 'email,publish_stream'));
      echo('<meta http-equiv="refresh" content="0; URL='.$login_url.'"><center><h3>Redirecting to Facebook...</h3></center>');
    }

    require "include/footer.php";
  }

  function postMsg($msg, $link)
  {
    $link ="http://cryptex.feeltherhythm.in/";
    $msg = "I am playing Cryptex! Think you can beat me?";

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

      echo '<meta http-equiv="refresh" content="0; URL=index.php"><center><h1>Logged In , Redirecting to home</h1></center>' ;
    }

    else
      return 0;
  }

  function insert($userinfo)
  {
    $q = "INSERT INTO `user`(`username`, `pass` , `email` , `name`, `gender`, `admin`) VALUES ('".$userinfo['first_name']." ".$userinfo['last_name']."',' ' , '".$userinfo['email']."' , '".$userinfo['first_name']." ".$userinfo['last_name']."', '' , '0')";
    $r1 =  mysql_query($q);

    $q = "INSERT INTO `gamedata`(`level`, `score`, `reached`, `hints`, `qlevel`, `hlevel`, `ques`, `ans`) VALUES ('1', '1000', " . time() . ", '0', '0', '0', '', '')";
    $r2 =  mysql_query($q);

    if ($r1 and $r2)
    {
      if( login($userinfo['email']) == 0 )
        echo("An error occurred while inserting into db. <br> Please Try Again Later :(");
      else
        postMsg("Sha", "Link");
    }
    else
    {
      echo("An error occurred while inserting into db. <br> Please Try Again Later :(");
    }
  }

?>
