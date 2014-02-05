<?php

// 11th level: Cookies + Ceaser Cipher
if ($_SESSION['level'] == 1)
{
  // The ques has not yet been generated.
  if ($_SESSION['level'] != $_SESSION['qlevel'])
  {
    // Generate question.
    $ques = ceaserCipher(str_replace(" ", "", getRandomFamily('Weasley')), 13);

    // Save question/answer pair to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", ceaserCipher($ques, 13), $_SESSION['userid']);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", '1', $_SESSION['userid']);
  }
  else
    $ques = getField("gamedata", "ques", $_SESSION['userid']);

  //Expires in 30 days, arbitrarily chosen - Would be unset by then
  setcookie("ButBrutusIsAnHonourableMan", $ques, time()+60*60*24*30);
}
// 12th level: Italicized Text + Response Headers + XOR
elseif ($_SESSION['level'] == 2)
{
  // The ques has not yet been generated.
  if ($_SESSION['level'] != $qlevel)
  {
    // Generate question.
    $ques = ceaserCipher(str_replace(" ", "", getRandomFamily('Weasley')), 13);

    // Save question/answer pair to db.
    updateField("gamedata", "ques", $ques, $_SESSION['userid']);
    updateField("gamedata", "ans", ceaserCipher($ques, 13), $_SESSION['userid']);

    // Set Q/A Updated to this level
    updateField("gamedata", "qlevel", '1', $_SESSION['userid']);
  }
  else
    $ques = getField("gamedata", "ques", $_SESSION['userid']);

  //Expires in 30 days, arbitrarily chosen - Would be unset by then
  setcookie("ButBrutusIsAnHonourableMan", $ques, time()+60*60*24*30);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bs.sticky.footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>


<body>
