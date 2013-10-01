<?php require('_header.php') ?>

<?php

  /**
   * Check whether the user is permitted to access this level.
   *
   */

  // $current_level = getCurrentLevel();
  // if ($current_level != 1)
  //   redirectTo("lvl_" . $current_level . ".php");

  /**
   * Generates Random Strings
   * @param  integer $length Length of the string to generate
   * @return String          The random string, ready to be served
   */
  function generateRandomString($length = 10)
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++)
    {
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
  }
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
      <?php
        /**
         * Check whether the random stuff exists in the db. If not, then generate and push to db.
         *
         * $randomStuff = getRandomStuff("lvl_1");
         *
         * if $randomStuff != NULL
         *   echo "<!-- The password as told by Hermione is " . $randomStuff . " -->";
         * else
         *
         */

        // This is the random part of the code
        echo "<!-- The password as told by Hermione is " . generateRandomString(25) . " -->";

        /**
         * The generated random stuff needs to added to db - it'd be generated only once per user per level
         *
         * pushRandomStuff("lvl_1", randomStuff);
         */
      ?>

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