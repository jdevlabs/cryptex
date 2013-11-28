<?php include "_register.php"; ?>

<?php if ($_SESSION['loggedin'] != 1 ) { ?>

<div class="container">
    <div class="well col-sm-7 col-sm-offset-3" style="margin-top: 75px;">
      <form name="input" action="#" method="POST">
        <legend>Register</legend>
        <div class="row form-group">
          <div class="col-xs-6">
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required="">
          </div>
          <div class="col-xs-6">
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-12">
          <input type="email" class="form-control" name="email" placeholder="Email" required="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-6">
          <input type="homepage" class="form-control" placeholder="Username" required="">
          </div>
          <div class="col-xs-6">
          <input type="homepage" class="form-control" placeholder="Password" required="">
          </div>
        </div>
        <hr>
        <div class="row form-group">
          <div class="col-xs-6">
            <button class="btn btn-primary">Contact Us</button>
          </div>
          <div class="col-xs-6">
            <button class="btn btn-success pull-right">Signup with Facebook</button>
          </div>
        </div>
      </form>
    </div>
</div>

<?php } ?>
