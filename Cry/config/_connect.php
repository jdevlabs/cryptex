<?php
	// Database connection values
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'hack');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'kgggdkp2692');

	// Connect and Select Database
	@mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die('dbConnect.php: Connection Failed');
	@mysql_select_db(DB_NAME) or die('dbConnect.php: Database Failed to Load');

	// Better Way.
	// $link = mysql_connect('localhost', 'dufferzafar', 'plok');
	// if (!$link)
	    // die('Could not connect:     ' . mysql_error());
	// echo 'Connected successfully';
	// mysql_close($link);
?>
