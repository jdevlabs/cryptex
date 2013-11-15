<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex | Login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link type = "text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
</head>

<body>
  <div class="navbar"><div class="navbar-inner"><div class="container-fluid">
  <a class="brand" href="/cryptex/" name="top">Cryptex 2</a>
  <div class="nav-collapse collapse">
    <ul class="nav">
      <li class="divider-vertical"></li><li><a href="/cryptex/"><i class="icon-home"></i> Home</a></li>
      <li class="divider-vertical"></li><li><a href="#"><i class="icon-list"></i> Leaderboard</a></li>
    </ul>
  </div></div></div></div>

  <!-- <div class="container" style="margin-top: 150px;"> -->
  <!-- <div class="row"> -->
  <!-- <img src="assets/img/Cryptex_logo.png" style="margin-left: 286px; margin-top: -20px;"> -->
  <div class="span4 offset4 well"  style="margin-top: 95px;">
    <form id="submitForm">
      <legend>Please Sign In</legend>
      <!-- <div class="alert alert-error">
      <a class="close" data-dismiss="alert" href="#">X</a>Incorrect Username or Password!
      </div> -->
      <div class="control-group">
        <label class="control-label" for="uname">Username</label>
        <div class="controls">
          <input class="span4" type="text" id="uname" name="username" placeholder="Your Username" required autofocus>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="uname">Password</label>
        <div class="controls">
          <input class="span4" type="text" id="uname" name="username" placeholder="Your Password" required autofocus>
        </div>
      </div>

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
