<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require_once "fn/db.php";

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";
?>

<script> document.title = "Cryptex | FAQ" </script>
<style>
  a:hover {
    text-decoration: none;
  }
</style>

<div class="container">

  <div class="row">
    <h3>Some frequently asked questions.</h3>
    <ul>
      <li><h4><a href="#what">What is this?</a></h4></li>
      <li><h4><a href="#hard">Is it hard?</a></h4></li>
      <li><h4><a href=""></a></h4></li>
      <li><h4><a href=""></a></h4></li>
      <li><h4><a href=""></a></h4></li>
      <li><h4><a href=""></a></h4></li>
      <li><h4><a href=""></a></h4></li>
      <li><h4><a href=""></a></h4></li>
    </ul>
    <br><br><br><br><br>
  </div>

  <div class="row">
    <h3><a name="what"></a>What is this?</h3>
    <p>We are some students who created this cool game.</p>
    <h3><a name="hard"></a>Is it hard?</h3>
    <p>We are some students who created this cool game.</p>
  </div>

</div>

<?php
  require "include/footer.php";
?>
