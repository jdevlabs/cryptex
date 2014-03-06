<?php if (!isset($_SESSION['loggedin'])) die("Bitch Please."); ?>

  <script> document.title = "Cryptex | Level " <?php echo '+ "' . $_SESSION['level'] . '"' ?> </script>
  <div class="container">
    <div class="row col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
      <h5><i class="icon glyphicon glyphicon-fire"></i> Level <?php echo $_SESSION['level']; ?></h5>
      <hr>
      <p>
        Oliver Wood had arrived. He was <i>c</i>arrying a large wooden crate under <i>h</i>is arm. Harry landed n<i>e</i>xt to him.
      </p>
      <p>
        "Very nice," said Wood, his eyes glinting. "I see what M<i>c</i>Gonagall meant … you really are a natural. I'm just going to teach you the rules this evening, then you'll be joining team practice three times a wee<i>k</i>."</p>
      <p>
        <i>He</i> opened the cr<i>a</i>te. Insi<i>de</i> were fou<i>r</i> different sized ball<i>s</i>.
      </p>
      <hr>
    </div>
    <div class="row col-sm-offset-2">
      <form method="POST">
        <div class="form-group">
          <div class="control-group">
          <?php if ($wrongAns == 1) { ?>
            <div class="controls has-error">
              <div class="col-sm-7">
                  <input name="answer" type="text" class="form-control" placeholder="Wrong answer. Please try again!">
          <?php } else { ?>
            <div class="controls">
              <div class="col-sm-7">
                  <input name="answer" type="text" class="form-control" placeholder="Umm... It means...">
          <?php } ?>
              </div>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

