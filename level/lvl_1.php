<?php require('_header.php') ?>

<?php

  /**
   *
   */

 ?>

<body>
<?php require('_navbar.php') ?>

  <div class="row span4 offset3" style="margin-top: 120px;">
    <div class="span8">
      <h5><i class="icon icon-fire"></i> LEVEL 1</h5>
      <hr>
      <p id="quesData">
        The big fat lady asks Harry for the password to the gryffindor's common room but harry has yet again forgotten it. <br><br>
        Luckily, Harry knew that this could happen, so he wrote down the password in this file somewhere. <br><br>
        Can you please fecth it for him?
      </p>
      <hr>
      <form class="form-horizontal">
        <div class="form-group">
            <input id="quesInput" type="text" class="span7" name="answer" placeholder="Tha Big Fat Lady is waiting...">
            <button id="quesBtn" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
</body>

<?php require('_footer.php') ?>