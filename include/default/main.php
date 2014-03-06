<script> document.title = "Cryptex | Login" </script>
 <div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <img class="img-responsive" style="margin-top: 40px;" src="assets/img/Cryptex_logo.png">
    </div>
  </div>
<?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="row col-sm-offset-1" style="margin-top: 100px;" >
    <form id="submitForm" method="POST">
      <div align="center" class="col-sm-3">
        <label style="margin-top: 21px; margin-right: -30px;">Let's Login Hackerboy!</label>
      </div>
      <div class="col-sm-3">
        <input style="margin-top: 15px;" name="user" type="text" placeholder="Your Username" class="form-control"  required autofocus>
      </div>
      <div class="col-sm-3">
      <!-- Todo: type="password" -->
        <input style="margin-top: 15px;" name="pass" type="password" placeholder="Your Password" class="form-control" required>
      </div>
      <div class="col-sm-1">
        <button id="signinBtn"type="submit" style="margin-top: 15px;" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </div>
<?php } ?>
  </div>
