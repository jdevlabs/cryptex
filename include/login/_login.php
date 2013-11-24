<?php
//require '../../config/_connect.php'; No need for including these again, they are already included
//require '../../config/_session.php';

if(isset($_POST['user'],  $_POST['pass']))
{
	$uName = $_POST['user']; $pass = $_POST['pass'];
	// Check whether the user already exists
  $result = mysql_query("SELECT pass, userid FROM user WHERE username = '$uName'");
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_row($result);
		if (md5($pass) == $row[0])
    {
      //Todo: Update all values from db
      bug("Successfully logged in");
      $_SESSION['loggedin'] = 1;
      $_SESSION['user'] = $uName;
      $_SESSION['userid'] = $row[1];
      $_SESSION['level'] = 0;
      $_SESSION['score'] = 0;
      $_SESSION['hints'] = 0;
      bug("<a href='index.php'>Click Here to Continue </a>");
      header("Location: index.php");
    }
    else
      echo "Either Username or Password is Incorrect";
	}
	else
		echo "User Does Not Exists";
}
else
{
 bug("Please Login to continue ");
}
?>
