<?php
require('../db/_dbFunctions.php');

// A sentinel value used to detect Level inclusion :)
define('Grindelwald', 'Dumbledore');

// Fetch current_user_id
$current_user_id = 1;

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

    // Reload From Database. Equal to $curent_level++ ?
    $current_level = intval(getField("gamedata", "level", $current_user_id));
  }
}
?>

<?php require('_header.php'); ?>
<?php require('_helpers.php'); ?>
<?php require('_hpWorld.php'); ?>

<?php require('lvl_' . $current_level . '.php'); ?>

<?php require('_footer.php') ?>
