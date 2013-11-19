<?php 



require "config/_config.php" ; 

if($_GET['pid'] == "facebook" || $_GET['pid']=="facebook/")
  {
    require "include/facebook/main.php" ;
    die();
  }
require "include/header.php";
require "include/nav.php";
if($_SESSION['role'] == 1 )
  include "include/admin-nav.php" ; 
require "include/page.php" ;
require "include/footer.php";
?>
