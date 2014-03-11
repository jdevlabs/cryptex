<?php
  if (!isset($_SESSION['loggedin']))die("Bitch Please.");

  // The ques has not yet been generated.
  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    $ques = "Password is " . getRandomFamily('Black') . ".";

    // Save question to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", $ques, $_SESSION['userid']);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
  else
  {
    // Get Old question from database.
    $ques = getField("gamedata", "ques", $_SESSION['userid']);
  }
?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p id="quesData">
        Harry enters the room to find Seamus and Dean studying for the upcoming <a href="http://harrypotter.wikia.com/wiki/Nastily_Exhausting_Wizarding_Test">N.E.W.Ts</a> <br><br>
        There has been a new course added titled "Beginners' Javascript". <br><br>
        Now, pyrotechnics are an easy stuff for Seamus but JS? It's driving him nuts. <br><br>
        And Dean still thinks Javascript has something to do with Java. <br><br>
        They have been trying to find out the answer to this level for like 19 minutes.<br><br>
        I know you can do better than that!
      </p>
      <hr>
    </div>
    <div class="row col-sm-offset-2">
      <form method="POST">
        <div class="col-sm-7">
          <input id="theCoolInput" name="answer" type="text" class="form-control" placeholder="The answer is...">
        </div>
        <div class="col-sm-2">
          <button id="theCoolButton" type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
      </form>
    </div>
  </div>
<!--  -->

<script>
document
  .getElementById("theCoolButton")
  .addEventListener("click", theCoolFunction);

// This function gets executed when the Submit button is clicked.
function theCoolFunction (event)
{
  var inputText = document.getElementById("theCoolInput").value;

  var prepend = "Password is ";
  var append = ".";

  if (inputText == prepend + "<?php echo substr($ques, 12, -1)?>" + append)
  {
    alert("Level Cleared Baby!!");
  }
  else
  {
    alert("Wrong Answer! Please Try Again");
  }
}
</script>
