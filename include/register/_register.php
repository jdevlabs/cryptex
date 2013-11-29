<?php
require '../../config/_connect.php';

// Apply validations
if (isset($_POST['username'], $_POST['fullname'], $_POST['password'], $_POST['email']))
{
  if (!empty($_POST['username']) && !empty($_POST['fullname']) && !empty($_POST['password']) && !empty($_POST['email']))
  {
    // Todo: Passwords should not be stored in plaintext format... Hash them
    $uName = $_POST['username']; $name = $_POST['fullname'];
    $email = $_POST['email']; $pass = $_POST['password'];

    // Check whether the user already exist
    $q = "SELECT pass FROM user WHERE email = '$email'";
    $r =  mysql_query($q);
    if ( mysql_num_rows($r) > 0 )
    {
      echo("Email already exists");
    }
    else
    {
      $q = "SELECT pass FROM user WHERE username = '$uName'";
      $r =  mysql_query($q);
      if ( mysql_num_rows($r) > 0 )
      {
        echo("Username already exists");
      }
      else
      {
        //Insert User as Email & Username both are unique
        $q = "INSERT INTO `user`(`username`, `pass` , `email` , `name`) VALUES ('".$uName."','".$pass."' , '".$email."' , '".$name."')";
        $r1 =  mysql_query($q);

        $q = "INSERT INTO `gamedata`(`level`, `qlevel`, `ques`, `ans`) VALUES ('1', '', '', '')";
        $r2 =  mysql_query($q);

        if ($r1 and $r2)
          echo("Registeration Successful");
        else
          echo("An error occurred while inserting into db. <br> Please Try Again Later :( <br>".mysql_error());
      }
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
