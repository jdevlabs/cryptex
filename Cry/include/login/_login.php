<?php

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
			echo "Successfully Logged In :)";
		else
			echo "$row[0] = Password is Incorrect";
	}
	else
		echo "User Does Not Exists";
}
else
?>
