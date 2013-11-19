<div id="hintsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
  <div class="modal-header">
    <a href="#" class="close" data-dismiss="modal">x</a>
    <h4>Hints on Sale!</h4>
  </div>
  <div class="modal-body">
    <ul class="nav nav-tabs" id="hintsTab">
      <li><a href="#hint1" data-toggle="tab">Hint 1</a></li>
      <li><a href="#hint2" data-toggle="tab">Hint 2</a></li>
      <li><a href="#hint3" data-toggle="tab">Hint 3</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="hint1">
        Stuck on the level? <br><br>
        You can use your hack points to buy hints that might help you complete the level. <br><br>
        This hint will cost you <strong>500 HP</strong>. So as soon as you press this button... <br><br>
        <strong>500 HP</strong> will be deducted from your score and the hint will be visible. <br><br>
        <button type="button" class="btn btn-success btn-large">Buy Hint</button>
      </div>
      <div class="tab-pane hide" id="hint2">
        This is the second hint
      </div>
      <div class="tab-pane hide" id="hint3">
        This is the third hint
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

<script>
$('#navHint').click(function(event) {
  /* Act on the event */
  $('#hintsModal').modal('show');
  event.preventDefault();
});

$('#navContact').click(function(event) {
  /* Act on the event */
  $('#contactModal').modal('show');
  event.preventDefault();
});
</script>

<div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
  <div class="modal-header">
    <a href="#" class="close" data-dismiss="modal">x</a>
    <h4>Contact the administrators...</h4>
    <p>Experiencing a problem? We're here to help, just let us know.</p>
  </div>
  <div class="modal-body">
    <form >
      <textarea id="prob" name="prob" rows="8" style="width: 515px;">
        Enter a brief description of the problem you are experiencing.
      </textarea>
    </form>
  </div>
  <div class="modal-footer">
    <div class="control-group">
      <div class="controls">
        <?php //Todo: Contact Us CodeBehind ?>
        <button id="SOS" class="btn btn-default btn-success">Help Me Out!</button>
        <button data-dismiss="modal" class="btn btn-danger">Nevermind</button>
      </div>
    </div>
  </div>
</div>
