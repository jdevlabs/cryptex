<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cryptex | Level 1</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link type = "text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
</head>

<body>
  <?php require '_navbar.php'; ?>

  <div class="row span4 offset3" style="margin-top: 120px;">
   <div class="span8">
    <h5><i id="quesHeader" class="icon icon-fire"></i> LEVEL 1</h5>
    <hr>
    <p id="quesData">
     Sam has gotten wise to all the people who wrote their own forms to get the password. Rather than actually learn the password, he decided to make his email program a little more secure. Give us the password and proceed to next level.
   </p>
   <hr>
   <form class="form-horizontal">
     <div class="form-group">
       <input id="quesInput" type="text" class="span5" placeholder="So you think you know the answer?">
       <button id="quesBtn" type="submit" class="btn btn-default">Submit</button>
     </div>
   </form>
 </div>
</div>

<!-- // <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<?php

//Now Load Additional Thingies.
// TODO: Can the user exploit?

?>

<script>
	$('#navSeparator2').show();
	$('#navUserPopup').show();
</script>
</body>
</html>
