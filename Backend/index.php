<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex | Register</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link type = "text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
</head>

<body>
  <!-- <img src="assets/img/Cryptex_logo.png" style="margin-left: 286px; margin-top: -5px; height=50%; widht=50%"> -->
  <div class="span4 offset4 well "  style="margin-top: 100px;">
  <form id="submitForm">

    <legend>Registration</legend>
    <div id="alertMsg" class="alert" style="display: none;"></div>
    <label>Username</label>
    <input type="text" id="uName" class="span4" name="username" placeholder="Name that'll be displayed" required autofocus>
    <label>Full Name</label>
    <input type="text" id="name" class="span4" name="name" placeholder="Your full name" required>
    <!-- <label>E-mail</label> -->
    <!-- <input type="email" id="email" class="span4" name="email" placeholder="A valid E-mail address"> -->
    <label>Password</label>
    <input type="password" id="pass" class="span4" name="password" placeholder="Password" required>
    <label>Re-enter Password</label>
    <input type="password" id="cPass" class="span4" name="cpassword" placeholder="Confirm password" required>

    <button style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">Register me</button>
    <button style="margin-top: 20px;" name="Register" class="btn btn-info btn-block">Login with Facebook</button>
  </form>
  </div>

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="assets/js/register.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>


<?php

//Database Parameters
$mysql_host = 'localhost';
$mysql_user = 'dufferzafar';
$mysql_pass = 'plok';

$mysql_db = 'test';

// Testing
@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die('Connection Failed');
@mysql_select_db($mysql_db) or die('Database Failed to Load');

// DB Loaded. Have Some Fun Now.
$query = "SELECT userid, pass FROM user WHERE username = 'dufferzafar' ORDER BY userid";

if ($qRun = mysql_query($query))
{
  // echo "Query successfully executed";

  // No Row Macthed
  if (mysql_num_rows($qRun) == NULL)
  {
    // echo "No Result Found";
  }
  else
  {
    while ($qRow = mysql_fetch_assoc($qRun))
    {
      $userid = $qRow['userid'];
      $pass = $qRow['pass'];

      // echo "User " . $userid . " has password " . $pass .  "<br>";
    }
  }
}
else
{
  echo mysql_error();
  die("<br><br>Query Failed");
}


// Better Way.
// $link = mysql_connect('localhost', 'dufferzafar', 'plok');
// if (!$link)
// {
//     die('Could not connect:     ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);

// die("<br><br>All is well");
?>
