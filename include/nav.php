<div id="wrap">
<!-- The main container-->
<div class="container">
<!-- Navbar Begins -->
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php" name="top">Cryptex 2</a>
  </div>
  <div class="collapse navbar-collapse" id="mainNavBar">
    <ul class="nav navbar-nav">
      <li class="divider"></li>
      <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
      <li class="divider"></li>
      <li><a href="news.php"><i class="glyphicon glyphicon-bullhorn"></i> News</a></li>
      <li><a href="faq.php"><i class="glyphicon glyphicon-question-sign"></i> FAQ</a></li>
      <li><a href="rules.php"><i class="glyphicon glyphicon-ok"></i> Rules</a></li>
      <li><a href="leaderboard.php"><i class="glyphicon glyphicon-list"></i> Leaderboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="divider"></li>
<?php if($_SESSION['loggedin'] == 1) { ?>
      <li class="divider"></li>
      <li><a id="navHint" href="#"><i class="glyphicon glyphicon-gift"></i> Hints</a></li>
<?php } ?>
      <li><a id="navContact" href="#"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
<?php  if($_SESSION['loggedin'] == 1) {?>
      <li class="divider"></li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="#"  data-toggle="dropdown">
          <i class="glyphicon glyphicon-user"></i><?php echo '  ' . $_SESSION['user'] . '  '; ?>
          <strong class="caret"></strong>
        </a>
        <ul class="dropdown-menu col-lg-7" style="padding: 15px; padding-bottom: 15px;">
          <div class="row col-md-12 col-md-pull-right"><img src="assets/img/avatar.svg" alt="avatar"></div>
          <h4 style="margin-bottom: 15px;"><?php echo $_SESSION['user'];?></h4>
          <p id="avLevel"><i class="glyphicon glyphicon-bookmark"></i><strong> Level :</strong><?php echo '  ' . $_SESSION['level'];?></p>
          <p id="avScore"><i class="glyphicon glyphicon-star"></i><strong> Score :</strong><?php echo '  ' . $_SESSION['score'];?></p>
          <p id="avHints"><i class="glyphicon glyphicon-gift"></i><strong> Hints Used :</strong><?php echo '  ' . $_SESSION['hints'];?></p>
          <li class="divider"></li>
          <a href="" id="resetProgress"><i class="glyphicon glyphicon-list"></i> Reset Progress</a>
          <a href="" id="logout" style="margin-top: 15px;"><i class="glyphicon glyphicon-off"></i> Logout</a>
        </ul>
      </li>
<?php } ?>
    </ul>
  </div>
</nav>
<!-- Navbar Ends -->
