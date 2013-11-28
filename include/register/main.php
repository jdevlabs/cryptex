<?php if ($_SESSION['loggedin'] != 1 ) { ?>

<div class="container">
    <div class="col-md-6 col-md-offset-3 well" style="margin-top: 50px;">
      <form id="regForm" name="input" method="POST">
        <legend> Registration </legend>
        <div class="form-group">
          <label for="full">Full Name</label>
          <input id="full" name="full" class="form-control" placeholder="Enter your full name" autofocus requi type="text">
        </div>
        <div class="form-group">
          <label for="email">E-Mail ID</label>
          <input id="email" name="email" class="form-control" placeholder="Enter your E-Mail ID" requi type="text">
        </div>
        <div class="form-group">
          <label for="uname">Username</label>
          <input id="uname" name="uname" class="form-control" placeholder="Enter a username" requi type="text">
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input id="pass" name="pass" class="form-control" placeholder="Enter a password" requi type="text">
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input id="cpass" name="cpass" class="form-control" placeholder="Re-enter password" requi type="text">
        </div>
        <hr>
        <div class="form-group" align="right">
          <button type="submit" class="col-md-5 btn btn-primary">Register</button>
          <button type="submit" class="col-md-6 col-md-offset-1 btn btn-success">Signup with Facebook</button>
        </div>
      </form>
    </div>
</div>

<?php } ?>
