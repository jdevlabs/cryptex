<?php include "_register.php"; ?>

 <div class="span4 offset4 well "  style="margin-top: 100px;">
    <form id="submitForm">
      <legend>Registration</legend>
      <div id="alertMsg" class="alert" style="display: none;"></div>
      <label>Username</label>
      <input type="text" id="uName" class="span4" name="username" placeholder="Name that'll be displayed" required autofocus>
      <label>Full Name</label>
      <input type="text" id="name" class="span4" name="name" placeholder="Your full name" required>
      <!-- <label>E-mail</label> -->
      <!-- <input type="email" id="email" class="span4" name="email" placeholder="A valid E-mail address"> -->
      <label>Password</label>
      <input type="password" id="pass" class="span4" name="password" placeholder="Password" required>
      <label>Re-enter Password</label>
      <input type="password" id="cPass" class="span4" name="cpassword" placeholder="Confirm password" required>

      <button style="margin-top: 10px;" type="submit" class="btn btn-info btn-block">Register me</button>
      <button style="margin-top: 20px;" name="Register" class="btn btn-info btn-block">Login with Facebook</button>
    </form>
  </div>
