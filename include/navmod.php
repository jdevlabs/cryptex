
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
          Stuck on the level? <br><br>
          You can use your hack points to buy hints that might help you with the level. <br><br>
          This hint will cost you <strong>500 HP</strong>. So as soon as you press the button the points <br>
          will be deducted from your score and a hint will be shown here.
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <div class="controls">
              <?php
                //Todo: Contact Us CodeBehind *Low*
              ?>
              <button id="SOS" class="btn btn-default btn-success">Buy Hint</button>
              <button data-dismiss="modal" class="btn btn-default">Nevermind</button>
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
            <form class="col-sm-12">
              <textarea class="form-control" id="prob" name="prob" rows="8" style="width: 515px;">
Enter a brief description of the problem you are experiencing.

If you can keep it under 140 words, we'll gift you a firebolt.</textarea>
            </form>
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <div class="controls">
                <?php
                  //Todo: Contact Us CodeBehind *Low*
                ?>
                <button id="SOS" class="btn btn-default btn-success">Help Me Out!</button>
                <button data-dismiss="modal" class="btn btn-danger">Nevermind</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
<!-- Modal Dialogs End -->

