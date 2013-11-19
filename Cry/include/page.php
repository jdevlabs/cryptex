<?php 
$flag=0;
$file=$_SERVER['DOCUMENT_ROOT']."/cryptex/Cry/include/".$_GET['pid']."/main.php" ;
$current_user_id = $_SESSION['userid']
if ($_SESSION['loggedin']== 1)
  $_SESSION['level'] = getField("gamedata", "level", $current_user_id);
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
  