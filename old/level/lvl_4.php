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
    $ques = getRandomFamily('Black');

    // Save question to db. It'll be generated once per user per level.
    // updateField("gamedata", "ques", $ques, $current_user_id);

    // The ques and ans are same. Won't happen in every level.
    // updateField("gamedata", "ans", $ques, $current_user_id);

    // Set Q/A Updated to this level
    // updateField("gamedata", "qlevel", '3', $current_user_id);
  }
  else
  {
    // Get Old question from database.
    $ques = getField("gamedata", "ques", $current_user_id);
  }

?>

  <div class="row" style="margin-top: 120px;">
    <div class="span8 offset3">
      <h5><i class="icon icon-fire"></i> Level <?php echo $current_level; ?></h5>
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
</body>
