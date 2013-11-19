<?php 

session_start();
if($_SESSION['loggedin']!=1)
	$_SESSION['user']="Annon" ; 
?>
 