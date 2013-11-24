 <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <img  style=" margin-left: 25px; margin-top: 50px;" src="assets/img/Cryptex_logo.png">
    </div>
  </div>
<?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="row">
    <div class="col-md-11 col-md-offset-1" style=" margin-left: 100px; margin-top: 125px;">
      <form class="form-inline" name="input" id="submitForm" method="POST">
      <label>Let's Login Hackerboy!</label>
      <input style="margin-left: 15px;" class="col-md-4" type="text" id="uname" name="user" placeholder="Your Username" required autofocus>
      <input style="margin-left: 15px;" class="col-md-4" type="text" id="upass" name="pass" placeholder="Your Password" required>
      <button style="margin-left: 15px;"class="btn btn-primary" type="submit">Sign in</button>
      </form>
    </div>
  </div>
<?php } ?>
  </div>
