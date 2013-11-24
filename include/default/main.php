 <div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <img class="img-responsive" style="margin-top: 40px;" src="assets/img/Cryptex_logo.png">
    </div>
  </div>
<?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4" style="margin-top: 75px;">
      <center>
        <form class="form-inline" id="submitForm" method="POST">
        <div class="form-group">
          <label>Let's Login Hackerboy!</label>
          <input style="margin-top:15px;"class="form-control" type="text" name="user" placeholder="Your Username" required autofocus>
          <input style="margin-top:15px;"class="form-control" type="text" name="pass" placeholder="Your Password" required>
          <button style="margin-top:15px;" class="col-md-12 btn btn-primary" type="submit">Sign in</button>
        </div>
        </form>
      </center>
    </div>
  </div>
<?php } ?>
  </div>
