<?php
require 'dbConnect.php';

if(isset($_POST['username'], $_POST['name'], $_POST['password']))
{
	$uName = $_POST['username']; $name = $_POST['name'];
	$pass = $_POST['password'];
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exists
	$query  = mysql_query("SELECT count(userid) FROM user WHERE username = '$uName'");
	$result = mysql_fetch_row($query);
	if ( $result[0] > 0 )
		die("User Already Exists");

	//Insert User
	$query =  mysql_query("INSERT INTO user (username, pass) VALUES('$uName', '$pass')");
	if ($query)
		die("Inserted to DB");

	die();
}
else
	die("Send Some Params Motherfucker");

// $query = "SELECT userid, pass FROM user WHERE username = 'dufferzafar' ORDER BY userid";

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
	// echo mysql_error();
	die("<br><br>Query Failed");
}
?>
