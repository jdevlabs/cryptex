<?php

$family['Weasley'] = array("Arthur Weasley","Molly Weasley","Bill Weasley","Charlie Weasley","Percy Ignatius Weasley","Fleur Delacour Weasley","Fred Weasley","George Weasley","Angelina Johnson Weasley","Audrey Weasley","Hermione Granger Weasley","Ronald Bilius Weasley","Ginevra Molly Weasley","Victoire Weasley ","Dominique Weasley","Louis Weasley","Rose Weasley","Hugo Weasley","Lucy Weasley","Roxanne Weasley");
$family['Black'] = array("Sirius Black","Phineas Nigellus Black","Elladora Black","Isla Black Hitchens","Phineas Black","Arcturus Black","Belvina Black Burke","Cygnus Black ","Arcturus Black ","Lycoris Black","Regulus Black","Pollux Black","Cassiopeia Black","Callidora Black Longbottom","Marius Black","Cedrella Black","Charis Black Crouch ","Dorea Black Potter","Lucretia Black Prewett","Walburga Black Black","Orion Black","Cygnus Black","Alphard Black","Bellatrix Black Lestrange","Andromeda Black Tonks","Narcissa Black Malfoy ","Regulus Arcturus Black","Cedrella Black Weasley","Alphard Black","Nymphadora Tonks");

// die(getRandomFamily('Black'));
// die($family['Black'][29]);

function getRandomFamily($familyName)
{
  global $family;
  return trim($family[$familyName][rand(0, count($family[$familyName]) - 1)]);
}

?>
