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

  }
?>

  <div class="row" style="margin-top: 120px;">
    <div class="span8 offset3">
      <h5><i class="icon icon-fire"></i> Level <?php echo $current_level; ?></h5>
      <hr>
      <p id="quesData">
        You are the all-singing all-dancing crap of the world.
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
