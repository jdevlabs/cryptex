<?php
require 'dbConnect.php';

if(isset($_POST['username'], $_POST['password'])) {
  extract($_POST);

// DB Loaded. Have Some Fun Now.
$query = "SELECT userid, pass FROM user WHERE username = 'dufferzafar' ORDER BY userid";

if ($qRun = mysql_query($query))
{
  // echo "Query successfully executed";

  // No Row Macthed
  if (mysql_num_rows($qRun) == NULL)
  {
    // echo "No Result Found";
  }
  else
  {
    while ($qRow = mysql_fetch_assoc($qRun))
    {
      $userid = $qRow['userid'];
      $pass = $qRow['pass'];

      // echo "User " . $userid . " has password " . $pass .  "<br>";
    }
  }
}
else
{
  echo mysql_error();
  die("<br><br>Query Failed");
}


// die("<br><br>All is well");
?>
