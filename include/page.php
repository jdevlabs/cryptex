<?php 
if(isset($_GET['debug']))
    print_r($_SESSION);
$flag=0;
$file=$_SERVER['DOCUMENT_ROOT']."/cryptex/include/".$_GET['pid']."/main.php" ;

$current_user_id = $_SESSION['userid'];
if ($_SESSION['loggedin']== 1)
  {
  $result  = mysql_query("SELECT `level` FROM `gamedata` WHERE `userid` = $current_user_id");
  $row = mysql_fetch_row($result);
  $_SESSION['level'] = $row[0];
  }
  
$bool=file_exists($file);
echo "<br/><br/><br/><br/>";
if (!$bool) 
  $flag=10;

if ($_SESSION['loggedin']==1)
  {
    include "".$_SESSION['level']."/main.php" ; 
  }
elseif(isset($_GET['pid']))
 {
    if($flag == 0 )
      include "".$_GET['pid']."/main.php" ; 
    else
      include "404/main.php" ; 
   }
  else
  {
    include "default/main.php" ; 
  }
  ?>
  