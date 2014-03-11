<script> document.title = "Cryptex | Login" </script>
 <div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <img class="img-responsive" style="margin-top: 40px;" src="assets/img/Cryptex_logo.png">
    </div>
  </div>
<?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="row" style="margin-top: 100px;" >
      <div align="center">
        <a href="facebook.php"><button class="btn btn-success btn-lg btn-default">Login with Facebook</button></a>
      </div>
  </div>
<?php } ?>
  </div>
