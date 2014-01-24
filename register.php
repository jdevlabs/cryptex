<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";
?>

<?php if ($_SESSION['loggedin'] != 1 ) { ?>
<script> document.title = "Cryptex | Register" </script>
<div class="container">
    <div class="col-md-6 col-md-offset-3 well" style="margin-top: 50px;">
      <form id="regForm" name="input" method="POST" autocomplete="on">
        <legend data-toggle="popover" data-title="Recheck form and try again" data-container="body" data-content="An error occurred while trying to register.Please recheck all the entries and try again."> Registration </legend>
        <div class="form-group">
          <label class="control-label" for="fullname">Full Name</label>
          <input id="fullname" name="fullname" placeholder="Your full name" class="form-control" autofocus required="" type="text">
        </div>
        <div class="form-group">
          <label class="control-label" for="email">E-Mail ID</label>
          <input id="email" name="email" data-toggle="popover" data-title="Email already in use" data-container="body" data-content="Another user is already registered with this email.<br><br>Please enter a unique email address." placeholder="Your E-Mail ID" class="form-control" required="" type="text">
        </div>
        <div class="form-group">
          <label class="control-label" for="username">Username</label>
          <div class="input-group">
            <span class="input-group-addon">@</span>
            <input id="username" name="username" data-toggle="popover" data-title="Username already in use" data-container="body" data-content="The username you entered is already registered.<br><br>Please choose a different one." placeholder="A sexy username" class="form-control" required="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="password">Password</label>
          <input id="password" name="password" placeholder="A password" class="form-control" required="" type="password">
        </div>
        <div class="form-group">
          <label class="control-label" for="cpass">Confirm Password</label>
          <input id="cpass" name="cpass" data-toggle="popover" data-title="Passwords don't match" data-container="body" data-content="The two passwords you entered don't match.<br><br>Please try again." placeholder="The password again" class="form-control" required="" type="password">
        </div>
        <hr>
        <div class="form-group" align="right">
          <button type="submit" class="col-md-5 btn btn-primary">Register</button>
          <button class="col-md-6 col-md-offset-1 btn btn-success">Signup with Facebook</button>
        </div>
      </form>
    </div>
</div>
<?php } ?>

<?php
  require "include/footer.php";
?>
