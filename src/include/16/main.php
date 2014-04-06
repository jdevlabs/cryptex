<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");

  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    updateField("gamedata", "ans", "I have cracked the code.", $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
?>

  <script> document.title = "Cryptex | Completed" </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Merlin's Beard!</h5>
      <hr>
      <p>
        Congratulations! You have cracked the code. <br><br>
        Check out the leaderboard... <br><br>
        If you are on top, you will be contacted for the prize money. <br><br>
        Also, the entire code of cryptex will be open-sourced shortly, <br><br>
        <a href="">https://github.com/orgs/jdevlabs/cryptex</a>
      </p>
      <hr>
    </div>
  </div>
