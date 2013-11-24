<?php
// Database connection values
// Todo: Match them with the server *Low*
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USERNAME', 'dufferzafar');
define('DB_PASSWORD', 'plok');

// Connect and Select Database
mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die('dbConnect.php: Connection Failed'.mysql_error());
mysql_select_db(DB_NAME) or die('dbConnect.php: Database Failed to Load'.mysql_error());

// Better Way.
// $link = mysql_connect('localhost', 'dufferzafar', 'plok');
// if (!$link)
    // die('Could not connect:     ' . mysql_error());
// echo 'Connected successfully';
// mysql_close($link)
?>
