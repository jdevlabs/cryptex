<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require_once "fn/db.php";

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";
?>

<script> document.title = "Cryptex | Leaderboard" </script>
<div class="container">
<div class ="panel panel-default">
    <div class="panel-heading">The Leaderboard</div>
  <!-- <center> -->
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Level</th>
        <th>Score</th>
        <th>Score Reached At</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $q = "SELECT * FROM gamedata, user WHERE user.userid = gamedata.userid order by score desc;";
      $result = mysql_query($q);
      $i = 0;
      while($row = mysql_fetch_array($result))
      {
        $i++;
        echo "<tr>";
        echo "<td>" . $i . "</td>" ;
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['level'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
        // See: http://in2.php.net/manual/en/function.date.php
        echo "<td>" . date('j M, g:i A', $row['reached']) . "</td>";
        echo "</tr>";
      }
    ?>
    </tbody>
    </table>
  <!-- </center> -->
</div>
</div>

<?php
  require "include/footer.php";
?>
