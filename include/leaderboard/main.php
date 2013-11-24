<div class="container">
<!-- <div class="row">
  <center><h3>Leader Board </h3></center>
  <br/><br/><br/>
</div> -->
<div class ="panel panel-default">
    <div class="panel-heading">Panel heading</div>
  <!-- <center> -->
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Username</th>
        <th>Level</th>
        <th>Score</th>
        <th>Score Reached At</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $q = "SELECT * FROM `gamedata`, `user` WHERE user.userid = gamedata.userid order by level desc;";
      $result = mysql_query($q);
      $i = 0;
      while($row = mysql_fetch_array($result))
      {
        $i++;
        echo "<tr>";
        echo "<td>" . $i . "</td>" ;
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['level'] . "</td>";
        echo "<td>" . '' . "</td>";
        echo "<td>" . '' . "</td>";
        echo "</tr>";
      }
    ?>
    </tbody>
    </table>
  <!-- </center> -->
</div>
</div>
