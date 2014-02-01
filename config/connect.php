<?php

error_reporting(0);

// Note: Database parameters on the server are different
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USERNAME', 'dufferzafar');
define('DB_PASSWORD', 'plok');

// Connect and Select Database
mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die('Database Error: Connection Failed'.mysql_error());
mysql_select_db(DB_NAME) or die('Database Error: DB to Load'.mysql_error());

?>
