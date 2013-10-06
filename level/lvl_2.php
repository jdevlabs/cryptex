<?php
require('../db/_dbFunctions.php');

// Fetch current_user_id
$current_user_id = 1;

// Hardcoded into every lvl php
$this_level = 2;

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
        "OK, tell me what  <?php echo '"' . ceaserCipher("Neville Likes Luna", 13) . '"' ?> means and I won't bug you for the day."
      </p>

      <?php
        // Get ques data from db.
        // $ques = getField("gamedata", "ques", $current_user_id);

        //The ques has not yet been generated.
        // if (is_null($ques) or empty($ques))
        // {
          // Generate question. The algorithm will change with levels.
          $ques = ceaserCipher("Neville Likes Luna", 13);

          // Save question to db. It'll be generated once per user per level.
          updateField("gamedata", "ques", $ques, $current_user_id);

          // The ques and ans are same. Won't happen in every level.
          updateField("gamedata", "ans", ceaserCipher($ques, 13), $current_user_id);
        // }
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