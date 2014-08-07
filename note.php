<?php 
// Set the content-type
header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(410, 540);
$filename = ('cards/card_bg.png');
$im = imagecreatefrompng($filename);
// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$blue = imagecolorallocate($im, 61, 100, 255);

// The text to draw
$greeting = $_POST["greeting"];;
$message = $_POST["message"];;
$signature = $_POST["signature"];;
// Replace path by your own font path
$font = 'font.ttf';


// Add the text values are size, angle, xpos, ypos
$format_greeting = wordwrap($greeting, 30, "\n");
imagettftext($im, 20, 0, 20, 80, $white, $font, stripslashes($format_greeting));
// Check the amount of characters in $message and create new variable to cut the words after 30 characters and word wrap
$format_message = wordwrap($message, 30, "\n");
imagettftext($im, 20, 0, 20, 110, $white, $font, stripslashes($format_message));
$format_signature = wordwrap($signature, 30, "\n");
imagettftext($im, 16, 0, 20, 240, $white, $font, stripslashes($format_signature));

// Using imagepng() results in clearer text compared with imagejpeg()
$ran = rand();
$ran2 = $ran.".";
$save = strtolower($filename) . $ran2.$ext . ".png";
imagepng($im, $save);
?>