<?php
require '_connect.php';

if(isset($_POST['username'], $_POST['name'], $_POST['password']))
{
	$uName = $_POST['username']; $name = $_POST['name'];
	$pass = $_POST['password'];
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exist
	// $result  = mysql_query("SELECT count(userid) FROM user WHERE username = '$uName'");
	$result  = mysql_query("SELECT pass FROM user WHERE username = '$uName'");
	if ( mysql_num_rows($result) > 0 )
		die("User Already Exists $uName");

	//Insert User
	$result =  mysql_query("INSERT INTO user (username, pass) VALUES('$uName', '$pass')");
	if ($result)
		die("Inserted to DB");

	die();
}
else
	die("Send Some Params Motherfucker");
?>
