<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    // I'm so hungry I could eat a hippogriff!
    // SHA1: 15EF1A3EB86575FD7A390AAE55BB6909A8C0C8D8
    // MD5: 6A387977BAF290B1FD2ABF03DC14127C
    updateField("gamedata", "ans", "6A387977BAF290B1FD2ABF03DC14127C", $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
?>
  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
        <p>
          Here is a gift for you... <br><br>
        </p>
        <a href="voldemort.exec">Voila!</a>
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
                  <input name="answer" type="text" class="form-control" placeholder="The answer in upper-case is...">
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
