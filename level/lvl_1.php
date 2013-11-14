<?php if (!defined('Grindelwald')) die("Bitch Please."); ?>
<body>

<script> document.title = "Cryptex | Level " <?php echo '+ "' . $current_level . '"' ?> </script>

<?php require('_navbar.php'); ?>
<?php
  // A check is performed: whether a ques has been generated for this level.
  $level = getField("gamedata", "level", $current_user_id);
  $qlevel = getField("gamedata", "qlevel", $current_user_id);

  // The ques has not yet been generated.
  // if ((is_null($ques) or empty($ques)))
  if ($level != $qlevel)
  {
    // Generate question. The algorithm will change with levels.
    $ques = getRandomFamily('Black');

    // Save question to db. It'll be generated once per user per level.
    updateField("gamedata", "ques", $ques, $current_user_id);

    // The ques and ans are same. Won't happen in every level.
    updateField("gamedata", "ans", $ques, $current_user_id);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", '1', $current_user_id);
  }
  else
  {
    // Get Old question from database.
    $ques = getField("gamedata", "ques", $current_user_id);
  }

  // Show the question data to user.
  echo "<!-- The password as told by Hermione is " . $ques . " -->";
?>

  <div class="row span4 offset3" style="margin-top: 120px;">
    <div class="span8">
      <h5><i class="icon icon-fire"></i> Level <?php echo $current_level; ?></h5>
      <hr>
      <p id="quesData">
        The big fat lady asks Harry for the password to the gryffindor's common room but harry has yet again forgotten it. <br><br>
        Luckily, Harry knew that this could happen, so he wrote down the password in this file somewhere. <br><br>
        Can you please fecth it for him?
      </p>

      <hr>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
            <input name="answer" type="text" class="span7" name="answer" placeholder="Tha Big Fat Lady is waiting...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
</body>
