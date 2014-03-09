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
  echo("<h3>You can't register before Tuesday, March 11, 2014 8:00:00 PM</h3>");
  require "include/footer.php";
}
else {
//Todo: Update from facebook app before moving into production
define('APP_ID', '585698748162793');
define('APP_SECRET', 'd10588327cfd864f16d4bafda58d4f44');

$facebook = new Facebook(array('appId' => APP_ID,'secret' => APP_SECRET,));

$user = $facebook->getUser();

if ($user)
{
  try
  {
    $user_profile = $facebook->api('/me');
    $_SESSION['fb'] = $user_profile ;
  }
  catch (FacebookApiException $e)
  {
    $user = null;
  }

  if (!empty($user_profile ))
  {
    if( login($user_profile['email']) == 0 )
    insert($user_profile);
  }
}
else
{
  $login_url = $facebook->getLoginUrl(array( 'scope' => 'email'));
  echo('<meta http-equiv="refresh" content="0; URL='.$login_url.'"><center><h1>Redirecting to Facebook ......</h1></center>');
}
}

function login($email)
{
  $_SESSION['update-profile'] =1 ;
  $result = mysql_query("SELECT `pass`,`userid`,`username` FROM user WHERE `email` = '".$email."'");
  if (mysql_num_rows($result) > 0)
  {
    $row = mysql_fetch_row($result);
    //Todo: Update all values from db
    echo ("Successfully logged in");
    $_SESSION['loggedin'] = 1;
    $_SESSION['user'] = $row[2];
    $_SESSION['userid'] = $row[1];
    $_SESSION['level'] = 0;
    $_SESSION['score'] = 0;
    $_SESSION['hints'] = 0;
    echo '<meta http-equiv="refresh" content="0; URL=index.php"><center><h1>Logged In , Redirecting to home</h1></center>' ;
  }

  else
  return 0;
}

function insert($userinfo)
{
  $query = "INSERT INTO `user`( `username`,`email`,`name`) VALUES ('".$userinfo['first_name'].$userinfo['last_name']."','".$userinfo['email']."','".$userinfo['first_name']."')";
  if(mysql_query($query)==FALSE )
  echo("Error Inserting In Database ");

  if( login($userinfo['email'] , 1 ) == 0 )
  echo("Error Try again ");
}

require "include/footer.php";

?>
