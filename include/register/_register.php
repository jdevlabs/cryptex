<?php
require '../../config/_connect.php';

// Apply validations
if (isset($_POST['uname'], $_POST['full'], $_POST['pass'], $_POST['email']))
{
  if (!empty($_POST['uname']) && !empty($_POST['full']) && !empty($_POST['pass']) && !empty($_POST['pass']))
  {
    // Todo: Passwords should not be stored in plaintext format... Hash them
    $uName = $_POST['uname']; $name = $_POST['full'];
    $email = $_POST['email']; $pass = $_POST['pass'];

    // Check whether the user already exist
    $result  = mysql_query("SELECT pass FROM user WHERE username = '$uName' or email = '$email'");

    if ( mysql_num_rows($result) > 0 )
    {
      echo("User Already Exists");
    }
    else
    {
      //Insert User
      $query = "INSERT INTO `user`(`username`, `pass` , `email` , `name`) VALUES ('".$uName."','".$pass."' , '".$email."' , '".$name."')";
      $r1 =  mysql_query($query);

      $query = "INSERT INTO `gamedata`(`level`, `qlevel`, `ques`, `ans`) VALUES ('1', '', '', '')";
      $r2 =  mysql_query($query);

      if ($r1 and $r2)
        echo("Registeration Successful");
      else
        echo("An error occurred while inserting into db. <br> Please Try Again Later :( <br>".mysql_error());
    }
  }
  else
  {
    echo "Invalid Input";
  }
}
else
{
  //Somehow, the data has not reached ... ?
  echo("No Data Passed...");
}
?>
