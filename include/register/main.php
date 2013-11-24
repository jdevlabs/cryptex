<?php include "_register.php"; ?>


<?php if ($_SESSION['loggedin'] != 1 ) { ?>
 <div class="span4 offset4 well "  style="margin-top: 100px;">
   <form name="input" action="#" method="POST">
Username: <input type="text" name="user"><br/>
Name: <input type="text" name="name"><br/>
Email: <input type="text" name="email"><br/>
Password: <input type="text" name="pass"><br/>
<input type="hidden" name="sent" value="sent">
<input type="submit" value="Submit">
</form>
  </div>
<?php } ?>