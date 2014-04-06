<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    updateField("gamedata", "ans", "Congratulations", $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p>
<?php if (strtolower($_SERVER['HTTP_USER_AGENT']) == "kreacher") { ?>
        Kudos! You finally have the right browser. <br><br>
        The answer is: 2e781e46cd473612f108b29a62e711ab
<?php } else { ?>
        I hate the browser you are using. <br><br>
        You won't see the real question till you use the correct one. <br><br>
        How about the first word of chapter twenty four of OOTP?
<?php } ?>
      </p>
      <hr>
    </div>
    <div class="row col-sm-offset-2">
      <form method="POST">
        <div class="form-group">
          <div class="control-group">
          <?php if ($wrongAns == 1) { ?>
            <div class="controls has-error">
              <div class="col-sm-7">
                  <input name="answer" type="text" class="form-control" placeholder="Wrong answer. Please try again!">
          <?php } else { ?>
            <div class="controls">
              <div class="col-sm-7">
                  <input name="answer" type="text" class="form-control" placeholder="Umm... It means...">
          <?php } ?>
              </div>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
