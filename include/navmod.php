
<!-- Modal Dialogs Begin -->
<?php  if($_SESSION['user'] != "Anon") { ?>
  <div id="hintsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="hintsModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a href="#" class="close" data-dismiss="modal">x</a>
          <h4>Hints on Sale!</h4>
        </div>
        <div class="modal-body">
          <?php
            $uid = $_SESSION['userid'];
            $level = $_SESSION['level'];
            $hlevel = getField("gamedata", "hlevel", $uid);

            if ($level != $hlevel)
            { ?>
            <p>
              Stuck on the level? You can use your hack points to buy hints that might help you with the level. <br><br>
              You are currently on <strong>Level <?php echo $_SESSION['level'] ?></strong>. Buying a hint will cost you <strong><?php echo $hintCost[$_SESSION['level']] ?> HP</strong>.<br><br>
              The points will be deducted from your score and the page will be refreshed. You can then view the hint here.
            </p>
          <?php } else { ?>
            <p>
              Congratulations, you bought a hint.<br><br> <strong><?php echo $hintCost[$_SESSION['level']] ?> HP</strong> were deducted from your score. You currently have <strong><?php echo $_SESSION['score'] ?> HP</strong> with you.
            </p>
          <?php } ?>
          <p id="hintText">
          <?php
            if ($level == $hlevel)
            {
              echo "<hr>";
              echo $hint[$level];
            }
          ?>
          </p>
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <div class="controls">
            <?php if ($level != $hlevel) { ?>
              <button id="buyHint" class="btn btn-default btn-success">Buy Hint</button>
              <button id="cancHint" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <?php } else { ?>
              <button data-dismiss="modal" class="btn btn-default">Okay</button>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>
  <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a href="#" class="close" data-dismiss="modal">x</a>
            <h4>Contact the administrators</h4>
            <p>Experiencing a problem? We're here to help, just let us know.</p>
            <!-- <p>Don't have a problem but still want to talk to us? We'll love to hear from you.</p> -->
          </div>
          <div class="modal-body">
            <p>You can email us at: <a href="mailto:jdevlabs.cryptex@gmail.com">jdevlabs.cryptex@gmail.com</a></p>
            <p>In case you need instant solution to your problems, join the <a href="">#cryptex</a> channel at freenode.</p>
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <div class="controls">
                <button data-dismiss="modal" class="btn btn-default">Okay</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
<?php if($_SESSION['level'] == 1) { ?>

<div id="rulesModal" class="modal fade in bs-modal-lg" role="dialog" aria-labelledby="rulesModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Welcome to Cryptex</h3>
      </div>
      <div class="modal-body">
        <p>
          Throughout the game you will find references - some direct, others cryptic - to the wondrous world of Harry Potter.
          Though it has nothing to do with hacking or anything even remotely related to computers. The authors are just
          nostalgic about it. So in case you are having a hard time to understand things, blame J.K.Rowling <3.
        </p>
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-success">Let's get started!</button>
      </div>
    </div>
  </div>
</div>

<?php } ?>
<!-- Modal Dialogs End -->
