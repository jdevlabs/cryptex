<div class="container">
<div class="row">
<center>
<h3>Leader Board </h3><br/><br/><br/>
</center>
</div>
<div class ="row">
<center><table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Level</th>
                  <th>Username</th>
                  <th>Name</th>
                </tr>
              </thead>              
              <tbody>
 <?php  
 $q="SELECT * FROM `gamedata`  , `user`   WHERE user.userid = gamedata.userid order by level desc;";
 $result = mysql_query($q);
$i=0;
while($row = mysql_fetch_array($result))
  {
  $i++;
  echo "<tr>";
  echo "<td>" . $i . "</td>" ;
  echo "<td>" . $row['level'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "</tr>";
  }
  ?>
              </tbody>
            </table>
            </center>
         </div>
        </div>