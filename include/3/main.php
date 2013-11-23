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

  <div class="row" style="margin-top: 120px;">
    <div class="span8 offset3">
      <h5><i class="icon icon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p id="quesData">
        The Cloak of Invisibility is a magical artefact used to render the wearer invisible.
        It ended up in the hands of James Potter, the father of Harry Potter.
        After James was killed, the Cloak was left in Dumbledore's possession. <br><br>
        Ten years later, Dumbledore gave Harry Potter the Cloak of Invisibility as a Christmas present anonymously and told him to "use it well." <br><br>
        It's your turn now, there is something hidden on this webpage, let's see if you can uncover it.
      </p>
      <p style="color:white"> <?php echo $ques ?> </p>
      <hr>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
            <input name="answer" type="text" class="span7" name="answer" placeholder="You can't see me...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
