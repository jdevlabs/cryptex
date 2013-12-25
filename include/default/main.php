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
        <label style="margin-top: 5px;">Let's Login Hackerboy!</label>
      </div>
      <div class="col-sm-3">
        <input name="user"type="text" placeholder="Your Username" class="form-control"  required autofocus>
      </div>
      <div class="col-sm-3">
      <!-- Todo: type="password" -->
        <input name="pass" type="text" placeholder="Your Password" class="form-control" required>
      </div>
      <div class="col-sm-1">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </div>
<?php } ?>
  </div>
