 <div class="container">
  <div class="row">
    <div class="span8 offset2">
      <img  style="margin-top: 50px;" src="assets/img/Cryptex_logo.png">
    </div>
  </div>
  <?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="row">
    <div class="span11 offset1" style="margin-top: 125px;">
      <form name="input" action="#" method="POST">
      Username: <input type="text" name="user"><br/>
      Password: <input type="text" name="pass"><br/>
      <input type="submit" value="Submit">
      </form>
    </div> </div>
  <?php } ?>
  </div>