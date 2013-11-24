<?php
require '../../config/_connect.php';
require '../../config/_session.php';

if(isset($_POST['user'],  $_POST['pass']))
{
  $uName = $_POST['user']; $pass = $_POST['pass'];
  // Check whether the user already exists
  $result = mysql_query("SELECT pass, userid FROM user WHERE username = '$uName'");
  if (mysql_num_rows($result) > 0)
  {
    $row = mysql_fetch_row($result);
    // BUG: SQL Injection Here!
    // if (md5($pass) == $row[0])
    if ($pass == $row[0])
    {
      //Todo: Update all values from db
      echo("Successfully logged in");
      $_SESSION['loggedin'] = 1;
      $_SESSION['user'] = $uName;
      $_SESSION['userid'] = $row[1];
      $_SESSION['level'] = 0;
      $_SESSION['score'] = 0;
      $_SESSION['hints'] = 0;
    }
    else
      echo "Either Username or Password is Incorrect";
  }
  else
    echo "User Does Not Exists";
}
else
{
  echo("Bitch Please!");
}
?>
