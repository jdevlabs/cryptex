<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex | Login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link type = "text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
</head>

<body>
  <?php	require '_navbar.php'; ?>
  <!-- <div class="container" style="margin-top: 150px;"> -->
  <!-- <div class="row"> -->
  <!-- <img src="assets/img/Cryptex_logo.png" style="margin-left: 286px; margin-top: -20px;"> -->
  <div class="span4 offset4 well"  style="margin-top: 95px;">
    <form id="submitForm">
      <legend>Please Sign In</legend>
      <!-- <div class="alert alert-error">
      <a class="close" data-dismiss="alert" href="#">X</a>Incorrect Username or Password!
      </div> -->
      <label>Username</label>
      <input type="text" id="uname" class="span4" name="username" placeholder="Your Username" required autofocus>
      <label>Password</label>
      <input type="password" id="pass" class="span4" name="password" placeholder="Your Password" required>
      <!-- <label class="checkbox inline">
      <input type="checkbox" name="remember" value="1"> Remember Me
      </label> -->
      <button style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">Sign in</button>
      <hr>
      <button style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">Login with Facebook</button>
  </form>
  </div>

  <!-- // <script src="http://code.jquery.com/jquery-latest.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- Ajax Handlers -->
  <script type="text/javascript" src="ajax/_login.js"></script>
</body>
</html>
