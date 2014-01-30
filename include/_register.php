<?php
require '../config/connect.php';

// Think of other possible validation gotcha's
if (isset($_POST['username'], $_POST['fullname'], $_POST['gender'], $_POST['password'], $_POST['email']))
{
  if (!empty($_POST['username']) && !empty($_POST['fullname']) && !empty($_POST['password']) && !empty($_POST['email']))
  {
    // Note: Don't focus on password hashing for now...
    $uName = $_POST['username']; $name = $_POST['fullname']; $sex = $_POST['gender'];
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
        //Todo: Email should be verified
        $q = "INSERT INTO `user`(`username`, `pass` , `email` , `name`,`gender`) VALUES ('".$uName."','".$pass."' , '".$email."' , '".$name."','".$sex."')";
        $r1 =  mysql_query($q);
        //Note: What if one of these queries is successful and the other isn't?
        $q = "INSERT INTO `gamedata`(`level`, `score`, `reached`, `qlevel`, `ques`, `ans`) VALUES ('1', '1000', " . time() . ", '0', '', '')";
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
    // Error occurred in validation
    echo "Invalid Input";
  }
}
else
{
  //Somehow, the data has not reached us ... ?
  echo("No Data Passed...");
}
?>
