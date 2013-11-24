<?php

if(isset($_POST['user'], $_POST['name'], $_POST['password']))
{
	$uName = $_POST['user']; $name = $_POST['name'];
	$pass = md5($_POST['pass']);
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exist
	// $result  = mysql_query("SELECT count(userid) FROM user WHERE username = '$uName'");
	$result  = mysql_query("SELECT pass FROM user WHERE username = '$uName'");
	if ( mysql_num_rows($result) > 0 )
		bug("User Already Exists $uName");

	//Insert User
	$query = "INSERT INTO `user`(`username`, `pass`) VALUES ('".$uName."','".$pass."')";
	$result =  mysql_query($query);
	if ($result)
		bug("Inserted to DB");
	else
		bug("Unable to Insert into DB please try later  ".mysql_error());

}
?>
