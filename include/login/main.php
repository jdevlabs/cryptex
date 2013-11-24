<?php include "_login.php"; ?>
<?php
  //Note: Is login/main.php required? Isn't main page enough?
?>
<?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="col-md-4 col-md-offset-4 well" style="margin-top: 95px;">
    <form name="input" action="?pid=login" method="POST">
    Username: <input type="text" name="user"><br/>
    Password: <input type="text" name="pass"><br/>
    <input type="submit" value="Submit">
    </form>
  </div>
<?php } ?>
