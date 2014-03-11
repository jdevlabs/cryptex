<?php
// Todo: PP -> Fix level numbers
// 11th level: Cookies + Ceaser Cipher
if ($_SESSION['level'] == 1)
{
  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    $ques = ceaserCipher(str_replace(" ", "", getRandomFamily('Weasley')), 13);

    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", ceaserCipher($ques, 13), $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
  else
    $ques = getField("gamedata", "ques", $_SESSION['userid']);

  //Expires in 30 days, arbitrarily chosen - Would be unset by then
  setcookie("ButBrutusIsAnHonourableMan", $ques, time()+60*60*24*30);
}
// 12th level: Italicized Text + Response Headers + XOR
elseif ($_SESSION['level'] == 2)
{
  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    $ques = xorCipher(getRandomFamily('Black'), "9");

    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", xorCipher($ques, "9"), $_SESSION['userid']);
    updateField("gamedata", "qlevel", $_SESSION['level'], $_SESSION['userid']);
  }
  else
    $ques = getField("gamedata", "ques", $_SESSION['userid']);

  header("ABBarPlusABarB: " . $ques);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="assets/img/crypt.png">
</head>

<body>

<style>
/* Sticky footer styles */
html,
body {
 height: 100%;
}

/* Wrapper for page content to push down footer */
#wrap {
 height: auto !important;
 min-height: 100%;
 height: 100%;

 /* Negative indent footer by it's height */
 margin-bottom: -40px;
}

/* Set the fixed height of the footer here */
#push,
#footer {
 height: 40px;
}

#footer {
 padding-top: 10px;

 right: 15px;
 background-color: #efefef;
}

@media (max-width: 767px) {
  /* Site-wide footer */
 #footer {
   display: none;
 }
 /* Signin button on the home page */
 #signinBtn {
  width: 100%;
 }
}
</style>
