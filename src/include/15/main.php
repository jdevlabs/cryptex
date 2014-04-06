<?php
  if (!isset($_SESSION['loggedin'])) die("Bitch Please.");
?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p>
        Welcome to the Hogwarts Students Database.<br><br>
        Your task is to find the wand of Hermione Granger.
      </p>
      <hr>
    </div>
    <div class="row col-sm-8 col-sm-offset-2">
    <form class="form-horizontal" method="POST">
      <div class="control-group">
        <label class="col-sm-1 control-label">Name:</label>
        <div class="col-sm-3 controls">
          <input name="sname" type="text" class="form-control" placeholder="Student's Name">
        </div>
      </div>

      <div class="control-group">
        <label class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-3 controls">
          <input name="spass" type="text" class="form-control" placeholder="Student's Password">
        </div>
      </div>

      <div class="control-group">
        <button type="Submit" class="col-sm-2 col-sm-offset-1 btn btn-primary">Lookup</button>
      </div>
    </form>
    </div>

    <?php
      if(isset($_POST['sname']) AND !(empty($_POST['sname'])))
      {
        $q = "SELECT * FROM injection WHERE `name` = '".stripcslashes($_POST['sname'])."' AND `pass` = '".stripcslashes($_POST['spass'])."'";
        $result = mysql_query($q);
      }
     ?>

    <div class="row col-sm-8 col-sm-offset-2">
    <hr>
    <?php if (mysql_num_rows($result) > 0) { ?>
    <h4>Record:</h4>
    <?php
        while ($row = mysql_fetch_row($result))
        {
          echo "Name: " . $row[1] . "<br>";
          echo "Year:"  . $row[3] . "<br>";
          echo "Pet:"   . $row[4] . "<br>";
          echo "Wand:"  . $row[5] . "<br>";
          echo "<br>";
        }
    ?>
    <?php } else { ?>
    <h4>You aren't trying harder, I guess.</h4>
    <?php } ?>
    <hr>
    </div>
  </div>
