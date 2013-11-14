<?php
require('../db/_dbFunctions.php');

// Fetch current_user_id
$current_user_id = 1;

// Hardcoded into every lvl php
$this_level = 3;

// Get current user level
$current_level = intval(getField("gamedata", "level", $current_user_id));

/**
 * Form submitted. Check whether answer is correct.
 */
if (isset($_POST['answer']))
{
  $postAns = trim($_POST['answer']);

  $ans = getField("gamedata", "ans", $current_user_id);

  if ($postAns == $ans)
  {
    // die("Level Cleared");

    // Update the current level
    updateField("gamedata", "level", ($current_level + 1), $current_user_id);

    // Redirect to next level
    header("Location: lvl_" . ($current_level + 1) . ".php");
  }
}

/**
 * Check whether the user is permitted to access this level.
 */

// Is this the level user should be on?
if ($this_level != $current_level)
{
  // Redirect to the correct level
  header("Location: lvl_" . $current_level . ".php");
}
?>

<?php require('_header.php'); ?>
<?php require('_helpers.php'); ?>

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

<?php require('_footer.php') ?>
