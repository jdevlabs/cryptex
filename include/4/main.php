<?php
  if (!isset($_SESSION['loggedin']))die("Bitch Please.");
?>

<!-- The main container -->
  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr><p>
        Please fill in a quick questionnaire:
      </p><hr>
    </div>
    <div class="row col-sm-9 col-sm-offset-2">
      <form class="form-horizontal" method="POST">
          <div class="control-group">
            <label class="col-sm-6 control-label">Last name of who prophesied voldemort's death?</label>
          <?php if ($wrongAns == 1) { ?>
            <div class="col-sm-4 controls has-error">
          <?php } else { ?>
            <div class="col-sm-4 controls">
          <?php } ?>
              <select name="prophecy" class="form-control">
                <option>Prof. Minerva Mc Gonagall</option>
                <option>Prof. Albus Dumbledore</option>
                <option>Rubeus Hagrid</option>
              </select>
            </div>
          </div>

          <div class="control-group">
            <label class="col-sm-6 control-label">The number of horcruxes is:</label>
          <?php if ($wrongAns == 1) { ?>
            <div class="col-sm-4 controls has-error">
          <?php } else { ?>
            <div class="col-sm-4 controls">
          <?php } ?>
              <select name="horcrux" class="form-control">
                <option>6</option>
                <option>0</option>
                <option>9</option>
              </select>
            </div>
          </div>

          <div class="control-group">
            <label class="col-sm-6 control-label">Draco Dormiens Nunquam ...?</label>
          <?php if ($wrongAns == 1) { ?>
            <div class="col-sm-4 controls has-error">
          <?php } else { ?>
            <div class="col-sm-4 controls">
          <?php } ?>
              <select name="moto" class="form-control">
                <option>Sinister</option>
                <option>Veritas</option>
                <option>Tilandi</option>
              </select>
            </div>
          </div>

          <div class="control-group">
            <button type="Submit" style="margin-top: 75px;" class="col-sm-4 col-sm-offset-3 btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
