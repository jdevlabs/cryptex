<?php
// Database connection values
// Note: Database parameters on the server are different
define('DB_HOST', 'localhost');
define('DB_NAME', 'thinkdif_cryptex');
define('DB_USERNAME', 'thinkdif');
define('DB_PASSWORD', 'kgggdkp1992');

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