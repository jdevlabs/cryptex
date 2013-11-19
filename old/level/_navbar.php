<!--
  Navbar Begins
-->
<div class="navbar"><div class="navbar-inner"><div class="container-fluid">
  <a class="brand" href="/cryptex/" name="top">Cryptex 2</a>
  <div class="nav-collapse collapse">
    <ul class="nav">
      <li class="divider-vertical"></li><li><a href="/cryptex/"><i class="icon-home"></i> Home</a></li>
      <li class="divider-vertical"></li><li><a href="#"><i class="icon-list"></i> Leaderboard</a></li>
      <li class="divider-vertical"></li><li><a id="navHint" href="#"><i class="icon-gift"></i> Hints</a></li>
    </ul>
    <ul class="nav pull-right">
      <?php //Can be hidden/shown as and when requiresd ?>
      <li class="divider-vertical"></li>
      <li><a id="navContact" href="#"><i class="icon-envelope"></i> Contact</a></li>
      <li id="navSignUp" style="display:none;" ><a href="#">Sign Up</a></li>
      <li id="navSeparator1" style="display:none;" class="divider-vertical"></li>
      <li id="navSignInPopup" style="display:none;" class="dropdown">
        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
        <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
          <form method="post" action="login" accept-charset="UTF-8">
            <input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username"name="username">
            <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
            <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
            <label class="string optional" for="user_remember_me"> Remember me</label>
            <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
            <label style="text-align:center;margin-top:5px">or</label>
            <input class="btn btn-primary btn-block" type="button" id="sign-in-Facebook" value="Sign In with Facebook">
          </form>
        </div>
      </li>
      <?php //Visible only on Main Game Window ?>
      <li id="navSeparator2" class="divider-vertical"></li>
      <li id="navUserPopup" class="dropdown">
        <a class="dropdown-toggle" href="#"  data-toggle="dropdown"><i class="icon-user"></i><strong class="caret"></strong></a>
        <div class="dropdown-menu span3 " style="padding: 15px; padding-bottom: 0px;">
          <form method="post" action="login" accept-charset="UTF-8">
            <div class="row pull-right">
              <div class="span1"><img src="/cryptex/assets/img/avatar.svg" alt="avatar"></div>
            </div>
            <!-- <label><span class=" badge badge-info">Level : 1000</span></label> -->
            <h4 style="margin-bottom: 15px;">theShivamRana</h4>
            <i class="icon-bookmark"></i> Level : 13<br>
            <i class="icon-star"></i> Score : 11000<br>
            <i class="icon-gift"></i> Hints Taken : 3
            <li class="divider"></li>
            <li>
              <a href="/auth/logout"><i class="icon-list"></i> Leaderboard</a>
              <a href="/auth/logout" class="pull-right"><i class="icon-off"></i> Logout</a>
            </li>
          </form>
        </div>
      </li>
    </ul>
  </div></div></div></div>
<!--
  Navbar Ends
-->

<!--
  Navbar Modals Begin
-->
<?php require('_modals.php'); ?>
