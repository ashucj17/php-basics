<?php

// Create simple string

$string = 'World';

$myString1 = 'Hello';
$myString2 = "Hello";

echo $myString1 . " " . $string . "<br>";
echo $myString2 . $string . "<br>";

// String concatenation

#variable dose not parsed (\n,\t)  and interpreted inside single quotes
echo 'Hello $string' .'<br>';

#variable are parsed (\n,\t) interpreted inside double quotes
echo "Hello $string" . "<br>";

// String functions

echo "1: " . strlen("Ashish") . "<br>"; // it returns the length of the string
echo "2: " . strchr("Ashish", "i") . "<br>"; // it returns every character given form its occurence of the character

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php