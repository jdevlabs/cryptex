<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  // The ques has not yet been generated.
  if ($_SESSION['level'] == $_SESSION['qlevel'])
  {
    $name = strtolower(getRandomFamily('Black'));
    $ques = strMorse($name);

    strToPNG($ques, "./Image.png");

    // Save to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", $name, $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
  else
  {
    // Get Old question from database.
    $ques = getField("gamedata", "ques", $_SESSION['userid']);
  }
?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p>
        What the morse?
      </p>
      <img src="" alt="">
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
