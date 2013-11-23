<?php

  if (!isset($_SESSION['loggedin']))die("Bitch Please.");

  $level = getField("gamedata", "level", $_SESSION['userid']);
  $qlevel = getField("gamedata", "qlevel", $_SESSION['userid']);

  // The ques has not yet been generated.
  if ($level != $qlevel)
  {
    $ques = getRandomFamily('Black');

    // Save question to db.
    // updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    // updateField("gamedata", "ans", $ques, $_SESSION['userid']);

    // Set Q/A Updated to this level
    // updateField("gamedata", "qlevel", '3', $_SESSION['userid']);
  }
  else
  {
    // Get Old question from database.
    $ques = getField("gamedata", "ques", $_SESSION['userid']);
  }

?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>

  <div class="row" style="margin-top: 120px;">
    <div class="span8 offset3">
      <h5><i class="icon icon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p id="quesData">
        Helluva Day.
      </p>
      <hr>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
            <input name="answer" type="text" class="span7" name="answer" placeholder="You can't see me...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
