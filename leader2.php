<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require_once "fn/db.php";

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";

  $perPage = 20;
  $result = mysql_query("SELECT * FROM gamedata, user WHERE user.userid = gamedata.userid AND user.admin <> 1 ORDER BY score DESC,reached ASC");
  $admins = mysql_query("SELECT * FROM gamedata, user WHERE user.userid = gamedata.userid AND user.admin <> 0 ORDER BY score DESC,reached ASC");
  $totAdmins = mysql_num_rows($admins);
  $totRes = mysql_num_rows($result);
  $totPages = ceil($totRes/$perPage);

  if (isset($_GET['page']))
  {
    $currPage = $_GET['page'];
    if ($currPage > 0 && $currPage <= $totPages)
    {
      $start = ($currPage - 1) * $perPage;
      $end = $start + $perPage;
    }
    else
    {
      $start = 0;
      $end = $perPage;
    }
  }
  else
  {
    $currPage = 1;
    $start = 0;
    $end = $perPage;
  }

?>

<script> document.title = "Cryptex | Leaderboard" </script>

<div class ="panel panel-default">
  <div class="panel-heading" align="center">
    The Leaderboard:
    <?php
      $s = $start + 1;
      echo "$s - $end of $totRes* Players.";
    ?>
  </div>
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
      for ($i = $start; $i < $end; $i++)
      {
       if ($i == $totRes)
        break;

        $r = $i+1;
        $id = mysql_result($result, $i, 'pass');
        echo "<tr>";
        echo "<td>" . $r . "</td>" ;
        echo "<td><a href=\"https://facebook.com/profile.php?id=$id\">" . mysql_result($result, $i, 'name')  . "</a></td>";
        echo "<td>" . mysql_result($result, $i, 'level') . "</td>";
        echo "<td>" . mysql_result($result, $i, 'score') . "</td>";
        echo "<td>" . date('j M, g:i A', mysql_result($result, $i, 'reached')+34200) . "</td>";
        echo "<td>" . mysql_result($result, $i, 'hints') . "</td>";
        echo "</tr>";
      }
    ?>
    </tbody>
    </table>
</div>

<h5 class="pull-left" style="margin-top: 35px;"> * <?php echo $totAdmins; ?> administrative players are hidden from the board.</h5>

<ul class="pagination pagination-lg pull-right">
  <?php
    if ($currPage > 1) // Prev Page
    {
      $prev = $currPage-1;
      echo "<li><a href=\"?page=$prev\">&laquo;</a></li>";
    }

    for ($i=1; $i <= $totPages; $i++)
    {
      if ($i == $currPage)
        echo "<li class=\"active\"><a href=\"?page=$i\">$i</a></li>";
      else
        echo "<li><a href=\"?page=$i\">$i</a></li>";
    }

    if ($currPage < $totPages) // Next Page
    {
      $next = $currPage+1;
      echo "<li><a href=\"?page=$next\">&raquo;</a></li>";
    }
   ?>
</ul>

<?php
  require "include/footer.php";
?>
