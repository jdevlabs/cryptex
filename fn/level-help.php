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

/**
 * XOR a string with a key
 * @param  string $string [Plain Text]
 * @param  string $key    [The Key]
 * @return string         [Ciphered Text]
 */
function xorCipher($string, $key)
{
  $text =$string;
  $outText = '';

  // Iterate through each character
  for($i=0;$i<strlen($text);)
  {
     for($j=0;($j<strlen($key) && $i<strlen($text));$j++,$i++)
     {
         $outText .= $text{$i} ^ $key{$j};
     }
  }

  return $outText;
}

function strMorse($str)
{
  $morseTable = array('a'=>'.-','b'=>'-...','c'=>'-.-.','d'=>'-..','e'=>'.','f'=>'..-.','g'=>'--.','h'=>'....','i'=>'..','j'=>'.---','k'=>'-.-','l'=>'.-..','m'=>'--','n'=>'-.','o'=>'---','p'=>'.--.','q'=>'--.-','r'=>'.-.','s'=>'...','t'=>'-','u'=>'..-','v'=>'...-','w'=>'.--','x'=>'-..-','y'=>'-.--','z'=>'--..');

  $morse = '';

  for ($i=0; $i < strlen($name); $i++)
    $morse .= $morseTable[$name[$i]] . '  ';

 return $morse;
}


function StringToFile($string, $file)
{
  $im = imagecreatetruecolor(300, 100);

  $bg = imagecolorallocate($im, 240, 240, 240);
  $black = imagecolorallocate($im, 0, 0, 0);

  imagefilledrectangle($im, 0, 0, 299, 99, $bg);
  $font_file = '../assets/fonts/arial.ttf';

  imagefttext($im, 30, 0, 10, 25, $black, $font_file, $string);

  imagepng($im, $file, 9);
  imagedestroy($im);
}

?>
