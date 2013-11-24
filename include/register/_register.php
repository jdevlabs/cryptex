<?php
// Apply validations 
if(isset($_POST['user'], $_POST['name'], $_POST['pass'],$_POST['email']))
{
	$uName = $_POST['user']; 
	$name = $_POST['name'];
	$pass = md5($_POST['pass']);
	$email = $_POST['email'];
	// echo $uName; echo $name; echo $pass;
	// Check whether the user already exist
	// $result  = mysql_query("SELECT count(userid) FROM user WHERE username = '$uName'");
	$result  = mysql_query("SELECT pass FROM user WHERE `username` = '".$uName."' or `email` = '".$email."'");
	if ( mysql_num_rows($result) > 0 )
		bug("User Already Exists $uName");

	//Insert User
	$query = "INSERT INTO `user`(`username`, `pass` , `email` , `name`) VALUES ('".$uName."','".$pass."' , '".$email."' , '".$name."')";
	//bug($query);
	$result =  mysql_query($query);
	if ($result)
		bug("Registered User ");
	else
		bug("Unable to Insert into DB please try later  ".mysql_error());

}
else
{

	if (isset($_POST['sent']))
	{
		if($_POST['sent']== 'sent')
		if(!isset($_POST['user']))
			bug("Enter Username ");
		if(!isset($_POST['pass']))
			bug("Enter password ");
		if(!isset($_POST['name']))
			bug("Enter name ");
		if(!isset($_POST['email']))
			bug("Enter email ");
	}


}
?>
