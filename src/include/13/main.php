<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    updateField("gamedata", "ans", "Fleur Delacour", $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p>
        Hermione had warned Harry about the pixies near Hogsmeade. <br><br>
        But Harry didn't listen, he picked up the Marauder's Map and went off... <br><br>
        There were 177 rows containing 62 pixies each. That's a heck lot of pixies. <br><br>
        And don't forget the map - the Marauder's Map. <br><br>
      </p>
      <a href="wtf.map">Aaah! the pixies...</a>
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
                  <input name="answer" type="text" class="form-control" placeholder="The name is...">
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
