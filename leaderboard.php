<?php
  error_reporting(E_ALL ^ E_NOTICE);

  require_once "config/_connect.php";
  require_once "config/_dbFunctions.php";
  require_once "config/_session.php";

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
        echo "<td>" . '' . "</td>";
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
