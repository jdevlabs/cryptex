<?php
require '_connect.php';

if(isset($_POST['username'],  $_POST['password']))
{
	$uName = $_POST['username']; $pass = $_POST['password'];
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exists
	$result  = mysql_query("SELECT pass FROM user WHERE username = '$uName'");
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_row($result);
		if ($pass == $row[0])
			die("Successfully Logged In :)");
		else
			die("$row[0] = Password is Incorrect");
	}
	else
		die("User Does Not Exists");
}
else
	die("Send Some Params Motherfucker");
?>
