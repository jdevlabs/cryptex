<?php

include '../meta/harry.php';

$morseTable = array('a'=>'.-','b'=>'-...','c'=>'-.-.','d'=>'-..','e'=>'.','f'=>'..-.','g'=>'--.','h'=>'....','i'=>'..','j'=>'.---','k'=>'-.-','l'=>'.-..','m'=>'--','n'=>'-.','o'=>'---','p'=>'.--.','q'=>'--.-','r'=>'.-.','s'=>'...','t'=>'-','u'=>'..-','v'=>'...-','w'=>'.--','x'=>'-..-','y'=>'-.--','z'=>'--..');

$name = str_replace(" ", "", strtolower(getRandomFamily('Black')));
$morse = '';

for ($i=0; $i < strlen($name); $i++) {
  $morse .= $morseTable[$name[$i]] . '  ';
}

// echo $morse;

StringToFile($morse, "./Image.png");

function StringToFile($string, $file) {
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

<img src="Image.png" alt="Generated Morse Code">
