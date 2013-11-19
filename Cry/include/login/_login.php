<?php

if(isset($_POST['user'],  $_POST['pass']))
{
	$uName = $_POST['user']; $pass = $_POST['pass'];
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exists
	$result  = mysql_query("SELECT pass FROM user WHERE username = '$uName'");
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_row($result);
		if ($pass == $row[0]){
			echo "Successfully Logged In :)";
			 $_SESSION['loggedin']=1;
			 $_SESSION['user']=$uName;
  			 $_SESSION['level']=0;
             $_SESSION['score']=0;
             $_SESSION['hints']=0;
             }
		else
			echo "$row[0] = Password is Incorrect";
	}
	else
		echo "User Does Not Exists";
}
?>
