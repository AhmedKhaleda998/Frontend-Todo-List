<?php
$text = "Hello, World!";
$length = strlen($text);
echo "1. Length of the string: '$text' is $length<br>";

$text = "Php Is Fun";
$lowercase = strtolower($text);
echo "2. The string '$text' in lowercase: $lowercase<br>";

$uppercase = strtoupper($text);
echo "3. The string '$text' in uppercase: $uppercase<br>";

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit";
$replaced_text = str_replace("consectetur", "FUN", $text);
echo "4. Original Text: $text<br>";
echo "Replaced text: $replaced_text<br>";
?>
