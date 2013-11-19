
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

  <div class="container">
  <div class="row">
    <div class="span8 offset2">
      <img  style="margin-top: 50px;" src="assets/img/Cryptex_logo.png">
    </div>
  </div>
  <div class="row">
    <div class="span11 offset1" style="margin-top: 125px;">
      <form class="form-inline" id="submitForm">
        <label>Let's Login Hackerboy! </label>
        <input style="margin-left: 15px;" class="span4" type="text" id="uname" name="username" placeholder="Your Username" required autofocus>
        <input style="margin-left: 15px;"class="span4" type="text" id="upass" name="password" placeholder="Your Password" required>
        <button style="margin-left: 15px;"type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </div>
  </div>

  <!-- // <script src="http://code.jquery.com/jquery-latest.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- Ajax Handlers -->
  <script type="text/javascript" src="ajax/_login.js"></script>
</body>
</html>
