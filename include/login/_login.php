<?php

if(isset($_POST['user'],  $_POST['pass']))
{
	$uName = $_POST['user']; $pass = $_POST['pass'];
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exists
	$q= "SELECT pass,userid FROM user WHERE username = '$uName'" ;
	//echo $q ;
	$result  = mysql_query($q);
	#echo $result ; 
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
             $_SESSION['userid'] = $row[1];
             echo "<a href='index.php'>Click here to continue </a>"; 
             }
		else
			echo "$row[0] = Password is Incorrect";
	}
	else
		echo "User Does Not Exists";
}
?>
