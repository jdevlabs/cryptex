<?php if (!defined('Grindelwald')) die("Bitch Please."); ?>
<body>

<script> document.title = "Cryptex | Level " <?php echo '+ "' . $current_level . '"' ?> </script>

<?php require('_navbar.php'); ?>

  <div class="row" style="margin-top: 120px;">
    <div class="span8 offset3">
      <h5><i class="icon icon-fire"></i> Level <?php echo $current_level; ?></h5>
      <hr>
      <p id="quesData">
        You are the all-singing all-dancing crap of the world.
      </p>

      <?php
        // Get ques data from db.
        $ques = getField("gamedata", "ques", $current_user_id);

        //The ques has not yet been generated.
        //Todo: What if the values are not empty?
        if (is_null($ques) or empty($ques))
        {
          // Generate question. The algorithm will change with levels.
          $ques = generateRandomString(25);

          // Save question to db. It'll be generated once per user per level.
          updateField("gamedata", "ques", $ques, $current_user_id);

          // The ques and ans are same. Won't happen in every level.
          updateField("gamedata", "ans", $ques, $current_user_id);
        }

        // Show the question data to user.
        echo "<!-- The password as told by Hermione is " . $ques . " -->";
      ?>

      <hr>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
            <input name="answer" type="text" class="span7" name="answer" placeholder="Umm... It means...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
</body>
