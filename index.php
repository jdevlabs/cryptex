<?php
  require "config/_config.php" ;

  //Note: Why is this (and pid) required?
  // if($_GET['pid'] == "facebook" || $_GET['pid']=="facebook/")
  //   {
  //     require "include/facebook/main.php" ;
  //     die();
  //   }

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";

  // if($_SESSION['role'] == 1 )
    // include "include/admin-nav.php" ;

  require "include/page.php" ;
  require "include/footer.php";
?>
