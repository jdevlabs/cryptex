<?php

error_reporting(0);

define('DB_HOST', 'localhost');
define('DB_NAME', 'cryptex');
define('DB_USERNAME', 'cryptex_user');
define('DB_PASSWORD', 'cryptex_pass');

// Connect and Select Database
mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die('Database Error: Connection Failed'.mysql_error());
mysql_select_db(DB_NAME) or die('Database Error: DB to Load'.mysql_error());

?>
