<?php include "_login.php"; ?>
   <div class="span4 offset4 well"  style="margin-top: 95px;">
    <form action="" method = "post" >
      <legend>Please Sign In</legend>
      <!-- <div class="alert alert-error">
      <a class="close" data-dismiss="alert" href="#">X</a>Incorrect Username or Password!
      </div> -->
      <div class="control-group">
        <label class="control-label" for="uname">Username</label>
        <div class="controls">
          <input class="span4" type="text" id="uname" name="username" placeholder="Your Username" required autofocus>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="uname">Password</label>
        <div class="controls">
          <input class="span4" type="text" id="uname" name="username" placeholder="Your Password" required autofocus>
        </div>
      </div>

      <input value="SignIn" style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">
      <hr>
      <button style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">Login with Facebook</button>
  </form>
  </div>
