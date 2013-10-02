<?php

/**
 * Generates Random Strings
 *
 * @param  integer $length Length of the string to generate
 * @return String          The random string, ready to be served
 */
function generateRandomString($length = 10)
{
  $num   = "0123456789";
  $lower = "abcdefghijklmnopqrstuvwxyz";
  $upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $charSet = $num . $lower . $upper;

  $randomString = '';
  for ($i = 0; $i < $length; $i++)
  {
    $randomString .= $charSet[rand(0, strlen($charSet) - 1)];
  }
  return $randomString;
}

?>