<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  $level = getField("gamedata", "level", $_SESSION['userid']);
  $qlevel = getField("gamedata", "qlevel", $_SESSION['userid']);

  // The ques has not yet been generated.
  // if ((is_null($ques) or empty($ques)))
  if ($level != $qlevel)
  {
    // Generate question.
    $ques = getRandomFamily('Black');

    // Save to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", $ques, $_SESSION['userid']);

    updateField("gamedata", "qlevel", '1', $_SESSION['userid']);
  }
  else
  {
    // Get Old question from database.
    $ques = getField("gamedata", "ques", $_SESSION['userid']);
  }

  echo "<!-- The password as told by Hermione is " . $ques . " -->";
?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="row col-md-4 col-md-offset-3" style="margin-top: 120px;">
    <div class="col-md-8">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p id="quesData">
        The big fat lady asks Harry for the password to the gryffindor's common room but harry has yet again forgotten it. <br><br>
        Luckily, Harry knew that this could happen, so he wrote down the password in this file somewhere. <br><br>
        Can you please fecth it for him?
      </p>

      <hr>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
            <input name="answer" type="text" class="col-md-7" name="answer" placeholder="Tha Big Fat Lady is waiting...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
