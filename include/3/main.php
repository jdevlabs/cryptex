<?php

  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  $level = getField("gamedata", "level", $_SESSION['userid']);
  $qlevel = getField("gamedata", "qlevel", $_SESSION['userid']);

  // The ques has not yet been generated.
  if ($level != $qlevel)
  {
    $ques = getRandomFamily('Black');

    // Save question to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", $ques, $_SESSION['userid']);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", '3', $_SESSION['userid']);
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
      <p id="quesData">
        The Invisibility Cloak is a magical artefact used to render the wearer invisible.
        It ended up in the hands of James Potter, the father of Harry Potter...
        After James was killed, the Cloak was left in Dumbledore's possession. <br><br>
        Ten years later, Dumbledore gave it to Harry Potter as a Christmas present anonymously and told him to "use it well." <br><br>
        It's your turn now, there is something hidden on this webpage, let's see if you can uncover it.
      </p>
      <p style="color:white"> <?php echo $ques ?> </p>
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
