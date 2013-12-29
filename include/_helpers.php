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

/**
 * Simple Ceaser Cipher
 * @param  [string] $string [Plain Text]
 * @param  [string] $n      [The Key]
 * @return [string]         [Ciphered Text]
 */
function ceaserCipher($string, $n)
{
  $length = strlen($string);
  $result = '';

  for($i = 0; $i < $length; $i++)
  {
    $ascii = ord($string{$i});

    $rotated = $ascii;

    if ($ascii > 64 && $ascii < 91)
    {
      $rotated += $n;
      $rotated > 90 && $rotated += -90 + 64;
      $rotated < 65 && $rotated += -64 + 90;
    } elseif ($ascii > 96 && $ascii < 123)
    {
      $rotated += $n;
      $rotated > 122 && $rotated += -122 + 96;
      $rotated < 97 && $rotated += -96 + 122;
    }

    $result .= chr($rotated);
  }

  return $result;
}
?>