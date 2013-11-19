<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex | Register</title>
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


  <!-- <img src="assets/img/Cryptex_logo.png" style="margin-left: 286px; margin-top: -5px; height=50%; widht=50%"> -->
  <div class="span4 offset4 well "  style="margin-top: 100px;">
    <form id="submitForm">
      <legend>Registration</legend>
      <div id="alertMsg" class="alert" style="display: none;"></div>
      <label>Username</label>
      <input type="text" id="uName" class="span4" name="username" placeholder="Name that'll be displayed" required autofocus>
      <label>Full Name</label>
      <input type="text" id="name" class="span4" name="name" placeholder="Your full name" required>
      <!-- <label>E-mail</label> -->
      <!-- <input type="email" id="email" class="span4" name="email" placeholder="A valid E-mail address"> -->
      <label>Password</label>
      <input type="password" id="pass" class="span4" name="password" placeholder="Password" required>
      <label>Re-enter Password</label>
      <input type="password" id="cPass" class="span4" name="cpassword" placeholder="Confirm password" required>

      <button style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">Register me</button>
      <button style="margin-top: 20px;" name="Register" class="btn btn-info btn-block">Login with Facebook</button>
    </form>
  </div>

  <!-- // <script src="http://code.jquery.com/jquery-latest.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- Ajax Handlers -->
  <script type="text/javascript" src="ajax/_register.js"></script>
</body>
</html>
