<?php include "_login.php"; ?>

<?php if ($_SESSION['loggedin'] != 1 ) { ?>
   <div class="span4 offset4 well"  style="margin-top: 95px;">
    <form name="input" action="?pid=login" method="POST">
Username: <input type="text" name="user"><br/>
Password: <input type="text" name="pass"><br/>
<input type="submit" value="Submit">
</form>
</div>
<?php } ?>
