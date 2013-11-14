<?php if (!defined('Grindelwald')) die("Bitch Please."); ?>
<body>

<script> document.title = "Cryptex | Level " <?php echo '+ "' . $current_level . '"' ?> </script>

<?php require('_navbar.php'); ?>
<?php
  $level = getField("gamedata", "level", $current_user_id);
  $qlevel = getField("gamedata", "qlevel", $current_user_id);

  // The ques has not yet been generated.
  if ($level != $qlevel)
  {
    // Generate question.
    $ques = ceaserCipher(getRandomFamily('Weasley'), 13);

    // Save question/answer pair to db.
    updateField("gamedata", "ques", $ques, $current_user_id);
    updateField("gamedata", "ans", ceaserCipher($ques, 13), $current_user_id);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", '2', $current_user_id);
  }
  else
    $ques = getField("gamedata", "ques", $current_user_id);

?>

  <div class="row span4 offset3" style="margin-top: 120px;">
    <div class="span8">
      <h5><i class="icon icon-fire"></i> Level <?php echo $current_level; ?></h5>
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
      <form class="form-horizontal" method="POST">
        <div class="form-group">
            <input name="answer" type="text" class="span7" name="answer" placeholder="Umm... It means...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
</body>
