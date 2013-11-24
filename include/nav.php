<div class="container">
<!-- Navbar Begins -->
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php" name="top">Cryptex 2</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="mainNavBar">
    <ul class="nav navbar-nav">
      <li class="divider"></li>
      <li><a href="/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
      <li class="divider"></li>
      <li><a href="?pid=leaderboard"><i class="glyphicon glyphicon-list"></i> Leaderboard</a></li>
<?php if($_SESSION['loggedin'] == 1) { ?>
      <li class="divider"></li>
      <li><a id="navHint" href="#"><i class="glyphicon glyphicon-gift"></i> Hints</a></li>
<?php } ?>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="divider"></li>
      <li><a id="navContact" href="#"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
<?php  if($_SESSION['loggedin'] != 1) {?>
      <li class="divider"></li>
      <li><a href="?pid=facebook"><i class="glyphicon glyphicon-thumbs-up"></i> Login With Facebook</a></li>
      <li class="divider-vertical"></li>
      <li><a href="?pid=register"><i class="glyphicon glyphicon-user"></i> Register</a></li>
      <!-- <li><a href="/login"><i class="glyphicon glyphicon-user"></i> Login</a></li> -->
<?php  } else {?>
      <li id="navSeparator2" class="divider-vertical"></li>
      <li id="navUserPopup" class="dropdown">
        <a class="dropdown-toggle" href="#"  data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['user']; ?><strong class="caret"></strong></a>
        <div class="dropdown-menu col-md-3 " style="padding: 15px; padding-bottom: 0px;">
          <form method="post" action="login" accept-charset="UTF-8">
            <div class="row pull-right">
              <div class="col-md-1"><img src="/assets/img/avatar.svg" alt="avatar"></div>
            </div>
            <!-- <label><col-md- class=" badge badge-info">Level : 1000</col-md-></label> -->
            <h4 style="margin-bottom: 15px;"><?php echo $_SESSION['user'];?></h4>
            <i class="glyphicon glyphicon-bookmark"></i> Level :<?php echo $_SESSION['level'];?><br>
            <i class="glyphicon glyphicon-star"></i> Score : <?php echo $_SESSION['score'];?><br>
            <i class="glyphicon glyphicon-gift"></i> Hints Taken : <?php echo $_SESSION['hints'];?>
            <li class="divider"></li>
            <li>
              <a href="##"><i class="glyphicon glyphicon-list"></i> Leaderboard</a>
              <a href="logout.php" class="pull-right"><i class="glyphicon glyphicon-off"></i> Logout</a>
            </li>
          </form>
        </div></li>
<?php } ?>
    </ul>
  </div>
</div>
<!-- Navbar Ends
