<?php if (!isset($_SESSION['loggedin'])) die("Bitch Please."); ?>

<?php

  $level = getField("gamedata", "level", $_SESSION['userid']);
  $qlevel = getField("gamedata", "qlevel", $_SESSION['userid']);

  // The ques has not yet been generated.
  if ($level != $qlevel)
  {
    // Generate question.
    $ques = ceaserCipher(getRandomFamily('Weasley'), 13);

    // Save question/answer pair to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", ceaserCipher($ques, 13), $_SESSION['userid']);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", '2', $_SESSION['userid']);
  }
  else
    $ques = getField("gamedata", "ques", $_SESSION['userid']);

?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p id="quesData">
        Harry enters the room to find Seamus sitting ready with another absurd riddle of his. <br><br>
        "I bet you can't solve this one" yells Seamus. <br><br>
        "You said this last time too and the time before that and before that" said an exasperated Harry <br><br>
        "Yeah, but this one is real..." <br><br>
        "Let's just cut to the chase please Seamus, I'm really tired." <br><br>
        "OK, tell me what  <?php echo '"' . $ques . '"' ?> means and I won't bug you for the day."
      </p>
      <hr>
    </div>
    <div class="row col-sm-offset-2">
      <form method="POST">
        <div class="col-sm-7">
          <input name="answer" type="text" class="form-control" placeholder="Umm... It means...">
        </div>
        <div class="col-sm-2">
          <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
      </form>
    </div>
  </div>

