<?php

//Debug Function 
  function bug($e)
  {
    echo "<pre>";
    echo $e ;
    echo "</pre>";
  }
  require "config/_config.php" ;

  //Todo: Understand what this is?
   if($_GET['pid'] == "facebook" || $_GET['pid']=="facebook/")
     {
       require "include/facebook/main.php" ;
       die();
     }

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";

  // if($_SESSION['role'] == 1 )
  //  include "include/admin-nav.php" ;

  require "include/page.php" ;
  require "include/footer.php";
?>
