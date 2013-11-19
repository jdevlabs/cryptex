  <div class="navbar"><div class="navbar-inner"><div class="container-fluid">
  <a class="brand" href="index.php" name="top">Cryptex 2</a>
  <div class="nav-collapse collapse">
    <ul class="nav">
      <li class="divider-vertical"></li><li><a href="index.php"><i class="icon-home"></i> Home</a></li>
      <li class="divider-vertical"></li><li><a href="#"><i class="icon-list"></i> Leaderboard</a></li>
  <?php
      if($_SESSION['user'] != "Anon")
      echo '<li class="divider-vertical"></li><li><a id="navHint" href="#"><i class="icon-gift"></i> Hints</a></li>';
  ?>
    </ul>
    <ul class="nav pull-right">
  <?php
      if($_SESSION['user'] == "Anon") {?>
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
  <?php  } else {//Visible only on Main Game Window ?>
      <li id="navSeparator2" class="divider-vertical"></li>
      <li id="navUserPopup" class="dropdown">
        <a class="dropdown-toggle" href="#"  data-toggle="dropdown"><i class="icon-user"></i><?php echo $_SESSION['user']; ?><strong class="caret"></strong></a>
        <div class="dropdown-menu span3 " style="padding: 15px; padding-bottom: 0px;">
          <form method="post" action="login" accept-charset="UTF-8">
            <div class="row pull-right">
              <div class="span1"><img src="/cryptex/assets/img/avatar.svg" alt="avatar"></div>
            </div>
            <!-- <label><span class=" badge badge-info">Level : 1000</span></label> -->
            <h4 style="margin-bottom: 15px;"><?php echo $_SESSION['user'];?></h4>
            <i class="icon-bookmark"></i> Level :<?php echo $_SESSION['level'];?><br>
            <i class="icon-star"></i> Score : <?php echo $_SESSION['score'];?><br>
            <i class="icon-gift"></i> Hints Taken : <?php echo $_SESSION['hints'];?>
            <li class="divider"></li>
            <li>
              <a href="##"><i class="icon-list"></i> Leaderboard</a>
              <a href="logout.php" class="pull-right"><i class="icon-off"></i> Logout</a>
            </li>
          </form>
        </div></li>
  <?php } ?>
    </ul>
  </div></div></div></div>
