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
  <div class="panel-heading" align="center">Leaderboard: The Top 25 Hackers</div>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Level</th>
        <th>Score</th>
        <th>Score Reached At</th>
        <th>Hints Taken</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $result = mysql_query("SELECT * FROM gamedata, user WHERE user.userid = gamedata.userid AND user.admin <> 1 ORDER BY score DESC,reached DESC LIMIT 35");
      $i = 1;
      while($row = mysql_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>" . $i . "</td>" ;
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['level'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
        echo "<td>" . date('j M, g:i A', $row['reached']) . "</td>";
        echo "<td>" . $row['hints'] . "</td>";
        echo "</tr>";
        $i++;
      }
    ?>
    </tbody>
    </table>
</div>
</div>

<?php
  require "include/footer.php";
?>
