
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
    echo "No Result Found";
  }
  else
  {
    while ($qRow = mysql_fetch_assoc($qRun))
    {
      $userid = $qRow['userid'];
      $pass = $qRow['pass'];

      echo "User " . $userid . " has password " . $pass .  "<br>";
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

die("<br><br>All is well");
?>

<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/crypt.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Email address" autofocus>
        <input type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
